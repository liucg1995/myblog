<form class="navbar-form" action="{{url("/search")}}" method="get" id="searchform">
    <div class="input-group">
        <input type="text" class="form-control"
               size="35" placeholder="请输入关键字" id="keywords" name="keywords" maxlength="15" autocomplete="off" />
        <span class="input-group-btn">
        <input type="submit" value="搜索" class="btn btn-default btn-search" id="searchsubmit" value="Search"> </span>
    </div>
</form>