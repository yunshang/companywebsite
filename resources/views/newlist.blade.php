@extends('layouts.app')

@section('content')

@include('shared._nav')

<div class="news-banner main-banner">
    <div class="banner-title">
        <img src="images/group/news_title.png">
    </div>
</div>
<div class="main-countent">
    <div class="main-countent-nav ">
        <div class="title cf">
            <ul class="title-list fl cf ">
                <li class="on">公司新闻</li>
                <li>行业新闻</li>
                <p><b></b></p>
            </ul>
        </div>
        <div class="product-wrap">
            <!--案例1-->
            <div class="product show" style="display: block;">
                <section>
                    <div class="tabs-main">
                        <div class="tabs-main-changh main-news">
                            <ul>
                                <li>
                                    <div class="main-news-left fl">
                                        <a href="news-detail3.html"><img src="images/group/news_pic11.jpg" width="100%"></a>
                                    </div>
                                    <div class="main-news-right fr">
                                        <div class="main-news-right-date">
                                            <span>15</span>
                                            <span>2017.04</span>
                                        </div>
                                        <h3>【新血液 新力量】2017年长和控股第一期新员工培训开启！</h3>
                                        <p>
                                            为了帮助新员工尽快了解公司、转变角色、融入长和大家庭，2017年4月15日，公司开展了“2017年长和控股第一期新员工培训”，共有135名新员工参加了此次培训。课程内容涉及公司企业文化及基本制度流程、业务发展，职业生涯规划等。
                                        </p>
                                        <p>葛益钦副总裁在培训前和大家做了两个有趣的互动小游戏，鼓励大家加入长和后，做人做事要保持同理心，学会沟通，努力实现个人和公司的共同成长与发展。</p>
                                        <p>人力资源部经理付素花详细的介绍了公司业务规模、组织架构、业务流程。尤其是讲解了部门职能、办事流程、制度要求等，为新员工更快更好地融入公司、融入部门，进入工作角色打下了良好地基础。来自各个部门的员工都听得聚精会神，认真记录笔记……</p>

                                        <a href="news-detail3.html" class="lock-more">查看详情 ></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="main-news-left fl">
                                        <a href="news-detail.html"><img src="images/group/news-pic1.jpg" width="100%"></a>
                                    </div>
                                    <div class="main-news-right fr">
                                        <div class="main-news-right-date">
                                            <span>22</span>
                                            <span>2017.04</span>
                                        </div>
                                        <h3>长和控股2017年第一季度经营会议圆满落幕</h3>
                                        <p>
                                            4月22日，长和控股在杭州总部会议室召开了2017年第一季度经营会议，本次会议围绕“人品立身、技能立业”展开，会议由长和控股副总裁葛益钦先生主持，各部门负责人和骨干成员及集团核心领导出席了本次会议。
                                        </p>
                                        <p>
                                            会议伊始，长和控股董事长吴红丽女士发表了重要讲话，总结回顾了上一阶段公司的发展，明确接下来的工作重点，部署今年主要工作任务，对各区域经理和管理层给予了厚望，动员管理层继续努力
                                            开拓、壮大长和。</p>
                                        <p>会上，销售总监丰凯针对呼叫中心工作对接进行了探讨，法务经理潘光艳为大家展示了风险案例分析，风控总监胡平对相关工作对接进行了发言……</p>
                                        <a href="news-detail.html" class="lock-more">查看详情 ></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="main-news-left fl">
                                        <a href="news-detail2.html"><img src="images/group/news_pic19.jpg" width="100%"></a>
                                    </div>
                                    <div class="main-news-right fr">
                                        <div class="main-news-right-date">
                                            <span>02</span>
                                            <span>2017.05</span>
                                        </div>
                                        <h3>【从专业人才到管理高手】“银天鹅”第二期培训有啥亮点？</h3>
                                        <p>
                                            为了满足学员们的需求，“银天鹅”计划第二期培训开课啦！本期课程由知名讲师郭维骐主讲，通过两天的培训学习，长和控股中层干部们学习了如何提升执行力、加强沟通、目标管理以及有效激励员工等方面的管理知识。</p>
                                        <p>
                                            不同于想象中培训计划的枯燥乏味，“银天鹅”培训课程分小组教学，圆桌讨论，案例分析，相比之下更加有趣味性和深刻性.</p>
                                        <p>作为一名管理者，明确自己的角色定位，清楚自己适合的管理风格很重要。指令型、辅导型、支持型、授权型，你是哪一种呢？讲师为学员测试管理风格，并传授根据员工意愿和能力确定管理风格的小诀窍…… </p>
                                        <a href="news-detail2.html" class="lock-more">查看详情 ></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="fenpage">
                            <a href="#"><span class="last-page">上一页</span></a>
                            <a href="#"><span>1</span></a>
                            <a href="#"><span>2</span></a>
                            <a href="#"><span>3</span></a>
                            <a href="#"><span>……</span></a>
                            <a href="#"><span class="next-page">下一页</span></a>
                        </div>
                    </div>
                </section>
            </div>
            <!--案例2-->
            <div class="product">
                <section>
                    <div class="tabs-main">
                        <div class="tabs-main-changh main-news">
                            <ul>
                                <li>
                                    <div class="main-news-left fl">
                                        <a href="news-detail3.html"><img src="images/group/news_pic11.jpg" width="100%"></a>
                                    </div>
                                    <div class="main-news-right fr">
                                        <div class="main-news-right-date">
                                            <span>16</span>
                                            <span>2017.05</span>
                                        </div>
                                        <h3>杭州省内二手车限迁政策解除，二手车市场终能“破壁”起来！</h3>
                                        <p>
                                            作为限牌城市，杭州的二手车货源充足，其中70%的二手车往外输出。对于很多二手车商来说，以前国三以下的车销售渠道很窄，有些甚至白白报废，对于车主和车商都是损失。
                                        </p>
                                        <p>中国的汽车市场消费层次十分鲜明，北上广深这些地区已经将汽车作为普通生活必需品购置，由于汽车更新量大，并且更新时间较早，这些二手车向二线、三线甚至农村市场转移，是正常的商品流通方向，但各地的限迁严重影响了这一市场的正常流动。</p>
                                        <p>在一些二手车限迁城市，国三以下标准的车辆因为无法正常流通，被迫只能以几百元交易甚至最终报废。实际上，这样的车辆在一些偏远地区能卖出几千元甚至上万元的价格。限迁取消后，这样的车辆不至于被提前报废……</p>

                                        <a href="news-detail3.html" class="lock-more">查看详情 ></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="main-news-left fl">
                                        <a href="news-detail.html"><img src="images/group/news-pic1.jpg" width="100%"></a>
                                    </div>
                                    <div class="main-news-right fr">
                                        <div class="main-news-right-date">
                                            <span>22</span>
                                            <span>2017.04</span>
                                        </div>
                                        <h3>长和控股2017年第一季度经营会议圆满落幕</h3>
                                        <p>
                                            4月22日，长和控股在杭州总部会议室召开了2017年第一季度经营会议，本次会议围绕“人品立身、技能立业”展开，会议由长和控股副总裁葛益钦先生主持，各部门负责人和骨干成员及集团核心领导出席了本次会议。
                                        </p>
                                        <p>
                                            会议伊始，长和控股董事长吴红丽女士发表了重要讲话，总结回顾了上一阶段公司的发展，明确接下来的工作重点，部署今年主要工作任务，对各区域经理和管理层给予了厚望，动员管理层继续努力
                                            开拓、壮大长和。</p>
                                        <p>会上，销售总监丰凯针对呼叫中心工作对接进行了探讨，法务经理潘光艳为大家展示了风险案例分析，风控总监胡平对相关工作对接进行了发言……</p>
                                        <a href="news-detail.html" class="lock-more">查看详情 ></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="main-news-left fl">
                                        <a href="news-detail2.html"><img src="images/group/news_pic19.jpg" width="100%"></a>
                                    </div>
                                    <div class="main-news-right fr">
                                        <div class="main-news-right-date">
                                            <span>02</span>
                                            <span>2017.05</span>
                                        </div>
                                        <h3>【从专业人才到管理高手】“银天鹅”第二期培训有啥亮点？</h3>
                                        <p>
                                            为了满足学员们的需求，“银天鹅”计划第二期培训开课啦！本期课程由知名讲师郭维骐主讲，通过两天的培训学习，长和控股中层干部们学习了如何提升执行力、加强沟通、目标管理以及有效激励员工等方面的管理知识。</p>
                                        <p>
                                            不同于想象中培训计划的枯燥乏味，“银天鹅”培训课程分小组教学，圆桌讨论，案例分析，相比之下更加有趣味性和深刻性.</p>
                                        <p>作为一名管理者，明确自己的角色定位，清楚自己适合的管理风格很重要。指令型、辅导型、支持型、授权型，你是哪一种呢？讲师为学员测试管理风格，并传授根据员工意愿和能力确定管理风格的小诀窍…… </p>
                                        <a href="news-detail2.html" class="lock-more">查看详情 ></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="fenpage">
                            <a href="#"><span class="last-page">上一页</span></a>
                            <a href="#"><span>1</span></a>
                            <a href="#"><span>2</span></a>
                            <a href="#"><span>3</span></a>
                            <a href="#"><span>……</span></a>
                            <a href="#"><span class="next-page">下一页</span></a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<a href="#0" class="cd-top">Top</a>
@endsection
