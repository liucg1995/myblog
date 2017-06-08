@if(!empty($links))

    <div class="widget widget_sentence">
        <h3>友情链接</h3>
        <div class="widget-sentence-content">
            @forelse($links as $link)
                <a href="{{$link->href}}" title="{{$link->name}}" target="_blank">{{$link->name}}</a>&nbsp;&nbsp;&nbsp;
            @empty
            @endforelse

        </div>
    </div>


@endif


