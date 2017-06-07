<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>{{config('app.host_name')}}</title>
    <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/semantic-ui/2.1.8/semantic.min.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/AdminLTE.min.css">
    <script type="text/javascript" src="http://cdn.bootcss.com/jquery/2.2.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/semantic-ui/2.1.8/semantic.min.js"></script>
    <!-- CSS 及 JavaScript -->
</head>

<body>
<div class="ui container login-box">
    @yield('content')
</div>
<script>
</script>
</body>

</html>
  