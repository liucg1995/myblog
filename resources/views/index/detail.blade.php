@extends("layout.show")
@section("content")
    <section class="container">
        <div class="content-wrap">
            <div class="content" style="    background: white;padding: 0 41px;">
                <header class="article-header">
                    <h1 class="article-title"><a href="" title="{{$detail->title}}">{{$detail->title}}</a></h1>
                    <div class="article-meta">
                        <span class="item article-meta-time">
                              <time class="time" data-toggle="tooltip" data-placement="bottom" title="发表时间：2016-09-03">
                                  <i class="glyphicon glyphicon-time"></i> {{with($detail->created_at)->format("Y-m-d")}}
                              </time>
                        </span>
                        <span class="item article-meta-source" data-toggle="tooltip" data-placement="bottom"
                              title="来源：木庄网络博客">
                        <i class="glyphicon glyphicon-globe"></i> 木庄网络博客</span>
                        <span class="item article-meta-category" data-toggle="tooltip" data-placement="bottom"
                              title="{{$detail->category->name}}">
                        <i class="glyphicon glyphicon-list"></i>
                            <a href="{{url("category/".$detail->category->id)}}" title="{{$detail->category->name}}">
                                {{$detail->category->name}}
                            </a>
                    </span>
                        <span class="item article-meta-views" data-toggle="tooltip" data-placement="bottom"
                              title="浏览量：138">
                        <i class="glyphicon glyphicon-eye-open"></i> {{$detail->view_count}}</span>
                        <span class="item article-meta-comment" data-toggle="tooltip" data-placement="bottom"
                              title="评论量"><i
                                    class="glyphicon glyphicon-comment"></i>{{$detail->comments_count}}
                    </span>
                    </div>
                </header>
                <article class="article-content">


                    {!! $detail->content !!}


                    <p class="article-copyright hidden-xs">转载请注明出处：<a title="网络博客" href="/">网络博客</a>
                        » <a href="" title="{{$detail->title}}">{{$detail->title}}</a>
                    </p>
                </article>
                <div class="article-tags">标签：
                    @foreach($detail->tags as $tag)
                        <a rel="tag" href="{{ url("tag/".$tag->id) }}">{{ $tag->name }}</a>
                    @endforeach
                </div>

                <div class="hide_box">
                </div>

                @include("part.tuijian")

                <div class="title" id="comment">
                    <h3>评论</h3>
                </div>
                <div id="respond">

                    <div class="comment">
                        <input name="author" required id="author" class="form-control" size="22"
                               placeholder="您的昵称（必填）"
                               maxlength="15" autocomplete="off" type="text" tabindex="1">
                        <input name="email" id="email" class="form-control" size="22" placeholder="您的邮箱（必填）"
                               maxlength="88" autocomplete="off" type="text" tabindex="2" required>
                        <div class="comment-box">
                            <input type="hidden" id="id" value="{{\Illuminate\Support\Facades\Request::segment(2)}}">
                            <textarea placeholder="您的评论或留言（必填）" required name="comment-textarea" id="comment-textarea"
                                      cols="100%" rows="3" tabindex="4"></textarea>
                            <div class="comment-ctrl">
                                <div class="comment-prompt" style="display: none;"><i
                                            class="fa fa-spin fa-circle-o-notch"></i> <span
                                            class="comment-prompt-text">评论正在提交中...请稍后</span>
                                </div>
                                <div class="comment-success" style="display: none;"><i class="fa fa-check"></i>
                                    <span
                                            class="comment-prompt-text">评论提交成功...审核通过后显示</span>
                                </div>
                                <button name="comment-submit" id="comment-submit" tabindex="5">评论
                                </button>
                            </div>
                        </div>
                    </div>

                    <script>
                        $(function () {
                            $("button").click(function () {
                                var id = $("#id").val();
                                var author = $("#author").val();
                                var email = $("#email").val();
                                var comment = $("#comment-textarea").val();
                                if (author == '' || email == "" || comment == "") {
                                    alert("请填写完整信息");
                                } else {
                                    $(".comment-prompt").show();
                                    $("button").hide();
                                    $.ajax({
                                        url: '{{url("/comment")}}',
                                        async: false,
                                        type: "POST",
                                        data: {
                                            "_token": "{{csrf_token()}}",
                                            'author': author,
                                            "email": email,
                                            "comment": comment,
                                            "id": id
                                        },
                                        dataType: "json",
                                        error: function () {

                                        },
                                        success: function (data) {
                                            $(".comment-success").show().siblings().hide();
                                        }
                                    });

                                }
                            });
                        });
                    </script>

                </div>
                <style>
                    .commentlist li{
                        border-bottom: 1px solid #ccc;
                        padding-bottom: 15px;
                    }
                    .commentlist li .one{
                        color: #1C86EE;
                        font-size: 15px;
                    }
                    .time{
                        color: #ccc;
                        font-size: 13px;
                        margin-left: 5px;
                        line-height: 25px;
                    }
                    .commentlist li .two{
                        line-height: 25px;
                        color: #666;
                    }
                </style>
                <div id="postcomments">
                    <ol id="comment_list" class="commentlist">
                        @forelse($commentlist as $val)
                        <li style="">
                            <div class="one" style=" ">{{$val->username}}<span  class="time">({{with($val->created_at)->format("Y-m-d H:i:s")}})</span></div>
                            <div class="two">{{$val->content}}</span></div>
                        </li>
                            @empty
                        @endforelse
                    </ol>
                </div>
            </div>
        </div>
        @include("part.right")
    </section>
@endsection
