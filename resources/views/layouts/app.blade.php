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

    @yield('content')

    <!-- Scripts -->
    <script src="{{elixir('/js/app.js')}}"></script>
    <script src="{{url('/js/source/main.js')}}"></script>
    <script src="{{url('/js/source/jquery.min.js')}}"></script>
    <script src="{{url('/js/source/jquery.easyfader.min.js')}}"></script>
    <script src="{{url('/js/source/jquery.SuperSlide.2.1.1.js')}}"></script>
    <script src="{{url('/js/source/jquery.niceHover.js')}}"></script>
    <script src="{{url('/js/source/koala.min.1.5.js')}}"></script>
    <script src="{{url('/js/source/terminator2.2.min.js')}}"></script>
    <script src="{{url('/js/source/own.js')}}"></script>
    <script src="{{url('/js/source/index.js')}}"></script>


    <!-- 配置文件 -->
    <script type="text/javascript" src="{{ asset('vendor/ueditor/ueditor.config.js') }}"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="{{ asset('vendor/ueditor/ueditor.all.js') }}"></script>
<script>
window.UEDITOR_CONFIG.serverUrl = '{{ config('ueditor.route.name') }}'
    </script>

    @yield('js')

<script type="text/javascript">
$(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
</script>

<script>
var _hmt = _hmt || [];
(function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?2732ec5c4ea2c5a4b604a617c80981b8";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
})();
</script>

<script type="text/javascript">
$(".group-lock-more").niceHover({weight:2,color:"#8d2123"});
</script>

<script type="text/javascript">
$('.group-content-box>ul>li').mouseenter(function(){
    $(this).find('.group-sbox-content>.p4').stop().animate({marginTop:'60px',fontSize:'30px'});

    $(this).find('.group-sbox-content').find('.p1').stop().animate({fontSize:'14px'});
    $(this).find('.group-sbox-content').find('.p2').stop().animate({marginTop:'20px'});
    $(this).find('.group-sbox-content').find('.p3').stop().animate({marginTop:'20px'});
})
$('li').mouseleave(function(){
    $(this).find('.group-sbox-content>.p4').stop().animate({marginTop:'80px',fontSize:'40px'});
    $(this).find('.group-sbox-content').find('.p1').stop().animate({fontSize:'16px'});
    $(this).find('.group-sbox-content').find('.p2').stop().animate({marginTop:'136px'});
    $(this).find('.group-sbox-content').find('.p3').stop().animate({marginTop:'136px'});
    //            $(this).find('.divA').stop().animate({bottom:'0px'});
    //            $(this).find('.a2').css({left:-$(this).width()})
    //            $(this).children('.a2').find('.p4').css({left:-$(this).width()})
    //            $(this).children('.a2').find('.p5').css({left:-$(this).width()})
    //            $(this).children('.a2').find('.p6').css({transform:'scale(1.3)'})
    //            $(this).children('.a2').find('.p7').css({bottom:'-50px'})
})
</script>

<div class="footer ">
    <div class="footer-content wearp-main">
        <div class="footer-content-main">
            <div class="footer-content-main-logo">
                <a href="index.html" target="_blank"> <img src="/images/group/foot_logo.png"></a>
            </div>
            <div class="footer-content-main-copyright">
                <p>
                    <span class="fl">地址：{{$setting->company_address}}}　　</span>
                    <span class="fl">联系电话：{{$setting->company_phone}}</span>
                </p>
                <p>

                    <span class="fl" style="margin-right: 40px;">邮箱：{{$setting->company_email}}</span>
                    <span class="fl">
                        版权所有：Copyright © 长和控股 All Rights Reserved 浙ICP备16033453号
                    </span>
                </p>
            </div>
            <div class="footer-content-main-code">
                <img src="/images/automobile/foot_dingyh.png">
                <p>订阅号</p>
            </div>
            <div class="footer-content-main-code">
                <img src="/images/automobile/foot_guanw.png">
                <p>官方微博</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
