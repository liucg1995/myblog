@extends("layout.show")
@section("content")
<section class="container">
    <div class="content-wrap">
        <div class="content">
            <div class="title">
                <h3 style="line-height: 1.3">{{$title}}</h3>
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

            @include("part.tfoot",["paginator"=>$list])



        </div>
    </div>
    @include("part.right")
</section>
@endsection
