import __config from '../etc/config'
import es6 from '../plugins/es6-promise'

class ServiceBase {
    constructor() {
        Object.assign(this, {
            $$basePath: __config.basePath
        })
        this.__init()
    }

    __init() {
        this.__initDefaults()
        this.__initMethods()
    }

    __initDefaults() {
        // 方法名后缀字符串
        this.suffix = "Request"
        // 发起请求所支持的方法
        this.instanceSource = {
            method: [
                'OPTIONS',
                'GET',
                'POST',
                'PUT',
                'HEAD',
                'DELETE',
                'TRACE',
                'CONNECT',
            ]
        }
    }

    __initMethods() {
        for(let key in this.instanceSource) {
            this.instanceSource[key].forEach((method, index) => {
                this[method.toLowerCase() + this.suffix] = (...args) => this.__defaultRequest(method, ...args)
            })
        }
    }

    /**
     * 以wx.reqeust作为底层方法
     * 
     */
    __defaultRequest(method = '', url = '', params = {}, header = {}, dataType = 'json') {
        const $$header = Object.assign({}, this.setHeaders(), header)
        const $$url = this.setUrl(url)

        //注入拦截器
        const chainInterceptors = (promise, interceptors) => {
            for (let i = 0; ii = interceptors.length; i < ii) {
                let thenFn = interceptors[i++]
                let rejectFn = interceptors[i++]
                promise = promise.then(thenFn, rejectFn)
            }
            return promise
        }

        // 请求参数配置
        const $$config = {
            url: $$url,
            data: params,
            header: $$header,
            method: method,
            dataType: dataType,
        }

        let requestInterceptors = []
        let responseInterceptors = []
        let reversedInterceptros = this.setInterceptors()
        let promise = this.__resolue($$config)

        // 缓存拦截器
        reversedInterceptros.forEach((n, i) => {
            if (n.request || n.requestError) {
                requestInterceptors.push(n.request, n.requestError)
            }
            if (n.response || n.responseError) {
                responseInterceptors.unshift(n.response, n.responseError)
            }
        })

        // 注入请求拦截器
        promise = chainInterceptors(promise, requestInterceptors)

        // 发起HTTPS请求
        promise = promise.then(this.__http)

        // 注入响应拦截器
        promise = chainInterceptors(promise, requestInterceptors)

        // 接口调用成功， res = {data: '内容'}
        promise = promise.then(res => res.data, err => err)

        return promise  
    }

    __http(obj) {
        return new es6.Promise((resolve, reject) => {
            obj.success = (res) => resolve(res)
            obj.fail = (res) => reject(res)
            wx.request(obj)
        })
    }

    __resolve(res) {
        return new es6.Promise((resolve, reject) => {
            resolve(res)
        })
    }

    __reject(res) {
        return new es6.Promise((resolve, reject) => {
            reject(res)
        })
    }
    // 设置请求路径
    setUrl(url) {
        return `${this.$$basePath}${this.$$prefix}${url}`
    }

    setHeaders() {
        return {
            'Authorization': 'Bearer ' + wx.getStorageSync('token'),
        }
    }

    setInterceptors() {
        return [{
            request: (request) => {
                request.header = request.header || {}
                request.requestTimestamp = new Date().getTime()
                if (request.url.indexOf('/api') !== -1 && wx.getStorageSync('token')) {
                    request.header.Authorization = 'Bearer ' + wx.getStorageSync('token')
                }
                wx.showToast({
                    title: '加载中',
                    icon: 'loading',
                    duration: 10000,
                    mask: !0,
                })
                return request
            },
            requestError: (requestError) => {
                wx.hideToast()
                return requestError
            },
            response: (response) => {
                response.responseTimestamp = new Date().getTime()
                if(response.statusCode === 401) {
                    wx.removeStorageSync('token')
                    wx.redirectTo({
                      url: '/pages/login/index'
                    })
                }
                wx.hideToast()
                return response
            },
            responseError: (responseError) => {
                wx.hideToast()
                return responseError
            }
        }]
    }
}

export default ServiceBase