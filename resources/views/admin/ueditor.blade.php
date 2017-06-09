<script src="https://cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
<script type="text/javascript" src="/packages/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/packages/ueditor/ueditor.all.js"></script>
<script>
    var ue = UE.getEditor('content');
</script>

<div class="form-group ">

    <label for="{{$id}}" class="col-sm-2 control-label">{{$label}}</label>

    <div class="col-sm-6">



        {{--<textarea class="form-control {{ $class }}" id="{{$id}}" name="{{$name}}" placeholder="{{ $placeholder }}" {!! $attributes !!} >{{ old($column, $value) }}</textarea>--}}
        <script id="content" name="{{$id}}" type="text/plain">{{ old($column, $value) }}</script>



    </div>
</div>

