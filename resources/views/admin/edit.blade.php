@extends("layouts.app")
@section('content')
    <link rel="stylesheet" href="{{url("/bower_components/AdminLTE/plugins/iCheck/all.css")}}">
    <link rel="stylesheet" href="{{url("/bower_components/AdminLTE/plugins/select2/select2.min.css")}}">
    <script src="{{url("/bower_components/AdminLTE/plugins/select2/select2.full.min.js")}}"></script>
    <link rel="stylesheet" href="{{url("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}">
    <section class="content-header">
        <h1>
            修改数据组
            <small>updata DataGroup</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="javascript:void(0);"><i class="fa fa-dashboard"></i> Home</a></li>
            {{--<li><a href="javascript:void(0);">Wechat</a></li>--}}
            <li class="active">updata DataGroup</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box ">
                    @include("layout.message")
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="box-header">
                            <h3 class="box-title">修改数据</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label>数据组名称:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-sticky-note-o"></i>
                                    </div>
                                    <input type="text" name="name" class="form-control" value="{{$data->name}}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>更新周期:</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa  fa-file-image-o"></i>
                                    </div>
                                    <input type="text" name="cycle" class="form-control" value="{{$data->cycle}}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>数据介绍:</label>
                                <div class="input-group">
                                    <textarea cols="100" rows="10" name="desc">{{$data->desc}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>交易品种:</label>
                                <select class="form-control select2 select2-hidden-accessible"
                                        multiple="" data-placeholder="交易品种"
                                        style="width: 100%;" tabindex="-1"
                                        aria-hidden="true" name="trading[]">
                                    @foreach($trading as $value)
                                        <option value="{{$value->id}}"
                                                @if(!empty($data->tag))
                                                @if(in_array($value->id ,json_decode($data->tag,true))) selected @endif
                                                @endif
                                        >
                                            {{$value->symbol}} -- {{$value->symbolname}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>交易品种:</label>
                                <select class="form-control select2 select2-hidden-accessible"
                                        data-placeholder="交易品种"
                                        style="width: 100%;" tabindex="-1"
                                        aria-hidden="true" name="link">
                                    <option value="0">无连接</option>
                                    @foreach($link as $value)
                                        <option value="{{$value->id}}"
                                                @if(!empty($data->link) && $data->link==$value->id) selected @endif
                                        >
                                            {{$value->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>副数据表中的列编号1:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa  fa-file-image-o"></i>
                                    </div>
                                    <input name="codes" type="text" class="form-control" value="{{$data->codes}}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>副数据表中的列编号2:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa  fa-file-image-o"></i>
                                    </div>
                                    <input name="codess" type="text" class="form-control" value="{{$data->codess}}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">修改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(function () {
            $(".select2").select2();
        });
    </script>
@endsection

