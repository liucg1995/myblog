<script src="https://cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
<script type="text/javascript" src="/packages/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/packages/ueditor/ueditor.all.js"></script>

<div class="form-group {!! !$errors->has($errorKey) ?: 'has-error' !!}">

    <label for="{{$id}}" class="col-sm-2 control-label">{{$label}}</label>

    <div class="col-sm-6">

        @include('admin::form.error')

        {{--<textarea class="form-control {{ $class }}" id="{{$id}}" name="{{$name}}" placeholder="{{ $placeholder }}" {!! $attributes !!} >{{ old($column, $value) }}</textarea>--}}
        <script id="{{$id}}" name="{{$id}}" type="text/plain">{{ old($column, $value) }}</script>

        @include('admin::form.help-block')

    </div>
</div>

<script>
    var ue = UE.getEditor('{{$id}}');
</script>