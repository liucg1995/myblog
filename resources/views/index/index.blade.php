@extends("layout.show")
@section("content")
<section class="container">
    <div class="content-wrap">
        <div class="content">
            <div id="focusslide" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">

                    <li data-target="#focusslide" data-slide-to="adBannerDr__loop__id" class="active"></li>

                    <li data-target="#focusslide" data-slide-to="adBannerDr__loop__id"></li>

                </ol>
                <div class="carousel-inner" role="listbox">
                    @forelse($blist as $key => $val)


                    <div class="item  @if($key=='0') active @endif" ><a href="{{$val->href}}"  target="_blank"
                                                title="{{$val->desc}}">
                            <img src="{{asset($val->image)}}"

                                                                      alt="{{$val->desc}}" class="img-responsive"></a>
                    </div>
                        @empty
                    @endforelse

                </div>
                <a class="left carousel-control" href="#focusslide" role="button" data-slide="prev" rel="nofollow">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span
                            class="sr-only">上一个</span> </a> <a class="right carousel-control" href="#focusslide"
                                                               role="button" data-slide="next" rel="nofollow"> <span
                            class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">下一个</span>
                </a>
            </div>
            @forelse($list as $val)
                <article class="excerpt excerpt-8"><a class="focus" href="{{url("detail/".$val->id)}}"
                                                      title="{{$val->title}}" target="_blank">
                        <img class="thumb" src="{{asset($val->image)}}"

                             alt="{{$val->title}}"/></a>
                    <header><a class="cat" href="{{url("detail/".$val->id)}}" title="资讯分享">资讯分享<i></i></a>
                        <h2><a href="{{url("detail/".$val->id)}}" title="{{$val->title}}"
                               target="_blank">{{$val->title}}</a>
                        </h2>
                    </header>
                    <p class="meta">
                        <time class="time"><i
                                    class="glyphicon glyphicon-time"></i>{{with($val->created_at)->format('Y-m-d')}}
                        </time>
                        <span class="views"><i class="glyphicon glyphicon-eye-open"></i> {{$val->view_count}}</span>
                        <a class="comment" href="{{url("detail/".$val->id)}}" title="评论" target="_blank">
                            <i class="glyphicon glyphicon-comment"></i> {{$val->comments_count}}</a>
                    </p>
                    <p class="note">
                        {{str_limit($val->content, $limit = 300, $end = '...')}}

                    </p>
                </article>
            @empty
            @endforelse

            <nav class="pagination" style="display: none">
                <ul>
                    <li class="next-page"><a href="a/2" tppabs="index/2/">下一页</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <aside class="sidebar">
        <div class="fixed">
            {{--<div class="widget widget-tabs">--}}
            {{--<ul class="nav nav-tabs" role="tablist">--}}
            {{--<li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab">统计信息</a></li>--}}
            {{--<li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">联系站长</a></li>--}}
            {{--</ul>--}}
            {{--<div class="tab-content">--}}
            {{--<div role="tabpanel" class="tab-pane contact active" id="notice">--}}
            {{--<h2>日志总数:--}}
            {{--305篇--}}
            {{--</h2>--}}
            {{--<h2>网站运行:--}}
            {{--<span id="sitetime"></span></h2>--}}
            {{--</div>--}}
            {{--<div role="tabpanel" class="tab-pane contact" id="contact">--}}
            {{--<h2>交流QQ群:--}}
            {{--<a href="javascript:if(confirm('https://jq.qq.com/?_wv=1027&k=4205AJJ  \n\n??ļ????? Teleport Ultra ??, ?Ϊ ??һ???????????????Ϊ?????????ĵ????  \n\n????????????'))window.location='https://jq.qq.com/?_wv=1027&k=4205AJJ'" tppabs="https://jq.qq.com/?_wv=1027&k=4205AJJ" target="_blank" rel="nofollow" data-toggle="tooltip" data-placement="bottom" title="QQ群:562366239">562366239</a>--}}
            {{--</h2>--}}
            {{--<h2>Email:--}}
            {{--<a href="mailto:admin@muzhuangnet.com" target="_blank" data-toggle="tooltip" rel="nofollow" data-placement="bottom" title="Email:admin@muzhuangnet.com">admin@muzhuangnet.com</a></h2>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            <div class="widget widget_search">
                <form class="navbar-form" id="searchform">
                    <div class="input-group">
                        <input type="text" class="form-control" onkeydown="" size="35" placeholder="请输入关键字"
                               id="keywords" name="keywords" maxlength="15" autocomplete="off"/>
                        <span class="input-group-btn">
        <input type="button" value="搜索" onclick=""
               class="btn btn-default btn-search" id="searchsubmit" value="Search">
    </span>
                    </div>
                </form>

            </div>
        </div>
        @include("part.category")
        @include("part.tag")
        @include("part.commentpost")
        @include("part.link")
    </aside>
</section>
@endsection

