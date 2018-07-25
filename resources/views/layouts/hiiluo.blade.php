<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>海螺 - {{$page_title}}</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('layui/css/layui.css') }}">

        <!-- Add custom CSS here -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    </head>
    <body class="layui-layout-body">
        <div class="layui-main">
            <header><img src="{{ asset('img/office.jpg') }}" class="divide150"></header>
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
</html>
