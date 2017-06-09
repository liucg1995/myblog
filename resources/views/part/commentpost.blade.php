@if(!empty($commentposts))
    <div class="widget widget_hot">
        <h3>最新评论文章</h3>
        <ul>
            @forelse($commentposts  as $post)

                <li>
                    <a title="{{$post->posts->title}}" href="/detail/{{$post->posts->id}}">
                        <span class="thumbnail"><img class="thumb" data-original="{{asset('storage/'.$post->posts->image)}}"
                                                     src="{{asset('storage/'.$post->posts->image)}}"
                                                     alt="{{$post->posts->title}}"/></span>
                        <span class="text">{{$post->posts->title}}</span>
                        <span class="muted">
                            <i class="glyphicon glyphicon-time"></i>
                            {{with($post->posts->created_at)->format('Y-m-d')}}
                        </span>
                        <span class="muted"><i
                                    class="glyphicon glyphicon-eye-open"></i>{{$post->posts->view_count}}
                        </span>
                    </a>
                </li>

            @empty
            @endforelse
        </ul>
    </div>

@endif


