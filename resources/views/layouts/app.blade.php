<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1366, initial-scale=0.1, minimum-scale=0.2, maximum-scale=2.0, user-scalable=yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <title>浙江长和控股官网</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link rel="shortcut icon" href="/images/ico32X32.ico">
    {{--<link href="{{elixir('/css/app.css')}}" rel="stylesheet">--}}
    @yield("header-css")
    <link rel="stylesheet" href="{{url('css/source/style.css')}}">
    <link rel="stylesheet" href="{{url('css/source/font-awesome.min.css')}}">

@show

<!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
        Laravel.apiToken = "{{Auth::check()?'Bearer '.Auth::user()->api_token:'Bearer '}}";
        @if(Auth::check())
            window.Zhihu = {
            name: "{{Auth::user()->name}}",
            avatar: "{{Auth::user()->avatar}}"
        }
        @endif
    </script>
</head>
{{--<body>--}}
{{--<div id="app">--}}
    {{--<nav class="navbar navbar-inverse navbar-static-top">--}}
        {{--<div class="container">--}}
            {{--<div class="navbar-header">--}}
                {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse" aria-expanded="false">--}}
                    {{--<span class="sr-only">Toggle navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}
                <!-- Branding Image -->
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--{{ config('app.name', 'Laravel') }}--}}
                {{--</a>--}}
            {{--</div>--}}

            {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse">--}}
                {{--<!-- Left Side Of Navbar -->--}}
                {{--<ul class="nav navbar-nav">--}}
                    {{--<li><a class="nav-link-title" href="/">首页</a></li>--}}
                {{--</ul>--}}


                {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<li class="ask-question"><a class="ui button blue" href="/questions/create"><i class="fa fa-paint-brush fa-icon-lg"></i>写问题</a></li>--}}
                    {{--<!-- Authentication Links -->--}}
                    {{--@if (Auth::guest())--}}
                        {{--<li><a class="nav-li-login" href="{{ url('/login') }}">登 录</a></li>--}}
                        {{--<li><a class="nav-li-login" href="{{ url('/register') }}">注 册</a></li>--}}
                    {{--@else--}}
                        {{--<li>--}}
                            {{--<a href="{{url('/messages')}}" class="user-notify-bell">--}}
                                {{--<i class="fa fa-bell"></i>--}}
                                {{--@if(Auth::user()->unreadNotifications->count()!==0)--}}
                                    {{--<span class="badge bell-badge">{{\Auth::user()->unreadNotifications->count()}}</span>--}}
                                {{--@endif--}}
                            {{--</a>--}}
                        {{--</li>--}}

                        {{--<li>--}}
                            {{--<a href="#">--}}
                                {{--{{ Auth::user()->name }}--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a class="nav-header-avatar dropdown-toggle nav-user-avatar" data-toggle="dropdown" role="button"--}}
                               {{--aria-expanded="false" style="padding: 6px 15px 6px 0px;">--}}
                                {{--<img src="{{Auth::user()->avatar}}">--}}
                            {{--</a>--}}
                            {{--<ul class="dropdown-menu" role="menu">--}}
                                {{--<li>--}}
                                    {{--<a href="/people/{{Auth::user()->name}}"><i class="fa fa-user fa-icon-lg"></i> 我的主页</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="/avatar"><i class="fa fa-cloud fa-icon-lg"></i>修改头像</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="/password"><i class="fa fa-cog fa-icon-lg"></i>修改密码</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="/setting"> <i class="fa fa-cogs fa-icon-lg"></i>个人设置</a>--}}
                                {{--</li>--}}
                                {{--@if(Auth::user()->canEnterBack())--}}
                                {{--<li>--}}
                                    {{--<a href="/dashboard"> <i class="fa fa-coffee fa-icon-lg"></i>后台管理</a>--}}
                                {{--</li>--}}
                                {{--@endif--}}
                                {{--<li role="separator" class="divider"></li>--}}
                                {{--<li>--}}
                                    {{--<a href="{{ url('/logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--<i class="fa fa-sign-out fa-icon-lg"></i>退出登录--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ url('/logout') }}" method="POST"--}}
                                          {{--style="display: none;">--}}
                                        {{--{{ csrf_field() }}--}}
                                    {{--</form>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--@endif--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}
    {{--<div class="container">--}}
        {{--@if (session()->has('flash_notification.message'))--}}
            {{--<div class="alert alert-{{ session('flash_notification.level') }}">--}}
                {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
                {{--{!! session('flash_notification.message') !!}--}}
            {{--</div>--}}
        {{--@endif--}}
    {{--</div>--}}
    @yield('content')
{{--</div>--}}

<!-- Scripts -->
<script src="{{elixir('/js/app.js')}}"></script>
<script src="{{url('/js/source/main.js')}}"></script>
<script src="{{url('/js/source/jquery.min.js')}}"></script>
<script src="{{url('/js/source/jquery.easyfader.min.js')}}"></script>
<script src="{{url('/js/source/jquery.SuperSlide.2.1.1.js')}}"></script>
<script src="{{url('/js/source/own.js')}}"></script>

<link rel="stylesheet" href="{{url('css/source/style.css')}}">

<!-- 配置文件 -->
<script type="text/javascript" src="{{ asset('vendor/ueditor/ueditor.config.js') }}"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="{{ asset('vendor/ueditor/ueditor.all.js') }}"></script>
<script>
    window.UEDITOR_CONFIG.serverUrl = '{{ config('ueditor.route.name') }}'
</script>

@yield('js')

<script>
    $('#flash-overlay-modal').modal();
</script>

<script type="text/javascript">
    $(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
</script>
<div class="footer "></div>
</div>
</body>
</html>