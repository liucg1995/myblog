<!DOCTYPE html >
<html lang="zh" style="width:100%">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="content=width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name = "format-detection" content = "telephone=no">
    <title>{{isset($title)?$title:"乐子计划"}}</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="/zhou/huanhuan.css">
    <link href="//cdn.bootcss.com/Swiper/3.3.1/css/swiper.min.css" rel="stylesheet">
    <script src="http://cdn.bootcss.com/jquery/2.2.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/Swiper/3.4.0/js/swiper.jquery.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <!--<script src="/zhou/swiper-3.3.1.jquery.min.js"></script>-->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/zhou/index.css">
    
    <script src="http://res.wx.qq.com/open/js/jweixin-1.1.0.js" type="text/javascript"></script>
    <script>
    function wxshare(){
            wx.config(<?php echo $config->config(array('onMenuShareTimeline', 'onMenuShareAppMessage',"openAddress"), false, true) ?>);
            wx.ready(function() {
                wx.onMenuShareTimeline({
                    title:"与海航集团一起，乐享公益", // 分享标题
                    link: "http://"+window.location.host + "/index", // 分享链接
                    imgUrl: "http://"+window.location.host + "/images/share.jpg", // 分享图标
                    success: function() {
                        _hmt.push(['_trackEvent', 'hna', 'share', 'wechat', 'friends']);
                    },
                    cancel: function() {
                        // 用户取消分享后执行的回调函数
                    }
                });
                wx.onMenuShareAppMessage({
                    title: '与海航集团一起，乐享公益', // 分享标题
                    desc: "乐子计划", // 分享描述
                    link: "http://"+window.location.host + "/index", // 分享链接
                    imgUrl:"http://"+window.location.host + "/images/share.jpg", // 分享图标

                    success: function() {
                        _hmt.push(['_trackEvent', 'hna', 'share', 'wechat', 'friend']);
                    },
                    cancel: function() {
                        // 用户取消分享后执行的回调函数
                    }
                });
            });
    }
</script>

</head>
<body>
    <div class="content-wrapper">
        @yield('content')
    </div>
    <div id="popup">
        <div class="box">
            <p class="content">提示</p>
            <span class="btn btn_f">取消</span>
            <span class="btn btn_t">知道啦</span>
        </div>
    </div>
<script type="text/javascript" src="/js/king/popup.js"></script>

</body>

<script>
    var mySwiper = new Swiper('.swiper-container', {
        preventClicks : false,
        pagination : '.swiper-pagination',
        loop : true,
        autoplay: 3000//可选选项，自动滑动
    });
    function sendmessage(){
        var uid = '<?php echo $_SESSION['uid'];?>';
        $.ajax({
            url: "/index/sendmessage?uid=" + uid,
            type: 'get', //提交的方式
            success: function (data) {

            }
        });
    }
    $(function(){
        sendmessage();
        setInterval(sendmessage,10000);
    })
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?6f97dc5e10083292a31001b9bf05075c";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</html>

