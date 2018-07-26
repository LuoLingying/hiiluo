<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>海螺 - {{$page_title}}</title>
        <!-- JQuery 2.0.1 -->
        <script src="{{ asset('js/jquery-1.10.2.js') }}"></script>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('layui/css/layui.css') }}">

        <!-- Add custom CSS here -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div class="layui-main">
            <header>
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/office.jpg') }}" class="divide150">
                </a>
            </header>
            <main>
                <h1 class="header-text">{{$page_title}}</h1>
                <div class="progress plain">
                    <div class="bar" style="width: 82%;"></div>
                </div>
                <div style="padding:20px">
                    @yield('content')
                </div>
            </main>
        </div>
    </body>
    <script src="{{ asset('layui/layui.js') }}"></script>
    @yield('script')
    <script>
        layui.use('laypage', function () {
            var laypage = layui.laypage;
            var setting = {
                elem: 'page_cont',
                count: 21
            };
            laypage.render(setting);
        });
    </script>
</html>
