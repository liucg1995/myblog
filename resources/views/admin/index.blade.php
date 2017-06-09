@extends("layouts.app")
@section('content')
    <link rel="stylesheet" href="{{url("/bower_components/AdminLTE/plugins/iCheck/all.css")}}">

    <section class="content-header">
        <h1>
            用户管理
            <small>用于查找用户发送测试群发消息</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/welcome"><i class="fa fa-dashboard"></i>家</a></li>
            <li><a href="#">用户管理</a></li>
            <li class="active">用户列表</li>
        </ol>
    </section>
    <section class="content">
                <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">搜索</h3>
                        <div class="box-tools"></div>
                    </div>
                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <form class="form-inline" role="form" method="get" id="frmSearch">
                        
                     
                        <div class="form-group">
                            <input type="text" name="nickname" class="form-control input-sm" style="width:9em" placeholder="请输入昵称">
                        </div>&nbsp;
                        <div class="form-group">
                            <select class="form-control type form-inline" name="status">
                                <option value="">是否关注</option>
                                <option value="0">已关注</option>
                                <option value="1">未关注</option>
                            </select>
                        </div>&nbsp;
                        <input type="submit" class="btn  btn-success" value="搜索">&nbsp;
                        <a href="/ad_user/index" class="btn  btn-primary">重置搜索条件</a>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <script>
        
        $(function(){
            
            var search = location.search.substring(1);
            if (search) {
                try {
                    var query = JSON.parse('{"' + decodeURIComponent(search).replace(/"/g, '\\"').replace(/&/g, '","').replace(/=/g, '":"') + '"}');

                    $.each(query, function(k, v) {
                        $('[name=' + k + ']').val(v);
                    });
                } catch (e) {
                    console.log(e);
                }

            }
        })
    </script>
        <div class="row">
            <div class="col-sm-12">
                <div class="box">
                    <div class="box-header with-border box-danger">
                        <h3 class="box-title">用户列表</h3>
                    </div>

                <!-- /.box-body -->
                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-bordered table-hover dataTable text-center" role="grid"
                                           aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            {{--<th class="sorting_asc col-sm-2" aria-controls="example2" rowspan="1"--}}
                                                {{--colspan="1" aria-sort="ascending"--}}
                                                {{--aria-label="Rendering engine: activate to sort column descending">--}}
                                                {{--id--}}
                                            {{--</th>--}}
                                            <th class="sorting col-sm-1" aria-controls="example2" rowspan="1"
                                                colspan="1"
                                                aria-label="Browser: activate to sort column ascending">
                                                userID
                                            </th>
                                            <th class="sorting col-sm-1" aria-controls="example2" rowspan="1"
                                                colspan="1"
                                                aria-label="Browser: activate to sort column ascending">
                                                昵称
                                            </th>
                                            <th class="sorting col-sm-2" aria-controls="example2" rowspan="1"
                                                colspan="1"
                                                aria-label="Platform(s): activate to sort column ascending">
                                                头像
                                            </th>
                                            <th class="sorting col-sm-2" aria-controls="example2" rowspan="1"
                                                colspan="1"
                                                aria-label="Engine version: activate to sort column ascending">
                                                openid
                                            </th>
                                            <th class="sorting col-sm-2" aria-controls="example2" rowspan="1"
                                                colspan="1"
                                                aria-label="Engine version: activate to sort column ascending">
                                                关注时间
                                            </th>
                                            <th class="sorting col-sm-2" aria-controls="example2" rowspan="1"
                                                colspan="1"
                                                aria-label="Engine version: activate to sort column ascending">
                                                积分余额
                                            </th>
                                            <th class="sorting col-sm-4" aria-controls="example2" rowspan="1"
                                                colspan="1"
                                                aria-label="Browser: activate to sort column ascending">
                                                操作
                                            </th>
                                            {{--<th class="sorting col-sm-2" aria-controls="example2" rowspan="1"--}}
                                                {{--colspan="1" aria-label="CSS grade: activate to sort column ascending">--}}
                                                {{--operation--}}
                                            {{--</th>--}}
                                            {{--<td class="sorting_1">{{$i++}}</td>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $value)
                                            <tr role="row" class="odd">

                                                <td>{{$value->user_id}}</td>
                                                <td>{{$value->nickname}}</td>
                                                <td><img src="{{$value->avatar}}" alt="" width="50px"></td>
                                                <td>{{$value->openid}}</td>
                                                <td>{{$value->created}}</td>
                                                <td>{{$value->balance}}</td>
                                                <td>
                                                    @if(Auth::user()->can("admin.masstest"))
                                                    <a href="/masstest?userID={{$value->user_id}}" class="btn  btn-primary">测试群发</a>
                                                    @endif
                                                    @if(Auth::user()->can("admin.balance.index"))
                                                    <a href="/balance?userID={{$value->user_id}}" class="btn  btn-primary">收支明细</a>
                                                    @endif
                                                </td>


                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @include("layout.page",['paginator'=>$list])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{url("/bower_components/AdminLTE/plugins/iCheck/icheck.min.js")}}"></script>
    <script src="{{url("/bower_components/AdminLTE/plugins/iCheck/icheck.js")}}"></script>
@endsection
