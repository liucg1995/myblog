<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset=utf-8"utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>木庄网络博客-勤记录 懂分享</title>
    <meta name="keywords" content="木庄网络博客,IT技术,网络推广,编程技术,网站模板,SEO优化" />
    <meta name="description" content="木庄网络博客，互联网创业浪潮中关注IT技术、站长、网络推广等资讯以及技术的记录与分享。" />
    <meta http-equiv="windows-Target " content="_top " />
    <link rel="stylesheet" type="text/css" href="templates/blog/css/bootstrap.min.css" tppabs="templates/blog/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="templates/blog/css/nprogress.css" tppabs="templates/blog/css/nprogress.css">
    <link rel="stylesheet" type="text/css" href="templates/blog/css/style.css" tppabs="templates/blog/css/style.css">
    <link rel="stylesheet" type="text/css" href="templates/blog/css/font-awesome.min.css" tppabs="templates/blog/css/font-awesome.min.css">
    <link rel="apple-touch-icon-precomposed" href="templates/blog/images/icon.png">
    <script src="templates/blog/js/jquery-2.1.4.min.js"></script>
    <script src="templates/blog/js/nprogress.js" tppabs="templates/blog/js/nprogress.js"></script>
    <script src="templates/blog/js/jquery.lazyload.min.js" tppabs="templates/blog/js/jquery.lazyload.min.js"></script>
    <!--[if gte IE 9]>
    <script src="templates/blog/js/jquery-1.11.1.min.js" tppabs="templates/blog/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="templates/blog/js/html5shiv.min.js" tppabs="templates/blog/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="templates/blog/js/respond.min.js" tppabs="templates/blog/js/respond.min.js" type="text/javascript"></script>
    <script src="templates/blog/js/selectivizr-min.js" tppabs="templates/blog/js/selectivizr-min.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script>window.location.href='upgrade-browser.html'/*tpa=upgrade-browser.html*/;</script>
    <![endif]-->
</head>
<body class="user-select">
<header class="header">
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="header-topbar hidden-xs link-border">
                <ul class="site-nav topmenu">
                    <li><a href="../../tags/index.htm" tppabs="http://www.muzhuangnet.com/tags/">标签云</a></li>
                    <li><a href="../../bookmark/index.htm" tppabs="http://www.muzhuangnet.com/bookmark/" rel="nofollow">书签</a></li>
                    <li><a href="../../readers/index.htm" tppabs="http://www.muzhuangnet.com/readers/" rel="nofollow">读者墙</a></li>
                    <li><a href="../../rss.html" tppabs="http://www.muzhuangnet.com/rss.html" title="RSS订阅" rel="nofollow"><i class="fa fa-rss">
                            </i> RSS订阅</a></li>
                </ul>
                <a href="javascript:;" class="register">勤记录 懂分享</a></div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar" aria-expanded="false"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <h1 class="logo hvr-bounce-in"><a href="../../index.htm" tppabs="http://www.muzhuangnet.com/" title="木庄网络博客">
                        <img src="../../upload/201610/17/201610171329086541.png" tppabs="http://www.muzhuangnet.com/upload/201610/17/201610171329086541.png" alt="木庄网络博客" /></a></h1>
            </div>
            <div class="collapse navbar-collapse" id="header-navbar" name="code">
                <form class="navbar-form visible-xs">
                    <div class="input-group">
                        <input type="text" class="form-control" onkeydown="if (event.keyCode == 13) {SiteSearch('http://www.muzhuangnet.com/search.html', '#keyword');return false};"
                               size="35" placeholder="请输入关键字" id="keyword" name="keyword" maxlength="15" autocomplete="off" />
                        <span class="input-group-btn">
        <input type="button" value="搜索" onclick="SiteSearch('../../search.html'/*tpa=http://www.muzhuangnet.com/search.html*/, '#keyword');"
               class="btn btn-default btn-search">
    </span>
                    </div>

                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li id="index"><a data-cont="木庄网络博客" title="木庄网络博客" href="../../index.htm" tppabs="http://www.muzhuangnet.com/">
                            首页</a></li>

                    <li id="mznetblog"><a data-cont="MZ-NetBlog主题" title="MZ-NetBlog主题"
                                          href="../mznetblog/index.htm" tppabs="http://www.muzhuangnet.com/list/mznetblog/">MZ-NetBlog主题</a></li>

                    <li id="code"><a data-cont="IT技术笔记" title="IT技术笔记"
                                     href="../code/index.htm" tppabs="http://www.muzhuangnet.com/list/code/">IT技术笔记</a></li>

                    <li id="share"><a data-cont="源码分享" title="源码分享"
                                      href="../share/index.htm" tppabs="http://www.muzhuangnet.com/list/share/">源码分享</a></li>

                    <li id="news"><a data-cont="资讯分享" title="资讯分享"
                                     href="../news/index.htm" tppabs="http://www.muzhuangnet.com/list/news/">资讯分享</a></li>

                    <li id="machine"><a data-cont="爱搞机" title="爱搞机"
                                        href="../machine/index.htm" tppabs="http://www.muzhuangnet.com/list/machine/">爱搞机</a></li>

                    <script type="text/javascript">
                        $(function () {
                            var flag = $("#header-navbar").attr("name");
                            $("#" + flag).addClass("active");
                        })
                    </script>

                </ul>
            </div>
        </div>
    </nav>
</header>
<section class="container">
    <div class="content-wrap">
        <div class="content">
            <div class="title">
                <h3 style="line-height: 1.3">PHP</h3>
                <div class="more">

                </div>
            </div>

            <article class="excerpt excerpt-1"><a class="focus" href="../../show/363.html" tppabs="http://www.muzhuangnet.com/show/363.html" title="PHP页面跳转之header()函数的使用" target="_blank"><img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/20/201610201650385553.jpg" src="../../upload/201610/20/201610201650385553.jpg" tppabs="http://www.muzhuangnet.com/upload/201610/20/201610201650385553.jpg" alt="PHP页面跳转之header()函数的使用" /></a>
                <header><a class="cat" href="index.htm" tppabs="http://www.muzhuangnet.com/list/php/" title="PHP">PHP<i></i></a>
                    <h2><a href="../../show/363.html" tppabs="http://www.muzhuangnet.com/show/363.html" title="PHP页面跳转之header()函数的使用" target="_blank">PHP页面跳转之header()函数的使用</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> 2016-12-09</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 91</span> <a class="comment" href="../../show/363.html#comment" tppabs="http://www.muzhuangnet.com/show/363.html#comment" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 2</a></p>
                <p class="note">PHP页面跳转之header()函数的使用：某个页面直接跳转至其他页面header()函数的定义：void header (string string [,bool replace [,int http_response_code]]) 可选参数replace指明是替换前一条类似标头还是添加一条相同类型的标头，默认为替换。 第二个可选参数http_response…</p>
            </article>

            <article class="excerpt excerpt-2"><a class="focus" href="../../show/294.html" tppabs="http://www.muzhuangnet.com/show/294.html" title="phpStudy今日更新，支持自定义php版本" target="_blank"><img class="thumb" data-original="http://www.muzhuangnet.com/upload/201611/03/201611031150587017.jpg" src="../../upload/201611/03/201611031150587017.jpg" tppabs="http://www.muzhuangnet.com/upload/201611/03/201611031150587017.jpg" alt="phpStudy今日更新，支持自定义php版本" /></a>
                <header><a class="cat" href="index.htm" tppabs="http://www.muzhuangnet.com/list/php/" title="PHP">PHP<i></i></a>
                    <h2><a href="../../show/294.html" tppabs="http://www.muzhuangnet.com/show/294.html" title="phpStudy今日更新，支持自定义php版本" target="_blank">phpStudy今日更新，支持自定义php版本</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> 2016-11-03</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 114</span> <a class="comment" href="../../show/294.html#comment" tppabs="http://www.muzhuangnet.com/show/294.html#comment" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 1</a></p>
                <p class="note">非常好用的php环境一键配置工具phpStudy于今日，2016年11月03日再次更新了，新增支持自定义php版本。新特征：完美支持win10，支持自定义php版本。phpStudy Linux版与Win版同步上线，支持Apache/Nginx/Tengine/Lighttpd/IIS7/8/6。对学习PHP的新手来说，WINDOWS下环境配置是一件…</p>
            </article>

            <article class="excerpt excerpt-3"><a class="focus" href="../../show/201.html" tppabs="http://www.muzhuangnet.com/show/201.html" title="PHP页面跳转几种实现技巧" target="_blank"><img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/20/201610201650385553.jpg" src="../../upload/201610/20/201610201650385553.jpg" tppabs="http://www.muzhuangnet.com/upload/201610/20/201610201650385553.jpg" alt="PHP页面跳转几种实现技巧" /></a>
                <header><a class="cat" href="index.htm" tppabs="http://www.muzhuangnet.com/list/php/" title="PHP">PHP<i></i></a>
                    <h2><a href="../../show/201.html" tppabs="http://www.muzhuangnet.com/show/201.html" title="PHP页面跳转几种实现技巧" target="_blank">PHP页面跳转几种实现技巧</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> 2016-09-23</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 42</span> <a class="comment" href="../../show/201.html#comment" tppabs="http://www.muzhuangnet.com/show/201.html#comment" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 0</a></p>
                <p class="note">PHP页面跳转一、header()函数header()函数是PHP中进行页面跳转的一种十分简单的方法。header()函数的主要功能是将HTTP协议标头(header)输出到浏览器。header()函数的定义如下：void header (string string [,bool replace [,int http_response_code]])可选参数replace指明是替…</p>
            </article>

            <article class="excerpt excerpt-4"><a class="focus" href="../../show/200.html" tppabs="http://www.muzhuangnet.com/show/200.html" title="PHP的加密解密字符串函数" target="_blank"><img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/20/201610201650385553.jpg" src="../../upload/201610/20/201610201650385553.jpg" tppabs="http://www.muzhuangnet.com/upload/201610/20/201610201650385553.jpg" alt="PHP的加密解密字符串函数" /></a>
                <header><a class="cat" href="index.htm" tppabs="http://www.muzhuangnet.com/list/php/" title="PHP">PHP<i></i></a>
                    <h2><a href="../../show/200.html" tppabs="http://www.muzhuangnet.com/show/200.html" title="PHP的加密解密字符串函数" target="_blank">PHP的加密解密字符串函数</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> 2016-09-23</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 57</span> <a class="comment" href="../../show/200.html#comment" tppabs="http://www.muzhuangnet.com/show/200.html#comment" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 1</a></p>
                <p class="note">函数名称:encrypt函数作用:加密解密字符串。使用方法:加密:encrypt(str,E,nowamagic);解密:encrypt(被加密过的字符串,D,nowamagic);参数说明:$string   :需要加密解密的字符串$Operation:判断…</p>
            </article>

            <article class="excerpt excerpt-5"><a class="focus" href="../../show/199.html" tppabs="http://www.muzhuangnet.com/show/199.html" title="pathinfo() 函数" target="_blank"><img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/20/201610201650385553.jpg" src="../../upload/201610/20/201610201650385553.jpg" tppabs="http://www.muzhuangnet.com/upload/201610/20/201610201650385553.jpg" alt="pathinfo() 函数" /></a>
                <header><a class="cat" href="index.htm" tppabs="http://www.muzhuangnet.com/list/php/" title="PHP">PHP<i></i></a>
                    <h2><a href="../../show/199.html" tppabs="http://www.muzhuangnet.com/show/199.html" title="pathinfo() 函数" target="_blank">pathinfo() 函数</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> 2016-09-23</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 33</span> <a class="comment" href="../../show/199.html#comment" tppabs="http://www.muzhuangnet.com/show/199.html#comment" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 0</a></p>
                <p class="note">pathinfo() 函数：该函数以数组的形式返回文件路径信息，用法为pathinfo(path, PRocess_sections) 其中path 为必须参数，是要检查的路径， process_sections 是可选参数，默认值为all, 可取值：PATHINFO_DIRNAME 只返回 dirnamePATHINFO_BASENAME 只返回 basenamePATHINFO_EXT…</p>
            </article>

            <article class="excerpt excerpt-6"><a class="focus" href="../../show/198.html" tppabs="http://www.muzhuangnet.com/show/198.html" title="PHP server forbidden to access 类型的错误" target="_blank"><img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/20/201610201655366274.jpg" src="../../upload/201610/20/201610201655366274.jpg" tppabs="http://www.muzhuangnet.com/upload/201610/20/201610201655366274.jpg" alt="PHP server forbidden to access 类型的错误" /></a>
                <header><a class="cat" href="index.htm" tppabs="http://www.muzhuangnet.com/list/php/" title="PHP">PHP<i></i></a>
                    <h2><a href="../../show/198.html" tppabs="http://www.muzhuangnet.com/show/198.html" title="PHP server forbidden to access 类型的错误" target="_blank">PHP server forbidden to access 类型的错误</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> 2016-09-23</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 24</span> <a class="comment" href="../../show/198.html#comment" tppabs="http://www.muzhuangnet.com/show/198.html#comment" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 0</a></p>
                <p class="note">PHP server forbidden to access 类型的错误：这种类型的错误是由于可能在配置文件中设置了拒绝访问。找到httpd.conf, 中对应的&lt;Directory /&gt;， 将其中的Deny from all 注释掉，换成 Allow from all 或 satisfy all.</p>
            </article>

            <article class="excerpt excerpt-7"><a class="focus" href="../../show/197.html" tppabs="http://www.muzhuangnet.com/show/197.html" title="Windows10中的IIS10安装phpmanager" target="_blank"><img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/20/201610201704335047.jpg" src="../../upload/201610/20/201610201704335047.jpg" tppabs="http://www.muzhuangnet.com/upload/201610/20/201610201704335047.jpg" alt="Windows10中的IIS10安装phpmanager" /></a>
                <header><a class="cat" href="index.htm" tppabs="http://www.muzhuangnet.com/list/php/" title="PHP">PHP<i></i></a>
                    <h2><a href="../../show/197.html" tppabs="http://www.muzhuangnet.com/show/197.html" title="Windows10中的IIS10安装phpmanager" target="_blank">Windows10中的IIS10安装phpmanager</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> 2016-09-23</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 40</span> <a class="comment" href="../../show/197.html#comment" tppabs="http://www.muzhuangnet.com/show/197.html#comment" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 0</a></p>
                <p class="note">Windows10中自带的IIS：Microsoft-IIS/10.0。这个10却让原本支持组件无法安装了，php manager组件安装时提示“必须安装IIS7以上才可以安装”。那是不是真的就没法在新的IIS上安装了呢？显然不是的。自IIS7以来，微软的IIS更改并不大，架构一致，几乎所有IIS7能用的组件都能够在…</p>
            </article>

            <article class="excerpt excerpt-8"><a class="focus" href="../../show/193.html" tppabs="http://www.muzhuangnet.com/show/193.html" title="PHP连接MYSQL数据库的方法" target="_blank"><img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/20/201610201650385553.jpg" src="../../upload/201610/20/201610201650385553.jpg" tppabs="http://www.muzhuangnet.com/upload/201610/20/201610201650385553.jpg" alt="PHP连接MYSQL数据库的方法" /></a>
                <header><a class="cat" href="index.htm" tppabs="http://www.muzhuangnet.com/list/php/" title="PHP">PHP<i></i></a>
                    <h2><a href="../../show/193.html" tppabs="http://www.muzhuangnet.com/show/193.html" title="PHP连接MYSQL数据库的方法" target="_blank">PHP连接MYSQL数据库的方法</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> 2016-09-22</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 49</span> <a class="comment" href="../../show/193.html#comment" tppabs="http://www.muzhuangnet.com/show/193.html#comment" title="评论" target="_blank"><i class="glyphicon glyphicon-comment"></i> 1</a></p>
                <p class="note">&lt;?php//设置字符集header(Content-Type: text/html; charset=utf8);//连接数据库$link = mysql_connect(&quot;localhost&quot;,&quot;root&quot;,&quot;123456&quot;);if(!$link){echo 数据库连接失败...&lt;br&gt;;exit(-1);}else{echo &quot;数据库连接成功...&lt;br&am…</p>
            </article>

            <nav class="pagination" style="display: none;">
                <ul>
                    <li class="next-page"><a href="2.html" tppabs="http://www.muzhuangnet.com/list/php/2.html">下一页</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <aside class="sidebar">
        <div class="fixed">
            <div class="widget widget_search">
                <form class="navbar-form" id="searchform">
                    <div class="input-group">
                        <input type="text" class="form-control" onkeydown="if (event.keyCode == 13) {SiteSearch('http://www.muzhuangnet.com/search.html', '#keywords');return false};"
                               size="35" placeholder="请输入关键字" id="keywords" name="keywords" maxlength="15" autocomplete="off" />
                        <span class="input-group-btn">
        <input type="button" value="搜索" onclick="SiteSearch('../../search.html'/*tpa=http://www.muzhuangnet.com/search.html*/, '#keywords');"
               class="btn btn-default btn-search" id="searchsubmit" value="Search">
    </span>
                    </div>
                </form>

            </div>
            <div class="widget widget_sentence">
                <h3>标签云</h3>
                <div class="widget-sentence-content">
                    <ul class="plinks ptags">

                        <li><a href="../../tags/list/382/index.htm" tppabs="http://www.muzhuangnet.com/tags/list/382/" title="AR红包">AR红包 <span class="badge">1</span></a></li>

                        <li><a href="../../tags/list/252/index.htm" tppabs="http://www.muzhuangnet.com/tags/list/252/" title="VS2010">VS2010 <span class="badge">2</span></a></li>

                        <li><a href="../../tags/list/272/index.htm" tppabs="http://www.muzhuangnet.com/tags/list/272/" title="导航">导航 <span class="badge">1</span></a></li>

                        <li><a href="../../tags/list/66/index.htm" tppabs="http://www.muzhuangnet.com/tags/list/66/" title="百度">百度 <span class="badge">14</span></a></li>

                        <li><a href="../../tags/list/126/index.htm" tppabs="http://www.muzhuangnet.com/tags/list/126/" title="phpManager">phpManager <span class="badge">1</span></a></li>

                        <li><a href="../../tags/list/303/index.htm" tppabs="http://www.muzhuangnet.com/tags/list/303/" title="删了">删了 <span class="badge">1</span></a></li>

                        <li><a href="../../tags/list/98/index.htm" tppabs="http://www.muzhuangnet.com/tags/list/98/" title="ManagedPipelineHandler">ManagedPipelineHandler <span class="badge">1</span></a></li>

                        <li><a href="../../tags/list/440/index.htm" tppabs="http://www.muzhuangnet.com/tags/list/440/" title="批量删除注释">批量删除注释 <span class="badge">1</span></a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="widget widget_hot">
            <h3>最新评论文章</h3>
            <ul>

                <li><a title="自媒体12个赚钱方法" href="../../show/424.html" tppabs="http://www.muzhuangnet.com/show/424.html"><span
                                class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201704/25/201704250929411769.jpg"
         src="../../upload/201704/25/201704250929411769.jpg" tppabs="http://www.muzhuangnet.com/upload/201704/25/201704250929411769.jpg"
         alt="自媒体12个赚钱方法" />
</span><span class="text">自媒体12个赚钱方法</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2017-05-28
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>45</span></a></li>

                <li><a title="用正则删除vs项目的所有双斜杠"//"注释" href="../../show/407.html" tppabs="http://www.muzhuangnet.com/show/407.html"><span
                            class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201703/18/201703180040076542.jpg"
         src="../../upload/201703/18/201703180040076542.jpg" tppabs="http://www.muzhuangnet.com/upload/201703/18/201703180040076542.jpg"
         alt="用正则删除vs项目的所有双斜杠"//"注释" />
</span><span class="text">用正则删除vs项目的所有双斜杠"//"注释</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2017-03-18
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>94</span></a></li>

                <li><a title="变异病毒“永恒之蓝”席卷全球,唯独朝鲜安然无恙" href="../../show/423.html" tppabs="http://www.muzhuangnet.com/show/423.html"><span
                                class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201705/14/201705141154457541.jpg"
         src="../../upload/201705/14/201705141154457541.jpg" tppabs="http://www.muzhuangnet.com/upload/201705/14/201705141154457541.jpg"
         alt="变异病毒“永恒之蓝”席卷全球,唯独朝鲜安然无恙" />
</span><span class="text">变异病毒“永恒之蓝”席卷全球,唯独朝鲜安然无恙</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2017-05-14
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>128</span></a></li>

                <li><a title="本站源码免费下载" href="../../show/338.html" tppabs="http://www.muzhuangnet.com/show/338.html"><span
                                class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg"
         src="../../upload/201610/18/201610181739277776.jpg" tppabs="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg"
         alt="本站源码免费下载" />
</span><span class="text">本站源码免费下载</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2016-11-26
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>1277</span></a></li>

                <li><a title="iPhone8屏幕无边框概念设计+IOS10.3操作系统" href="../../show/422.html" tppabs="http://www.muzhuangnet.com/show/422.html"><span
                                class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201705/12/201705122233385093.jpg"
         src="../../upload/201705/12/201705122233385093.jpg" tppabs="http://www.muzhuangnet.com/upload/201705/12/201705122233385093.jpg"
         alt="iPhone8屏幕无边框概念设计+IOS10.3操作系统" />
</span><span class="text">iPhone8屏幕无边框概念设计+IOS10.3操作系统</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2017-05-12
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>58</span></a></li>

                <li><a title="免费开源建站系统分享" href="../../show/421.html" tppabs="http://www.muzhuangnet.com/show/421.html"><span
                                class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201705/10/201705101558105349.jpg"
         src="../../upload/201705/10/201705101558105349.jpg" tppabs="http://www.muzhuangnet.com/upload/201705/10/201705101558105349.jpg"
         alt="免费开源建站系统分享" />
</span><span class="text">免费开源建站系统分享</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2017-05-10
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>82</span></a></li>

                <li><a title="自媒体大神经常逛的网站" href="../../show/419.html" tppabs="http://www.muzhuangnet.com/show/419.html"><span
                                class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201704/25/201704250929411769.jpg"
         src="../../upload/201704/25/201704250929411769.jpg" tppabs="http://www.muzhuangnet.com/upload/201704/25/201704250929411769.jpg"
         alt="自媒体大神经常逛的网站" />
</span><span class="text">自媒体大神经常逛的网站</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2017-04-25
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>

                <li><a title="0成本网络赚钱项目思路分享" href="../../show/420.html" tppabs="http://www.muzhuangnet.com/show/420.html"><span
                                class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201705/09/201705091518155746.jpg"
         src="../../upload/201705/09/201705091518155746.jpg" tppabs="http://www.muzhuangnet.com/upload/201705/09/201705091518155746.jpg"
         alt="0成本网络赚钱项目思路分享" />
</span><span class="text">0成本网络赚钱项目思路分享</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2017-05-09
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>41</span></a></li>

            </ul>
        </div>

        <div class="widget widget_sentence">

            <a href="javascript:if(confirm('http://web.muzhuangnet.com/  \n\n??ļ????? Teleport Ultra ??, ?Ϊ ??һ???????????????Ϊ?????????ĵ????  \n\n????????????'))window.location='http://web.muzhuangnet.com/'" tppabs="http://web.muzhuangnet.com/" target="_blank" rel="nofollow" title="专业网站建设">
                <img style="width: 100%" src="../../upload/201610/24/201610241224221511.jpg" tppabs="http://www.muzhuangnet.com/upload/201610/24/201610241224221511.jpg" alt="专业网站建设" /></a>

        </div>

    </aside>
</section>
<footer class="footer">
    <div class="container">
        <p>本站[<a href="../../index.htm" tppabs="http://www.muzhuangnet.com/">木庄网络博客</a>]的部分内容来源于网络，若侵犯到您的利益，请联系站长删除！谢谢！Powered By [<a href="javascript:if(confirm('http://www.dtcms.net/  \n\n??ļ????? Teleport Ultra ??, ?Ϊ ??һ???????????????Ϊ?????????ĵ????  \n\n????????????'))window.location='http://www.dtcms.net/'" tppabs="http://www.dtcms.net/" target="_blank" rel="nofollow" >DTcms</a>] Version 4.0</p>
    </div>
    <div id="gotop"><a class="gotop"></a></div>
</footer>
<div id="rightClickMenu">
    <ul class="list-group rightClickMenuList">
        <li class="list-group-item disabled">欢迎访问木庄网络博客</li>
        <li class="list-group-item disabled"><span>可复制：</span>代码框内的文字。</li>
        <li class="list-group-item disabled"><span>方法：</span>Ctrl+C。</li>
    </ul>
</div><script src="https://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="templates/blog/js/jquery.ias.js" tppabs="templates/blog/js/jquery.ias.js"></script>
<script src="templates/blog/js/scripts.js" tppabs="templates/blog/js/scripts.js"></script>

</body>
</html>
