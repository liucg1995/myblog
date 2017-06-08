<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset=utf-8"utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>木庄网络博客-勤记录 懂分享</title>
    <meta name="keywords" content="木庄网络博客,IT技术,网络推广,编程技术,网站模板,SEO优化"/>
    <meta name="description" content="木庄网络博客，互联网创业浪潮中关注IT技术、站长、网络推广等资讯以及技术的记录与分享。"/>
    <meta http-equiv="windows-Target " content="_top "/>
    <link rel="stylesheet" type="text/css" href="/templates/blog/css/bootstrap.min.css"
          tppabs="templates/blog/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/templates/blog/css/nprogress.css"
          tppabs="templates/blog/css/nprogress.css">
    <link rel="stylesheet" type="text/css" href="/templates/blog/css/style.css" tppabs="templates/blog/css/style.css">
    <link rel="stylesheet" type="text/css" href="/templates/blog/css/font-awesome.min.css"
          tppabs="templates/blog/css/font-awesome.min.css">
    <link rel="apple-touch-icon-precomposed" href="/templates/blog/images/icon.png">
    <script src="/templates/blog/js/jquery-2.1.4.min.js"></script>
    <script src="/templates/blog/js/nprogress.js" tppabs="templates/blog/js/nprogress.js"></script>
    {{--<script src="/templates/blog/js/jquery.lazyload.min.js" tppabs="templates/blog/js/jquery.lazyload.min.js"></script>--}}



</head>
<body class="user-select">
<header class="header">
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="header-topbar hidden-xs link-border">
                <ul class="site-nav topmenu">
                    <li><a href="tags/index.htm" tppabs="tags/">标签云</a></li>
                    <li><a href="bookmark/index.htm" tppabs="bookmark/" rel="nofollow">书签</a></li>
                    <li><a href="readers/index.htm" tppabs="readers/" rel="nofollow">读者墙</a></li>
                    <li><a href="rss.html" tppabs="rss.html" title="RSS订阅" rel="nofollow"><i class="fa fa-rss">
                            </i> RSS订阅</a></li>
                </ul>
                <a href="javascript:;" class="register">勤记录 懂分享</a></div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#header-navbar" aria-expanded="false"><span class="sr-only"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <h1 class="logo hvr-bounce-in"><a href="/" tppabs="" title="木庄网络博客">
                        <img src="/upload/201610/17/201610171329086541.png"
                             alt="木庄网络博客"/></a></h1>
            </div>

            <div class="collapse navbar-collapse" id="header-navbar" name="index">
                <form class="navbar-form visible-xs">
                    <div class="input-group">
                        <input type="text" class="form-control" onkeydown=""
                               size="35" placeholder="请输入关键字" id="keyword" name="keyword" maxlength="15"
                               autocomplete="off"/>
                        <span class="input-group-btn">
        <input type="button" value="搜索"
               class="btn btn-default btn-search">
    </span>
                    </div>

                </form>
                @include("part.menu")
            </div>
        </div>
    </nav>
</header>
@yield('content')
<footer class="footer">
    <div class="container">
        <p>本站[<a href="index.htm" tppabs="">木庄网络博客</a>]的部分内容来源于网络，若侵犯到您的利益，请联系站长删除！谢谢！Powered By [<a
                    href="javascript:if(confirm('http://www.dtcms.net/  \n\n??ļ????? Teleport Ultra ??, ?Ϊ ??һ???????????????Ϊ?????????ĵ????  \n\n????????????'))window.location='http://www.dtcms.net/'"
                    tppabs="http://www.dtcms.net/" target="_blank" rel="nofollow">DTcms</a>] Version 4.0 &nbsp;<a
                    href="javascript:if(confirm('http://www.miitbeian.gov.cn/  \n\n??ļ????? Teleport Ultra ??, ?Ϊ ??һ???????????????Ϊ?????????ĵ????  \n\n????????????'))window.location='http://www.miitbeian.gov.cn/'"
                    tppabs="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">闽ICP备14015154号-3</a> &nbsp; <a
                    href="sitemap.xml.htm" tppabs="sitemap.xml" target="_blank" class="sitemap">网站地图</a> &nbsp; <a
                    href="sitemap.html" tppabs="sitemap.html" target="_blank" class="sitemap">站点地图</a></p>
    </div>
    <div id="gotop"><a class="gotop"></a></div>
</footer>
<div id="rightClickMenu">
    <ul class="list-group rightClickMenuList">
        <li class="list-group-item disabled">欢迎访问网络博客</li>
    </ul>
</div>
<script src="https://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/templates/blog/js/jquery.ias.js" tppabs="templates/blog/js/jquery.ias.js"></script>
{{--<script src="/templates/blog/js/scripts.js" tppabs="templates/blog/js/scripts.js"></script>--}}
{{--<script type="text/javascript">--}}
{{--function siteTime() {--}}
{{--window.setTimeout("siteTime()", 1000);--}}
{{--var seconds = 1000;--}}
{{--var minutes = seconds * 60;--}}
{{--var hours = minutes * 60;--}}
{{--var days = hours * 24;--}}

{{--var today = new Date();--}}
{{--var todayYear = today.getFullYear();--}}
{{--var todayMonth = today.getMonth();--}}
{{--var todayDate = today.getDate();--}}

{{--var t1 = Date.UTC(2016,7,8);--}}
{{--var t2 = Date.UTC(todayYear, todayMonth, todayDate);--}}
{{--var diff = t2 - t1;--}}

{{--var diffDays = Math.floor(diff / days);--}}
{{--document.getElementById("sitetime").innerHTML = diffDays + " 天 ";--}}
{{--}--}}
{{--siteTime();--}}
{{--</script>--}}

</body>
</html>