


$(document).ready(function () {
    /***************************top foot  调用*/
    var id = $(".header").attr("id");
    $(".header").load("/base/top-group.html",null,function(){
        var headerlog=$(".header-logo img");
        switch (id) {
            case "automobile":
                headerlog.attr("src", "images/automobile/changh_logo.png").attr("style","margin-top:20px");
                break;
            //LOGO不一样换一个automobile1
            /* case "automobile1":
             headerlog.attr("src", "images/automobile/changh_logo.png");
             break; */
            default:
                break;
        }
    });
    $(".footer").load("base/foot-group.html",null,function(){

        var footerlog=$(".footer-content-main-logo img");
        switch (id) {
            case "automobile":
                footerlog.attr("src", "images/automobile/foot_logo.png");
                break;
            default:
                break;
        }
    });
    /***************************tab 切换*****************************/
    $('.title-list li').click(function(){
        var liindex = $('.title-list li').index(this);
        $(this).addClass('on').siblings().removeClass('on');
        $('.product-wrap div.product').eq(liindex).fadeIn(150).siblings('div.product').hide();
        var liWidth = $('.title-list li').width();
        $('.main-countent-nav .title-list p').stop(false,true).animate({'left' : liindex * liWidth + 'px'},300);
    });

    //设计案例hover效果
    $('.product-wrap .product li').click(function(){
        $(this).css("border-color","#8d2123");
        $(this).find('p > a').css('color','#8d2123');
    },function(){
        $(this).css("border-color","#8d2123");
        $(this).find('p > a').css('color','#ccc');
    });
    /*************************** 轮播图********************************/
    $('#dowebok').easyFader();
    $('.header-nav>ul>a').click(function () {
        $(this).css("background", "#922123").siblings().css("background", "#fff");
        $(this).siblings().find(".header-nav-content").children("p").removeAttr("style");
        $(this).find(".header-nav-content").children("p").css("color", "#fff");
    });


    /*************************** 提交申请*/

    $('.submenu-shenq').click(function(){
        $('.online-application-bj').css('display','block');
    });
    $('.application-img').click(function(){
        $('.online-application-bj').css('display','none');
    });
    // $('.application-submit').click(function(){
    //     $('.online-application-bj').css('display','none');
    //     alert("提交成功");
    // });


});

jQuery(document).ready(function($){
    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function(){
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if( $(this).scrollTop() > offset_opacity ) {
            $back_to_top.addClass('cd-fade-out');
        }
    });

    //smooth scroll to top
    $back_to_top.on('click', function(event){
        event.preventDefault();
        $('body,html').animate({
                scrollTop: 0 ,
            }, scroll_top_duration
        );
    });


});
