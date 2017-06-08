@extends("layout.show")
@section("content")
<section class="container">
    <div class="content-wrap">
        <div class="content">
            <div class="title">
                <h3 style="line-height: 1.3">{{$title->name}}</h3>
                <div class="more">

                </div>
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
            @include("part.category")
            @include("part.tag")

        </div>
        @include("part.commentpost")
        @include("part.link")


    </aside>
</section>
@endsection
