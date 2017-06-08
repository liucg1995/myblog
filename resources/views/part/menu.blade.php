@if(!empty($menus))
    <ul class="nav navbar-nav navbar-right">
        <li id="index"><a data-cont="木庄网络博客" title="木庄网络博客" href="" tppabs=""> 首页</a></li>
        @forelse($menus as $menu)
            <li id="mznetblog"   @if(str_contains(urldecode(request()->getPathInfo()),'menu/'.$menu->href)) class="active" @endif >
                <a data-cont="{{$menu->name}}" title="{{$menu->name}}" href="{{url("menu/".$menu->href)}}" >{{$menu->name}}</a>
            </li>
        @empty
        @endforelse
    </ul>
@endif


