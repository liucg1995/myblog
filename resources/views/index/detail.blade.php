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
    <link rel="stylesheet" type="text/css" href="templates/blog/css/bootstrap.min.css"
          tppabs="templates/blog/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="templates/blog/css/nprogress.css"
          tppabs="templates/blog/css/nprogress.css">
    <link rel="stylesheet" type="text/css" href="templates/blog/css/style.css" tppabs="templates/blog/css/style.css">
    <link rel="stylesheet" type="text/css" href="templates/blog/css/font-awesome.min.css"
          tppabs="templates/blog/css/font-awesome.min.css">
    <link rel="apple-touch-icon-precomposed" href="templates/blog/images/icon.png">
    <script src="templates/blog/js/jquery-2.1.4.min.js"></script>
    <script src="templates/blog/js/nprogress.js" tppabs="templates/blog/js/nprogress.js"></script>
    <script src="templates/blog/js/jquery.lazyload.min.js" tppabs="templates/blog/js/jquery.lazyload.min.js"></script>
    <!--[if gte IE 9]>
    <script src="templates/blog/js/jquery-1.11.1.min.js" tppabs="templates/blog/js/jquery-1.11.1.min.js"
            type="text/javascript"></script>
    <script src="templates/blog/js/html5shiv.min.js" tppabs="templates/blog/js/html5shiv.min.js"
            type="text/javascript"></script>
    <script src="templates/blog/js/respond.min.js" tppabs="templates/blog/js/respond.min.js"
            type="text/javascript"></script>
    <script src="templates/blog/js/selectivizr-min.js" tppabs="templates/blog/js/selectivizr-min.js"
            type="text/javascript"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script>window.location.href = 'upgrade-browser.html'/*tpa=upgrade-browser.html*/;</script>
    <![endif]-->


    <link rel="stylesheet" type="text/css" href="/templates/blog/css/shang.css"
          tppabs="http://www.muzhuangnet.com/templates/blog/css/shang.css">
    <script src="/templates/blog/js/comm.js" tppabs="http://www.muzhuangnet.com/templates/blog/js/comm.js"></script>
    <script type="text/javascript" charset="utf-8" src="/scripts/jquery/jquery.cookie.js"
            tppabs="http://www.muzhuangnet.com/scripts/jquery/jquery.cookie.js"></script>
</head>
<body class="user-select single">
<header class="header">
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="header-topbar hidden-xs link-border">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#header-navbar" aria-expanded="false"><span class="sr-only"></span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <h1 class="logo hvr-bounce-in"><a href="../index.htm" tppabs="http://www.muzhuangnet.com/"
                                                      title="木庄网络博客">
                            <img src="../upload/201610/17/201610171329086541.png"
                                 tppabs="http://www.muzhuangnet.com/upload/201610/17/201610171329086541.png"
                                 alt="木庄网络博客"/></a></h1>
                </div>

                <div class="collapse navbar-collapse" id="header-navbar" name="code">
                    <form class="navbar-form visible-xs">
                        <div class="input-group">
                            <input type="text" class="form-control"
                                   onkeydown="if (event.keyCode == 13) {SiteSearch('http://www.muzhuangnet.com/search.html', '#keyword');return false};"
                                   size="35" placeholder="请输入关键字" id="keyword" name="keyword" maxlength="15"
                                   autocomplete="off"/>
                            <span class="input-group-btn">
        <input type="button" value="搜索"
               onclick="SiteSearch('../search.html'/*tpa=http://www.muzhuangnet.com/search.html*/, '#keyword');"
               class="btn btn-default btn-search">
    </span>
                        </div>

                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li id="index"><a data-cont="木庄网络博客" title="木庄网络博客" href="../index.htm"
                                          tppabs="http://www.muzhuangnet.com/">
                                首页</a></li>

                        <li id="mznetblog"><a data-cont="MZ-NetBlog主题" title="MZ-NetBlog主题"
                                              href="../list/mznetblog/index.htm"
                                              tppabs="http://www.muzhuangnet.com/list/mznetblog/">MZ-NetBlog主题</a></li>

                        <li id="code"><a data-cont="IT技术笔记" title="IT技术笔记"
                                         href="../list/code/index.htm" tppabs="http://www.muzhuangnet.com/list/code/">IT技术笔记</a>
                        </li>

                        <li id="share"><a data-cont="源码分享" title="源码分享"
                                          href="../list/share/index.htm"
                                          tppabs="http://www.muzhuangnet.com/list/share/">源码分享</a></li>

                        <li id="news"><a data-cont="资讯分享" title="资讯分享"
                                         href="../list/news/index.htm" tppabs="http://www.muzhuangnet.com/list/news/">资讯分享</a>
                        </li>

                        <li id="machine"><a data-cont="爱搞机" title="爱搞机"
                                            href="../list/machine/index.htm"
                                            tppabs="http://www.muzhuangnet.com/list/machine/">爱搞机</a></li>

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
            <header class="article-header">
                <h1 class="article-title"><a href="105.html" tppabs="http://www.muzhuangnet.com/show/105.html"
                                             title="SQL递归查询实现跟帖盖楼效果">SQL递归查询实现跟帖盖楼效果</a></h1>
                <div class="article-meta"> <span class="item article-meta-time">
          <time class="time" data-toggle="tooltip" data-placement="bottom" title="发表时间：2016-09-03"><i
                      class="glyphicon glyphicon-time"></i> 2016-09-03</time>
          </span> <span class="item article-meta-source" data-toggle="tooltip" data-placement="bottom"
                        title="来源：木庄网络博客">
                        <i class="glyphicon glyphicon-globe"></i> 木庄网络博客</span>
                    <span class="item article-meta-category" data-toggle="tooltip" data-placement="bottom" title="SQL">
                        <i class="glyphicon glyphicon-list"></i> <a href="../list/sql/index.htm"
                                                                    tppabs="http://www.muzhuangnet.com/list/sql/"
                                                                    title="SQL">SQL</a>
                    </span> <span class="item article-meta-views" data-toggle="tooltip" data-placement="bottom"
                                  title="浏览量：138">
                        <i class="glyphicon glyphicon-eye-open"></i> </span>
                    <span class="item article-meta-comment" data-toggle="tooltip" data-placement="bottom" title="评论量"><i
                                class="glyphicon glyphicon-comment"></i>
                    </span>
                </div>
            </header>
            <article class="article-content">
                <p>
                    网易新闻的盖楼乐趣多，某一天也想实现诸如网易新闻跟帖盖楼的功能，无奈技术不佳（基础不牢），网上搜索了资料才发现SQL查询方法有一种叫递归查询，整理如下：
                </p>
                <p>
                    一、查询出 id = 1 的所有子结点
                </p>
                <pre class="prettyprint">with my1 as
(select * from table where id = 1  union all
select table.* from my1, table
where my1.id = table.fatherId)
select * from my1    </pre>
                <p>
                    结果包含1这条记录，如果不想包含，可以在最后加上:<span style="color:#009900;">where id &lt;&gt; 1</span>
                </p>
                <p>
                    二、查询出 id = 2 的所有父结点
                </p>
                <pre class="prettyprint">with my1 as
(select * from table where id = 2  union all select table.*
from my1, table where my1.fatherId = table.id )
select * from my1;  </pre>
                <p>
                    三、删除 id = 1 的所有子结点（包括id = 1结点）
                </p>
                <pre class="prettyprint">with my1 as
(select * from table where id = 1  union all select table.*
from my1, table where my1.id = table.fatherId )
delete from table where exists (select id from my1
where my1.id = table.id) </pre>
                <p>
                    <img src="../upload/201609/03/201609031223240076.jpg"
                         tppabs="http://www.muzhuangnet.com/upload/201609/03/201609031223240076.jpg"
                         alt="SQL递归查询实现跟帖盖楼效果"/>
                </p>
                <p>欢迎分享，（木庄网络博客交流QQ群：<a
                            href="javascript:if(confirm('https://jq.qq.com/?_wv=1027&k=4205AJJ  \n\n??ļ????? Teleport Ultra ??, ?Ϊ ??һ???????????????Ϊ?????????ĵ????  \n\n????????????'))window.location='https://jq.qq.com/?_wv=1027&k=4205AJJ'"
                            tppabs="https://jq.qq.com/?_wv=1027&k=4205AJJ" target="_blank" rel="nofollow"
                            title="562366239">562366239</a>）</p>

                <p class="article-copyright hidden-xs">转载请注明出处：<a title="木庄网络博客" href="../index.html"
                                                                  tppabs="http://www.muzhuangnet.com/index.html">木庄网络博客</a>
                    » <a href="105.html" tppabs="http://www.muzhuangnet.com/show/105.html" title="SQL递归查询实现跟帖盖楼效果">SQL递归查询实现跟帖盖楼效果</a>
                </p>
            </article>
            <div class="article-tags">标签：<a href="../tags/list/238/index.htm"
                                            tppabs="http://www.muzhuangnet.com/tags/list/238/" rel="tag">跟帖盖楼</a><a
                        href="../tags/list/132/index.htm" tppabs="http://www.muzhuangnet.com/tags/list/132/" rel="tag">sql</a><a
                        href="../tags/list/239/index.htm" tppabs="http://www.muzhuangnet.com/tags/list/239/" rel="tag">递归查询</a>
            </div>
            <div class="article-shang">
                <p><a href="javascript:void(0)" rel="nofollow" style="color: #fff" onclick="dashangToggle()"
                      class="dashang" title="打赏，支持一下">打赏</a>
                </p>
            </div>
            <div class="hide_box">
            </div>
            <div class="shang_box">
                <a class="shang_close" href="javascript:void(0)" onclick="dashangToggle()" title="关闭">
                    <img src="../templates/blog/images/close.jpg"
                         tppabs="http://www.muzhuangnet.com/templates/blog/images/close.jpg" alt="取消"/></a>
                <img class="shang_logo" src="../upload/201610/17/201610171329086541.png"
                     tppabs="http://www.muzhuangnet.com/upload/201610/17/201610171329086541.png" alt="木庄网络博客"/>
                <div class="shang_tit">
                    <p>
                        感谢您的支持，我会继续努力的!</p>
                </div>
                <div class="shang_payimg">
                    <img src="../templates/blog/images/alipayimg.jpg"
                         tppabs="http://www.muzhuangnet.com/templates/blog/images/alipayimg.jpg" alt="扫码支持"
                         title="扫一扫"/>
                </div>
                <div class="pay_explain">
                    扫码打赏，您说多少就多少
                </div>
                <div class="shang_payselect">
                    <div class="pay_item checked" data-id="alipay">
                        <span class="radiobox"></span><span class="pay_logo">
                                            <img src="../templates/blog/images/alipay.jpg"
                                                 tppabs="http://www.muzhuangnet.com/templates/blog/images/alipay.jpg"
                                                 alt="支付宝"/></span>
                    </div>
                    <div class="pay_item" data-id="weipay">
                        <span class="radiobox"></span><span class="pay_logo">
                                            <img src="../templates/blog/images/wechat.jpg"
                                                 tppabs="http://www.muzhuangnet.com/templates/blog/images/wechat.jpg"
                                                 alt="微信"/></span>
                    </div>
                </div>
                <div class="shang_info">
                    <p>
                        打开<span id="shang_pay_txt">支付宝</span>扫一扫，即可进行扫码打赏哦
                    </p>
                    <p>
                        分享从这里开始，精彩与您同在
                    </p>
                </div>
            </div>
            <div class="relates">
                <div class="title">
                    <h3>相关推荐</h3>
                </div>
                <ul>

                    <li><a href="155.html" tppabs="http://www.muzhuangnet.com/show/155.html"
                           title="Javascript使用正则验证身份证号">Javascript使用正则验证身份证号</a></li>

                    <li><a href="188.html" tppabs="http://www.muzhuangnet.com/show/188.html" title="提高PHP编程效率的几个建议">提高PHP编程效率的几个建议</a>
                    </li>

                    <li><a href="105.html" tppabs="http://www.muzhuangnet.com/show/105.html" title="SQL递归查询实现跟帖盖楼效果">SQL递归查询实现跟帖盖楼效果</a>
                    </li>

                    <li><a href="230.html" tppabs="http://www.muzhuangnet.com/show/230.html" title="微信红包的赌局，你知道么？">微信红包的赌局，你知道么？</a>
                    </li>

                    <li><a href="133.html" tppabs="http://www.muzhuangnet.com/show/133.html" title="没个牛X的商标还敢说自己创业？">没个牛X的商标还敢说自己创业？</a>
                    </li>

                    <li><a href="397.html" tppabs="http://www.muzhuangnet.com/show/397.html" title="程序员是怎么没女朋友的？">程序员是怎么没女朋友的？</a>
                    </li>

                    <li><a href="207.html" tppabs="http://www.muzhuangnet.com/show/207.html" title="如何删除Win10自带应用">如何删除Win10自带应用</a>
                    </li>

                    <li><a href="305.html" tppabs="http://www.muzhuangnet.com/show/305.html"
                           title="木庄网络博客html静态页响应式模板分享">木庄网络博客html静态页响应式模板分享</a></li>

                </ul>
            </div>
            <div class="title" id="comment">
                <h3>评论</h3>
            </div>
            <div id="respond">
                <form id="comment-form" name="comment-form"
                      action="http://www.muzhuangnet.com/tools/submit_ajax.ashx?action=comment_add&article_id=105"
                      method="POST">
                    <div class="comment">
                        <input name="author" id="author" class="form-control" size="22" placeholder="您的昵称（必填）"
                               maxlength="15" autocomplete="off" type="text" tabindex="1">
                        <input name="email" id="email" class="form-control" size="22" placeholder="您的邮箱（必填）"
                               maxlength="88" autocomplete="off" type="text" tabindex="2">
                        <input name="url" id="url" class="form-control" size="22" placeholder="您的网址（非必填）" maxlength="58"
                               autocomplete="off" type="text" tabindex="3">
                        <div class="comment-box">
                            <textarea placeholder="您的评论或留言（必填）" name="comment-textarea" id="comment-textarea"
                                      cols="100%" rows="3" tabindex="4"></textarea>
                            <div class="comment-ctrl">
                                <div class="comment-prompt" style="display: none;"><i
                                            class="fa fa-spin fa-circle-o-notch"></i> <span class="comment-prompt-text">评论正在提交中...请稍后</span>
                                </div>
                                <div class="comment-success" style="display: none;"><i class="fa fa-check"></i> <span
                                            class="comment-prompt-text">评论提交成功...审核通过后显示</span></div>
                                <button type="submit" name="comment-submit" id="comment-submit" tabindex="5">评论</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div id="postcomments">
                <ol id="comment_list" class="commentlist">
                </ol>
            </div>
        </div>
    </div>
    <aside class="sidebar">
        <div class="fixed">
            <div class="widget widget-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab"
                                                              data-toggle="tab">统计信息</a></li>
                    <li role="presentation"><a href="#contact" aria-controls="contact" role="tab"
                                               data-toggle="tab">联系站长</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane contact active" id="notice">
                        <h2>日志总数:
                            305篇
                        </h2>
                        <h2>网站运行:
                            <span id="sitetime"></span></h2>
                    </div>
                    <div role="tabpanel" class="tab-pane contact" id="contact">
                        <h2>QQ:
                            <a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=562366239&site=qq&menu=yes  \n\n??ļ????? Teleport Ultra ??, ?Ϊ ??һ???????????????Ϊ?????????ĵ????  \n\n????????????'))window.location='http://wpa.qq.com/msgrd?v=3&uin=562366239&site=qq&menu=yes'"
                               tppabs="http://wpa.qq.com/msgrd?v=3&uin=562366239&site=qq&menu=yes" target="_blank"
                               rel="nofollow" data-toggle="tooltip" data-placement="bottom" title="QQ:562366239">562366239</a>
                        </h2>
                        <h2>Email:
                            <a href="mailto:admin@muzhuangnet.com" target="_blank" data-toggle="tooltip" rel="nofollow"
                               data-placement="bottom" title="Email:admin@muzhuangnet.com">admin@muzhuangnet.com</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="widget widget_search">
                <form class="navbar-form" id="searchform">
                    <div class="input-group">
                        <input type="text" class="form-control"
                               onkeydown="if (event.keyCode == 13) {SiteSearch('http://www.muzhuangnet.com/search.html', '#keywords');return false};"
                               size="35" placeholder="请输入关键字" id="keywords" name="keywords" maxlength="15"
                               autocomplete="off"/>
                        <span class="input-group-btn">
        <input type="button" value="搜索"
               onclick="SiteSearch('../search.html'/*tpa=http://www.muzhuangnet.com/search.html*/, '#keywords');"
               class="btn btn-default btn-search" id="searchsubmit" value="Search">
    </span>
                    </div>
                </form>

            </div>
        </div>
        <div class="widget widget_hot">
            <h3>最新评论文章</h3>
            <ul>

                <li><a title="自媒体12个赚钱方法" href="424.html" tppabs="http://www.muzhuangnet.com/show/424.html"><span
                                class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201704/25/201704250929411769.jpg"
         src="../upload/201704/25/201704250929411769.jpg"
         tppabs="http://www.muzhuangnet.com/upload/201704/25/201704250929411769.jpg"
         alt="自媒体12个赚钱方法"/>
</span><span class="text">自媒体12个赚钱方法</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2017-05-28
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>45</span></a></li>

                <li><a title="用正则删除vs项目的所有双斜杠"//"注释" href="407.html"
                    tppabs="http://www.muzhuangnet.com/show/407.html"><span
                            class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201703/18/201703180040076542.jpg"
         src="../upload/201703/18/201703180040076542.jpg"
         tppabs="http://www.muzhuangnet.com/upload/201703/18/201703180040076542.jpg"
         alt="用正则删除vs项目的所有双斜杠"//"注释" />
</span><span class="text">用正则删除vs项目的所有双斜杠"//"注释</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2017-03-18
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>94</span></a></li>

                <li><a title="变异病毒“永恒之蓝”席卷全球,唯独朝鲜安然无恙" href="423.html"
                       tppabs="http://www.muzhuangnet.com/show/423.html"><span
                                class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201705/14/201705141154457541.jpg"
         src="../upload/201705/14/201705141154457541.jpg"
         tppabs="http://www.muzhuangnet.com/upload/201705/14/201705141154457541.jpg"
         alt="变异病毒“永恒之蓝”席卷全球,唯独朝鲜安然无恙"/>
</span><span class="text">变异病毒“永恒之蓝”席卷全球,唯独朝鲜安然无恙</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2017-05-14
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>128</span></a></li>

                <li><a title="本站源码免费下载" href="338.html" tppabs="http://www.muzhuangnet.com/show/338.html"><span
                                class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg"
         src="../upload/201610/18/201610181739277776.jpg"
         tppabs="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg"
         alt="本站源码免费下载"/>
</span><span class="text">本站源码免费下载</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2016-11-26
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>1277</span></a></li>

                <li><a title="iPhone8屏幕无边框概念设计+IOS10.3操作系统" href="422.html"
                       tppabs="http://www.muzhuangnet.com/show/422.html"><span
                                class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201705/12/201705122233385093.jpg"
         src="../upload/201705/12/201705122233385093.jpg"
         tppabs="http://www.muzhuangnet.com/upload/201705/12/201705122233385093.jpg"
         alt="iPhone8屏幕无边框概念设计+IOS10.3操作系统"/>
</span><span class="text">iPhone8屏幕无边框概念设计+IOS10.3操作系统</span><span class="muted"><i
                                    class="glyphicon glyphicon-time"></i>
    2017-05-12
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>58</span></a></li>

                <li><a title="免费开源建站系统分享" href="421.html" tppabs="http://www.muzhuangnet.com/show/421.html"><span
                                class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201705/10/201705101558105349.jpg"
         src="../upload/201705/10/201705101558105349.jpg"
         tppabs="http://www.muzhuangnet.com/upload/201705/10/201705101558105349.jpg"
         alt="免费开源建站系统分享"/>
</span><span class="text">免费开源建站系统分享</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2017-05-10
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>82</span></a></li>

                <li><a title="自媒体大神经常逛的网站" href="419.html" tppabs="http://www.muzhuangnet.com/show/419.html"><span
                                class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201704/25/201704250929411769.jpg"
         src="../upload/201704/25/201704250929411769.jpg"
         tppabs="http://www.muzhuangnet.com/upload/201704/25/201704250929411769.jpg"
         alt="自媒体大神经常逛的网站"/>
</span><span class="text">自媒体大神经常逛的网站</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2017-04-25
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>

                <li><a title="0成本网络赚钱项目思路分享" href="420.html" tppabs="http://www.muzhuangnet.com/show/420.html"><span
                                class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201705/09/201705091518155746.jpg"
         src="../upload/201705/09/201705091518155746.jpg"
         tppabs="http://www.muzhuangnet.com/upload/201705/09/201705091518155746.jpg"
         alt="0成本网络赚钱项目思路分享"/>
</span><span class="text">0成本网络赚钱项目思路分享</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2017-05-09
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>41</span></a></li>

            </ul>
        </div>

        <div class="widget widget_sentence">

            <a href="javascript:if(confirm('http://web.muzhuangnet.com/  \n\n??ļ????? Teleport Ultra ??, ?Ϊ ??һ???????????????Ϊ?????????ĵ????  \n\n????????????'))window.location='http://web.muzhuangnet.com/'"
               tppabs="http://web.muzhuangnet.com/" target="_blank" rel="nofollow" title="专业网站建设">
                <img style="width: 100%" src="../upload/201610/24/201610241224221511.jpg"
                     tppabs="http://www.muzhuangnet.com/upload/201610/24/201610241224221511.jpg" alt="专业网站建设"/></a>

        </div>

    </aside>
</section>
<footer class="footer">
    <div class="container">
        <p>本站[<a href="../index.htm" tppabs="http://www.muzhuangnet.com/">木庄网络博客</a>]的部分内容来源于网络，若侵犯到您的利益，请联系站长删除！谢谢！Powered
            By
            [<a href="javascript:if(confirm('http://www.dtcms.net/  \n\n??ļ????? Teleport Ultra ??, ?Ϊ ??һ???????????????Ϊ?????????ĵ????  \n\n????????????'))window.location='http://www.dtcms.net/'"
                tppabs="http://www.dtcms.net/" target="_blank" rel="nofollow">DTcms</a>] Version 4.0</p>
    </div>
    <div id="gotop"><a class="gotop"></a></div>
</footer>
<div id="rightClickMenu">
    <ul class="list-group rightClickMenuList">
        <li class="list-group-item disabled">欢迎访问木庄网络博客</li>
        <li class="list-group-item disabled"><span>可复制：</span>代码框内的文字。</li>
        <li class="list-group-item disabled"><span>方法：</span>Ctrl+C。</li>
    </ul>
</div>
<script src="https://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="templates/blog/js/jquery.ias.js" tppabs="templates/blog/js/jquery.ias.js"></script>
<script src="templates/blog/js/scripts.js" tppabs="templates/blog/js/scripts.js"></script>

<script type="text/javascript">
    $("#author").val($.cookie('nickCookie'));
    $("#email").val($.cookie('emailCookie'));
    $("#url").val($.cookie('urlCookie'));
</script>
<script type="text/javascript">
    //    function siteTime() {
    //        window.setTimeout("siteTime()", 1000);
    //        var seconds = 1000;
    //        var minutes = seconds * 60;
    //        var hours = minutes * 60;
    //        var days = hours * 24;
    //
    //        var today = new Date();
    //        var todayYear = today.getFullYear();
    //        var todayMonth = today.getMonth();
    //        var todayDate = today.getDate();
    //
    //        var t1 = Date.UTC(2016,7,8);
    //        var t2 = Date.UTC(todayYear, todayMonth, todayDate);
    //        var diff = t2 - t1;
    //
    //        var diffDays = Math.floor(diff / days);
    //        document.getElementById("sitetime").innerHTML = diffDays + " 天 ";
    //    }
    //    siteTime();
</script>

</body>
</html>
