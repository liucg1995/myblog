<div class="relates">
    <div class="title">
        <h3>热门推荐</h3>
    </div>
    <ul>

        @forelse($hotPosts as $post)

            <li><a href="{{url("detail/".$post->id)}}" title="{{$post->title}}">{{$post->title}}</a></li>
            @empty
        @endforelse


    </ul>
</div>