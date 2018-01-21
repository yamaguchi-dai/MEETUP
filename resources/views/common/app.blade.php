<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title')&nbsp;|&nbsp;MEETUP</title
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes">
        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      
    </head>
    <body>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo center">MEETUP</a>
                <ul id="nav-mobile" class="left">
                    <li></li>
                </ul>
            </div>
        </nav>
       
        <!-- メインコンテンツエリア -->
        <div class="container">
            @yield('content')
        </div>
        <!--  Scripts-->
        <script src="/js/jquery-3.3.1.js"></script>
        <script src="/js/materialize.js"></script>
        @stack('scripts')
    </body>
</html>