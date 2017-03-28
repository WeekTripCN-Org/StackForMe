import es6 from '../plugins/es6-promise'

/**
 * 创建资源对象函数
 * 
 * @param {string} url 一个含有参数的URL模版
 * @param {Object} paramDefaults URL参数的默认值
 * @param {Object} actions 资源方法的默认值
 * @param {Object} options 资源方法后缀字符串的默认值
 * 
 * @example
 * 
 */
class Resource {
    constructor(url = '', paramDefaults = {}, actions = {}, options = {}) {
        Object.assign(this, {
            url,
            paramDefaults,
            actions,
            options,
        })
        this.__init()
    }

    __init() {
        this.__initTools()
        this.__initDefaults()
        this.__initResource()
    }

    __initTools() {
        this.__tools = {
            isArray(value) {
                return Array.isArray(value)
            },
            isFunction(value) {
                return typeof value === 'function'
            },
            isDefined(value) {
                return typeof value !== 'undefinded'
            },
            isObject(value) {
                return value !== null && typeof value === 'object'
            },
            type(obj) {
                const toString = Object.prototype.toString
                if( obj == null ) {
                    return obj + ''
                }
                
                return typeof obj === 'object' || typeof obj === 'function' ? toString.call(obj) || 'object' : typeof obj
            },
            clone(obj) {
                if (typeof obj !== 'object' || !obj) {
                    return obj
                }
                let copy = {}
                for (let attr in obj) {
                    if (obj.hasOwnProperty(attr)) {
                        copy[attr] = obj[attr]
                    }
                }
                return copy
            },
            each(obj, iterator) {
                let i, key
                if (obj && typeof obj.length === 'number') {
                    for (i = 0; i < obj.length; i++) {
                        iterator.call(obj[i], obj[i], i)
                    }
                } else if (this.isObject(obj)) {
                    for(key in obj) {
                        if (obj.hasOwnProperty(key)) {
                            iterator.call(obj[key], obj[key], key)
                        }
                    }
                }
                return obj
            }

        }
    }
    
    __initDefaults() {

    }

    __initResource() {

    }
}

export default Resource