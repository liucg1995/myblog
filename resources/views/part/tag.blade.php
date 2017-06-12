<style>
    .plinks li.active a{
        border-color: #3399CC;
        color: #3399CC;
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
        -webkit-transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
        transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
    }
</style>
@if(!empty($tags))
    <div class="widget widget_sentence">
        <h3>标签云</h3>
        <div class="widget-sentence-content">
            <ul class="plinks ptags">
                @forelse($tags  as $tag)
                    @if(str_contains(urldecode(request()->getPathInfo()),'tag/'.$tag->id))
                        <li class="active"><a href="{{ route('tag.detail',$tag->id) }}"
                                              title="{{ $tag->name }}">{{ $tag->name }}
                                <span class="badge">{{ $tag->posts_count }}</span></a></li>
                    @else
                        <li><a href="{{ route('tag.detail',$tag->id) }}"
                               title="{{ $tag->name }}">{{ $tag->name }}
                                <span class="badge">{{ $tag->posts_count }}</span></a></li>
                    @endif
                @empty
                @endforelse
            </ul>
        </div>
    </div>

@endif