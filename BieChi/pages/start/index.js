const App = getApp()

Page({
  data:{
    indicatorDots: !1,
    autoplay: !1,
    current:0,
    interval:3000,
    duration:1000,
    circular:!1,
  },
  onLoad:function(options){
    // 页面初始化 options为页面跳转所带来的参数
  },
  onReady:function(){
    // 页面渲染完成
  },
  onShow:function(){
    // 页面显示
  },
  onHide:function(){
    // 页面隐藏
  },
  onUnload:function(){
    // 页面关闭
  },
  bindload(e){
    // setTimeout(App.WxService.getStorageSync('token') ? this.getIndex : this.goLogin, 3000)
  },
  goIndex(){
    // App.WxService.switchTab({
    //   url:'pages/index/index'
    // })
  },
  goLogin() {
    // App.WxService.redirectTo('/pages/login/index')
  }
})