@extends("layout.show")
@section("content")
    <section class="container">
        <div class="content-wrap">
            <div class="content">
                <header class="article-header">
                    <h1 class="article-title"><a href="" title="{{$detail->title}}">{{$detail->title}}</a></h1>
                    <div class="article-meta"> <span class="item article-meta-time">
          <time class="time" data-toggle="tooltip" data-placement="bottom" title="发表时间：2016-09-03"><i
                      class="glyphicon glyphicon-time"></i> {{with($detail->created_at)->format("Y-m-d")}}</time>
          </span> <span class="item article-meta-source" data-toggle="tooltip" data-placement="bottom"
                        title="来源：木庄网络博客">
                        <i class="glyphicon glyphicon-globe"></i> 木庄网络博客</span>
                        <span class="item article-meta-category" data-toggle="tooltip" data-placement="bottom"
                              title="{{$detail->category->name}}">
                        <i class="glyphicon glyphicon-list"></i> <a href="{{url("category/".$detail->category->id)}}"
                                                                    title="{{$detail->category->name}}">{{$detail->category->name}}</a>
                    </span> <span class="item article-meta-views" data-toggle="tooltip" data-placement="bottom"
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
                        » <a href=""  title="{{$detail->title}}">{{$detail->title}}</a>
                    </p>
                </article>
                <div class="article-tags">标签：
                    @foreach($detail->tags as $tag)
                        <a  rel="tag" href="{{ url("tag/".$tag->id) }}">{{ $tag->name }}</a>
                    @endforeach
                </div>

                <div class="hide_box">
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
                            <input name="url" id="url" class="form-control" size="22" placeholder="您的网址（非必填）"
                                   maxlength="58"
                                   autocomplete="off" type="text" tabindex="3">
                            <div class="comment-box">
                            <textarea placeholder="您的评论或留言（必填）" name="comment-textarea" id="comment-textarea"
                                      cols="100%" rows="3" tabindex="4"></textarea>
                                <div class="comment-ctrl">
                                    <div class="comment-prompt" style="display: none;"><i
                                                class="fa fa-spin fa-circle-o-notch"></i> <span
                                                class="comment-prompt-text">评论正在提交中...请稍后</span>
                                    </div>
                                    <div class="comment-success" style="display: none;"><i class="fa fa-check"></i>
                                        <span
                                                class="comment-prompt-text">评论提交成功...审核通过后显示</span></div>
                                    <button type="submit" name="comment-submit" id="comment-submit" tabindex="5">评论
                                    </button>
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
        @include("part.right")
    </section>
@endsection
