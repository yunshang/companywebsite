@extends('layouts.app')

@section('content')

@include('shared._nav')

<div class="group-banner">
    <img src="images/group/banner.jpg" width="100%">
</div>
<!--企业简介-->
<div class="group-content-title">
    <div class="group-title-triangle"></div>
    <h2>企业简介</h2>
    <h4>COMPANY PROFILE</h4>
</div>
<div class="group-content-box">
    <div class="group-content-box-text">
        <p>
            <span>浙</span>江长和控股有限公司前身成立于2013年3月，注册资金5000万元人民币。凭借多年的市场敏锐度与成熟的管理机制于2016年5月完成重组，实行集团化运营。
        </p>
        <p>
            目前，长和控股旗下已有6家全资子公司，是一家专业从事二手车按揭贷款、电商平台、资产管理、融资租赁、评估鉴定、不良资产清收、资产证券化等为一体的创新型消费金融服务公司，与中国人保、工商银行、中国银行、杭州银行等多家金融机构达成为战略合作伙伴，互惠互信。
        </p>
        <p>
            企业总部位于杭州，现有员工900余人，具有多年汽车消费金融、风险管理、法务催收、保险、资产处置等从业经验。其中汽车类相关专业占90%以上，风控及法务队伍庞大，是一支年轻化、知识化、专业化的富有超强执行力的优秀团队。
        </p>
        <a href="culture.html" ><span>+ 查看详情</span></a>
    </div>
    <div class="group-content-box-img">
        <img src="images/group/group_jianj_pic.png">
    </div>
</div>
<!--企业文化-->
<div class="group-content-title">
    <div class="group-title-triangle"></div>
    <h2>企业文化</h2>
    <h4>CORPORATE AULTURE</h4>
</div>
<div class="group-content-box">
    <ul>
        <li>
            <div class="group-sbox-img">
                <img src="images/group/group_wenh_pic1.png">
            </div>
            <a href="culture.html" target="_blank" class="group-sbox-content purpose">
                <p class="p4">宗旨</p>
                <p class="p1">PURPOSE</p>
                <p class="p2">热情、专业、高效、优质。</p>
                <p class="p3">+ 查看详情</p>
            </a>
        </li>
        <li class="group-content-marleft">
            <div class="group-sbox-img">
                <img src="images/group/group_wenh_pic4.png">
            </div>
            <a href="culture.html" target="_blank"  class="group-sbox-content value">
                <p class="p4">价值观</p>
                <p class="p1">VALUE</p>
                <p class="p2">诚信、合作、共生、共赢。</p>
                <p class="p3">+ 查看详情</p>
            </a>
        </li>
        <li>
            <a href="culture.html" target="_blank"  class="group-sbox-content vision">
                <p class="p4">愿景</p>
                <p class="p1">VISION</p>
                <p class="p2">立足现在，连接未来。</p>
                <p class="p3">+ 查看详情</p>
            </a>
            <div class="group-sbox-img">
                <img src="images/group/group_wenh_pic3.png">
            </div>
        </li>
        <li class="group-content-marleft">
            <a href="culture.html" target="_blank"  class="group-sbox-content all-win">
                <p class="p4">精神</p>
                <p class="p1">Spirit</p>
                <p class="p2">人品立身，技能立业。</p>
                <p class="p3">+ 查看详情</p>
            </a>
            <div class="group-sbox-img">
                <img src="images/group/group_wenh_pic2.png">
            </div>
        </li>
    </ul>
</div>
<!--新闻中心-->
<div class="group-content-title">
    <div class="group-title-triangle"></div>
    <h2>新闻中心</h2>
    <h4>NEWS CENTER</h4>
</div>
<div class="group-content-box">
    <ul class="group-news-ul">
        <li>
            <div class="group-news-sbox-img">
                <img src="images/group/news_pic11.jpg">
            </div>
            <h4>【新血液 新力量】2017年长和控股第一期学员培训开启！</h4>
            <p>为了帮助新员工尽快了解公司、转变角色、融入长和大家庭，2017年4月15日，公司开展了“2017年长和控股第一期新员工培训”，共有135名新员工参加了此次培训。课程内容……</p>
            <a href="news-detail3.html" class="group-lock-more">
                +查看详情
            </a>
        </li>
        <li>
            <div class="group-news-sbox-img">
                <img src="images/group/news-pic1.jpg">
            </div>
            <h4>长和控股2017年第一季度经营会议圆满落幕！</h4>
            <p>4月22日，长和控股在杭州总部会议室召开了2017年第一季度经营会议，本次会议围绕“人品立身、技能立业”展开，会议由长和控股副总裁葛益钦先生主持，各部门负责人和骨干成员及集团核心……</p>
            <a href="news-detail.html"  class="group-lock-more">
                +查看详情
            </a>
        </li>
        <li>
            <div class="group-news-sbox-img">
                <img src="images/group/news_pic19.jpg">
            </div>
            <h4>【从专业人才到管理高手】“银天鹅”第二期培训有啥亮点？</h4>
            <p>为了满足学员们的需求，“银天鹅”计划第二期培训开课啦！本期课程由知名讲师郭维骐主讲，通过两天的培训学习，长和控股中层干部们学习了如何提升执行力、加强沟通、目标管理以及有效激励员工等方面的管理……</p>
            <a href="news-detail2.html"  class="group-lock-more">
                +查看详情
            </a>
        </li>
    </ul>

</div>
<!--合作伙伴-->
<div class="group-countent wearp-main">
    <div class="group-countent-modular">
        <div class="group-content-title">
            <div class="group-title-triangle"></div>
            <h2>合作伙伴</h2>
            <h4>COOPERATION PARTNER</h4>
        </div>
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
@section('other-js')
@show

