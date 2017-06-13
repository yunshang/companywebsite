@extends('layouts.app')

@section('content')
    <body>
    <div class="header wearp-main"></div>
    <div class="group-banner">
        <img src="images/group/banner.png" width="100%">
    </div>
    <div class="group-countent wearp-main">
        <!--企业简介-->
        <div class="group-countent-modular">
            <div class="group-modular-text1 fl"><img src="/images/group/text-qyjj.png" alt="企业简介"></div>
            <div class="title-line"></div>
            <div class="group-modular-main">
                <div class="group-modular-main-img fr qyjz-img-move">
                    <img src="images/group/modular_pic_qyjz1.png">
                </div>
                <div class="group-modular-main-version fl qyjz-text-move">
                    <p>浙江长和控股有限公司前身成立于2013年3月，注册资金5000万元人民币。凭借多年的市场敏锐度与成熟的管理机制于2016年5月完成重组，实行集团化运营。企业总部位于杭州，现有员工900余人，其中汽车类相关专业占90%以上，风控及法务队伍庞大，是一支年轻化、知识化、专业化的富有超强执行力的优秀团队。</p>
                    <p>目前，浙江长和控股有限公司旗下已有6家全资子公司，行业遍及按揭贷款、车险、电商平台、资产管理、融资租赁、评估鉴定、不良资产清收、资产证券化等 。旗下杭州长合汽车销售服务有限公司，成立不到2年，已迅速覆盖全国18个省120多个城市，个人车贷申请总额超20亿元，创造了二手车金融直营团队的……</p>
                    <span> <a href="culture.html"> > 查看详情</a> </span>
                </div>
            </div>
        </div>
        <!--企业动态-->
        <div class="group-countent-modular">
            <div class="group-modular-text2 fr"><img src="images/group/text_qydt.png" alt="企业动态"></div>
            <div class="title-line"></div>
            <div class="group-modular-main">
                <div class="group-modular-main-version fr">
                    <p>4月22日，长和控股在杭州总部会议室召开了2017年第一季度经营会议，本次会议围绕“人品立身、技能立业”展开，会议由长和控股副总裁葛益钦先生主持，各部门负责人和骨干成员及集团核心领导出席了本次会议。</p>
                    <p>会议伊始，长和控股董事长吴红丽女士发表了重要讲话，总结回顾了上一阶段公司的发展，明确接下来的工作重点，部署今年主要工作任务，对各区域经理和管理层给予了厚望，动员管理层继续努力开拓、壮大长和。</p>
                    <p>会上，销售总监丰凯针对呼叫中心工作对接进行了探讨，法务经理潘光艳为大家展示了风险案例分析，风控总监胡平对相关工作对接进行了发言……</p>
                    <span> <a href="news-detail.html"> > 查看详情</a></span>
                </div>
                <div class="group-modular-main-img fl">
                    <img src="images/group/modular_pic_qyjz2.png">
                </div>
            </div>
        </div>
        <!--组织架构-->
        <div class="group-countent-modular">
            <div class="group-modular-text1 fl"><img src="images/group/text_zzjg.png" alt="组织架构"></div>
            <div class="title-line"></div>
            <div class="group-modular-main">
                <div class="group-modular-main-pic" style="width: 80%">
                    <img src="images/group/zzjg_main_pic.png" width="100%">
                </div>
            </div>
        </div>
        <!--企业文化-->
        <div class="group-countent-modular">
            <div class="group-modular-text2 fr"><img src="images/group/text-qywh.png" alt="企业文化"></div>
            <div class="title-line"></div>
            <div id="group-modular-content">
                <ul>
                    <li>
                        <a href="culture.html" class="a1">
                            <img src="images/group/pic_smzz.png">
                            <div class ="divA">
                                <p class="p1">长和价值观</p>
                                <p class="p2">客户至上、诚信尽职、以人为本、共生共赢。</p>
                            </div>
                        </a>
                        <a href="culture.html" class = "a2">
                            <p class="p4">长和价值观</p>
                            <p class="p5">客户至上：客户的满意是我们所有工作的出发点和落脚点，打造便捷安全的金融服务产品，为客户的资金安全保驾护航。帮助车商提高经营效率、实现收益最大化。诚信尽职：以服务求生存，以创新求发展，追求卓越，崇尚一流。恪守诚信，视“超出客户期望”为工作方向，尽职尽责。</p>
                            <p class="p7">查看详情></p>
                        </a>
                    </li>
                    <li class="pic_lnjzg">
                        <a href="culture.html" class="a1">
                            <img src="images/group/pic_lnjzg.png">
                            <div class ="divA">
                                <p class="p1">长和愿景</p>
                                <p class="p2">实现“中国汽车金融服务国民品牌”的宏伟目标。</p>
                            </div>
                        </a>
                        <a href="culture.html" class = "a2">
                            <p class="p4">长和愿景</p>
                            <p class="p5">挑战与机遇并存的汽车金融领域，长和控股定将砥砺深耕，为撬动这片万亿级新蓝海迅速布局立足现在 连接未来。 </p>
                            <p class="p7">查看详情></p>
                        </a>
                    </li>
                    <li>
                        <a href="culture.html" class="a1">
                            <img src="images/group/pic_jszz.png">
                            <div class ="divA">
                                <p class="p1">服务宗旨</p>
                                <p class="p2">“热情、专业、高效、优质”</p>
                            </div>
                        </a>
                        <a href="culture.html" class = "a2">
                            <p class="p4">服务宗旨</p>
                            <p class="p5">成立以来，浙江长和控股有限公司始终坚持“热情、专业、高效、优质”的服务宗旨。</p>
                            <p class="p7">查看详情></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            $('li').mouseenter(function(){
                $(this).find('.divA').stop().animate({bottom:'-66px'});
                $(this).find('.a2').css({left:'0'})
                $(this).children('.a2').find('.p4').css({left:'0'})
                $(this).children('.a2').find('.p5').css({left:'0'})
                $(this).children('.a2').find('.p6').css({transform:'scale(1)'})
                $(this).children('.a2').find('.p7').css({bottom:'25px'})
            })
            $('li').mouseleave(function(){
                $(this).find('.divA').stop().animate({bottom:'0px'});
                $(this).find('.a2').css({left:-$(this).width()})
                $(this).children('.a2').find('.p4').css({left:-$(this).width()})
                $(this).children('.a2').find('.p5').css({left:-$(this).width()})
                $(this).children('.a2').find('.p6').css({transform:'scale(1.3)'})
                $(this).children('.a2').find('.p7').css({bottom:'-50px'})
            })
        </script>
        <!--合作伙伴-->
        <div class="group-countent-modular">
            <div class="group-modular-text1 fl"><img src="images/group/text-hzhb.png" alt="合作伙伴"></div>
            <div class="title-line"></div>
            <div class="group-modular-content">
                <ul class="group-modular-content-partner">
                    <li><a href="http://www.picc.com.cn/" target="_Blank"> <img src="images/hezuo_picc.jpg"></a> </li>
                    <li><a href="http://www.grantthornton.cn/cn/index.html" target="_Blank"> <img src="images/hezuo_zhit.jpg"></a> </li>
                    <li><a href="http://www.huaxing.com/" target="_Blank"><img src="images/hezuo_huayu.jpg"></a></li>
                    <li><a href="http://www.boc.cn/" target="_Blank"><img src="images/hezuo_china.jpg"></a></li>
                    <li><a href="http://www.icbc.com.cn/icbc/" target="_Blank"><img src="images/hezuo_icbc.jpg"></a></li>
                    <li><a href="http://www.95505.com.cn/" target="_Blank"><img src="images/hezuo_tianan.jpg"></a></li>
                    <li><a href="http://www.cic.cn/" target="_Blank"><img src="images/hezuo_cic.jpg"></a></li>
                    <li><a href="http://www.chinalife.com.cn/publish/zhuzhan/index.html" target="_Blank"><img src="images/hezuo_rens.jpg"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <a href="#0" class="cd-top">Top</a>
@endsection
