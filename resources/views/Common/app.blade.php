<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title')&nbsp;|&nbsp;MEETUP</title
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes">
        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="/css/Common/overWriteMaterialize.css" type="text/css" rel="stylesheet" >
        <link href="/css/Common/header.css" type="text/css" rel="stylesheet" >
        <link href="/css/Common/header_min.css" type="text/css" rel="stylesheet" >
        @stack('css')

    </head>
    <body>
        @yield('nav')
       
        <!-- メインコンテンツエリア -->
        <div class="container">
            @yield('content')
        </div>
        <!--  Scripts-->
        <script src="/js/jquery-3.3.1.js"></script>
        <script src="/js/materialize.js"></script>
        <script src="/js/Common/common.js"></script>
        @stack('scripts')
    </body>
</html>