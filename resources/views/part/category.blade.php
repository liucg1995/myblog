<style>
    .plinks li .active {
        border-color: #3399CC;
        color: #3399CC;
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
        -webkit-transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
        transition-timing-function: cubic-bezier(0.47, 2.02, 0.31, -0.36);
    }
</style>
@if(!empty($categories))
    <div class="widget widget_sentence">
        <h3>分类</h3>
        <div class="widget-sentence-content">
            <ul class="plinks ptags">

                @forelse($categories  as $category)
                    @if($category->posts_count)
                    @if(str_contains(urldecode(request()->getPathInfo()),'category/'.$category->id))
                        <li class="active"><a href="{{ route('category.show',$category->id) }}"
                                              title="{{ $category->name }}">{{ $category->name }}
                                <span class="badge">{{ $category->posts_count }}</span></a></li>
                    @else
                        <li><a href="{{ route('category.show',$category->id) }}"
                               title="{{ $category->name }}">{{ $category->name }}
                                <span class="badge">{{ $category->posts_count }}</span></a></li>
                    @endif
                    @endif
                @empty
                @endforelse
            </ul>
        </div>
    </div>

@endif


