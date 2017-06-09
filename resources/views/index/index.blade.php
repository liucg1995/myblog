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
                            <img src="{{asset('/storage/'.$val->image)}}"

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
            @include("part.tfoot",["paginator"=>$list])
        </div>
    </div>
    @include("part.right")
</section>
@endsection

