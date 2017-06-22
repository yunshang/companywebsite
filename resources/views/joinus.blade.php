@extends('layouts.app')

@section('content')

@include('shared._nav')

<div class="join-banner main-banner">
    <div class="banner-title">
        <img src="images/group/join_title.png">
    </div>
</div>
<div class="main-countent">
    <div class="main-countent-nav ">
        <div class="title cf">
            <ul class="title-list fl cf ">
                <li class="on">招聘信息</li>
                <li>员工福利</li>
                <li>员工培训</li>
                <p><b></b></p>
            </ul>
        </div>
        <div class="product-wrap">
            <!--招聘信息-->
            <div class="product show" style="display: block;">
                <section>
                    <div class="cultre-main">
                        <div class="cultre-main-join">
                            <div class="tabs-main-changh main-join">
                                <img src="images/group/join_banner1.png">
                            </div>
                            <div class="join-us-main">
                                <ul id="accordion" class="accordion">
                                    <li>
                                        <div class="link">
                                            <div class="link-position">职位</div>
                                            <div class="link-position">招聘部门</div>
                                            <div class="link-number">名额</div>
                                            <div class="link-position">学历要求</div>
                                            <div class="link-position">工作区域</div>
                                            <div class="link-position">发布时间</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="link">
                                            <div class="link-position">财务总监</div>
                                            <div class="link-position">财务部</div>
                                            <div class="link-number">1</div>
                                            <div class="link-position">本科以上学历</div>
                                            <div class="link-position">杭州市</div>
                                            <div class="link-position">2017-06-19</div>
                                            <i class="fa fa-chevron-down"></i>
                                        </div>
                                        <div class="submenu"  style="display: block">
                                            <h3>工作职责：</h3>
                                            <p>1.根据公司中长期经营计划，组织编制年度综合财务计划和控制标准；</p>
                                            <p>2.建立、健全财务管理体系，对财务部门的日常管理、年度预算、资金运作等进行总体控制；</p>
                                            <p>3.主持财务报表及财务预决算的编制工作，为公司决策提供及时有效的财务分析；</p>
                                            <p>4.对公司税收进行整理筹划与管理，做到合理避税；</p>
                                            <p>5.比较精确的监控和预测现金流量，确定和监控公司负债和资本的合理结构；</p>
                                            <p>6.对公司重大的投资、融资、并购等经营活动提供建议和决策支持，参与风险评估、指导、跟踪和控制；</p>
                                            <p>7.与财政、税务、银行、证券等相关政府部门及会计师事务所等相关中介机构建立并保持良好的关系。</p>
                                            <h3 class="submenu-martop">岗位要求：</h3>
                                            <p>1.会计、财务、金融等相关专业本科以上学历持有注册会计师证；</p>
                                            <p>2.10年以上财务工作经验，有金融、互联网金融公司的相关工作经验或知名会计师事务所工作经验，2年以上财务总监或3年以上财务经理工作经验；</p>
                                            <p>3.从事过兼并、重组、上市等项目实施经验者优先考虑；</p>
                                            <p>4.具有全面的财务专业知识、账务处理及财务管理经验;5.熟练操作企业成本管理体系和全面预算管理体系；</p>
                                            <p>6.精通国家财税法律规范，具备优秀的职业判断能力和丰富的财会项目分析处理经验；</p>
                                            <p>7.熟悉会计准则以及相关的财务、税务、审计法规、政策；</p>
                                            <p>8.为人正直、责任心强、作风严谨、坚持原则、工作仔细认真；</p>
                                            <p>9.有较强的沟通协调能力、有良好的纪律性、团队合作以及开拓创新精神。</p>
                                            <h3 class="submenu-martop">薪资待遇：</h3>
                                            <p><span class="fl">面议</span>
                                                <span class="submenu-shenq fr"><a href="###">申请职位</a> </span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="link">
                                            <div class="link-position">法务总监</div>
                                            <div class="link-position">法务部</div>
                                            <div class="link-number">1</div>
                                            <div class="link-position">本科以上学历</div>
                                            <div class="link-position">杭州市</div>
                                            <div class="link-position">2017-06-19</div>
                                            <i class="fa fa-chevron-down"></i>
                                        </div>
                                        <div class="submenu">
                                            <h3>工作职责：</h3>
                                            <p>1.全面负责贷后管理部门的各项管理工作，包括员工管理和相关工作统筹安排；</p>
                                            <p>2.对接外勤团队负责人和内勤团队负责人的日常工作，进行统筹安排、合理分工，并对工作绩效进行考核评定和持续改进；</p>
                                            <p>3.建立健全贷后部门各项规章制度和管理操作规范、标准，并对执行落实情况进行监督检查；</p>
                                            <p>4.负责跟业务部、审核部等部门之间的沟通协调工作；</p>
                                            <p>5.对外负责跟公关机关、法院等职能机关的沟通协调工作；</p>
                                            <p>6.负责定期提供贷后管理分析报告，具体包括对业务条线项目经理拓展客户风险能力进行评估，对贷后客户进行分类，对风险预警客户的资金回收提出具体措施等。</p>
                                            <h3 class="submenu-martop">岗位要求：</h3>
                                            <p>1.本科及以上学历、金融、法律等相关专业；</p>
                                            <p>2.5年以上法务工作经验，有在大型企业工作3年以上管理经验；</p>
                                            <p>3.在金融、投资、并购、企业运营等领域拥有扎实、复合的专业功底和丰富的工作经验；</p>
                                            <p>4.具有卓越的前瞻性、洞察力和执行力、公关协调能力以及信息获取分析能力；</p>
                                            <p>5.具有部门/公安工作经验或者背景的优先考虑。</p>
                                            <h3 class="submenu-martop">薪资待遇：</h3>
                                            <p><span class="fl">面议</span>
                                                <span class="submenu-shenq fr"><a href="###">申请职位</a> </span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="link">
                                            <div class="link-position">高级产品经理</div>
                                            <div class="link-position">互联网事业部</div>
                                            <div class="link-number">1</div>
                                            <div class="link-position">本科以上学历</div>
                                            <div class="link-position">杭州市</div>
                                            <div class="link-position">2017-06-19</div>
                                            <i class="fa fa-chevron-down"></i>
                                        </div>
                                        <div class="submenu">
                                            <h3>工作职责：</h3>
                                            <p>1、承担产品规划、产品设计、需求管理工作，制作MRD、PRD，推进产品成功上线；</p>
                                            <p>2、掌控产品的迭代，发布；和研发团队，设计团队，运营团队配合作战；</p>
                                            <p>3、具有一定商业思维和市场意识，能够站在企业角度发掘行业用户的各类需求、痛点；</p>
                                            <p>4、制定季度规划；</p>
                                            <h3 class="submenu-martop">岗位要求：</h3>
                                            <p>1、本科以上学历，相同岗位工作五年以上；</p>
                                            <p>2、具备产品设计专业知识（产品规划，产品设计，原型设计，项目管理）；</p>
                                            <p>3、能够深入洞察用户的需要，打造出令用户超出期望的产品；</p>
                                            <p>4、有过独立设计的产品成功上线。</p>
                                            <p>5、有互联网公司背景，参加过创业项目，参加过天使轮到B轮的同学优先；</p>
                                            <p>6、学习能力强，认为自己够聪明，愿意接受新事物；</p>
                                            <p>7、thinking different，有产品人的理想；</p>
                                            <p>8、有感染力，沟通能力强。</p>
                                            <h3 class="submenu-martop">薪资待遇：</h3>
                                            <p><span class="fl">面议</span>
                                                <span class="submenu-shenq fr"><a href="###">申请职位</a> </span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="link">
                                            <div class="link-position">结清专员</div>
                                            <div class="link-position">法务部</div>
                                            <div class="link-number">1</div>
                                            <div class="link-position">大专以上学历</div>
                                            <div class="link-position">杭州市</div>
                                            <div class="link-position">2017-06-19</div>
                                            <i class="fa fa-chevron-down"></i>
                                        </div>
                                        <div class="submenu">
                                            <h3>工作职责：</h3>
                                            <p>1.查询客户结清金额，通知客户打款结清；</p>
                                            <p>2.准备客户结清资料发银行办理结清，银行发回的结清资料录入系统后寄客户；</p>
                                            <p>3.查询结清客户逾期和续保情况，根据公司规定退押金；</p>
                                            <p>4.接听咨询电话。</p>
                                            <h3 class="submenu-martop">岗位要求：</h3>
                                            <p>1、熟练使用各类办公软件，具备基本的网络知识；</p>
                                            <p>2、积极热情、敬业爱岗、心理素质佳、有较强的抗压能力和团队协作精神；</p>
                                            <p>3、工作认真负责、踏实肯干、勤奋好学、能吃苦耐劳。</p>
                                            <h3 class="submenu-martop">薪资待遇：</h3>
                                            <p><span class="fl">面议</span>
                                                <span class="submenu-shenq fr"><a href="###">申请职位</a> </span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="link">
                                            <div class="link-position">部门文员</div>
                                            <div class="link-position">法务部</div>
                                            <div class="link-number">若干</div>
                                            <div class="link-position">大专以上学历</div>
                                            <div class="link-position">杭州市</div>
                                            <div class="link-position">2017-06-19</div>
                                            <i class="fa fa-chevron-down"></i>
                                        </div>
                                        <div class="submenu">
                                            <h3>工作职责：</h3>
                                            <p>1、资料整理归档；录入电脑系统；</p>
                                            <p>2、部门其他事物协调；</p>
                                            <p>3、公司按排其他日常事务。</p>
                                            <h3 class="submenu-martop">岗位要求：</h3>
                                            <p>1、大专及以上学历，接受应届生；</p>
                                            <p>2、Word、Excel等办公软件熟练操作；</p>
                                            <p>3、积极热情、敬业爱岗、心理素质佳、有较强的抗压能力和团队协作精神；</p>
                                            <p>4、工作认真负责、踏实肯干、勤奋好学；</p>
                                            <p>5、能吃苦耐劳，有较强的沟通能力。</p>
                                            <h3 class="submenu-martop">薪资待遇：</h3>
                                            <p><span class="fl">面议</span>
                                            <span class="submenu-shenq fr"><a href="###">申请职位</a> </span></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!--员工福利-->
            <div class="product">
                <section>
                    <div class="cultre-main">
                        <div class="cultre-main-text">
                            <h3>优越的办公环境</h3>
                            <p>宽敞的办公区、健身房、茶水间、零食区、多媒体视频会议系统等设施，为员工提供了温馨舒适的办公环境。</p>
                            <h3>良好的激励和晋升制度</h3>
                            <p>双通道晋升体制，高奖金激励制度。年终表彰设有优秀新员工、优秀员工、优秀团队、销售精英等各种奖项。</p>
                            <h3>保险福利</h3>
                            <p>员工入职当月即可享受五险福利，特殊岗位员工享有补充保险福利。</p>
                            <h3>带薪休假</h3>
                            <p>除享有法定的公休假日、婚假、产假等假期外，入司满一年的员工可享受带薪年休假。</p>
                            <h3>节日福利</h3>
                            <p>值春节、中秋等传统节日全体员工享有节日福利，妇女节为全体女职工发放纪念品。</p>
                            <h3>健康体检</h3>
                            <p>入职满一年的员工可享受由公司统一组织的每年一次的健康体检。</p>
                            <h3>各种补贴</h3>
                            <p>公司每月为员工提供餐费补贴、交通补贴、话费补贴等，外派人员享有探亲费和外派补贴，并免费为业务人员提供工作服装。</p>
                        </div>
                        <!-- 代码 开始 -->
                        <div id="fsD2" class="focus">
                            <div id="D1pic2" class="fPic">
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/f1.jpg"></a>
                                    <span class="shadow"><a>为你准备了香醇的咖啡，各种零食、饮品等。</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/f2.jpg"></a>
                                    <span class="shadow"><a>青春靓丽的前台，工作状态up！</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/f3.jpg"></a>
                                    <span class="shadow"><a>现代化的开放式办公空间。</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/f4.jpg"></a>
                                    <span class="shadow"><a>宽敞明亮的走廊，柔情暖意的灯光。</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/f5.jpg"></a>
                                    <span class="shadow"><a>多媒体会议室，在这有无数个创意和idea碰撞火花。</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/f6.jpg"></a>
                                    <span class="shadow"><a>忙碌的日常工作中。</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/f7.jpg"></a>
                                    <span class="shadow"><a>火爆街头的投篮机走进长和。</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/f8.jpg"></a>
                                    <span class="shadow"><a>设施齐全的健身房，工作休闲两不误。</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/f9.jpg"></a>
                                    <span class="shadow"><a>工作之余，来场台球比赛陶冶情操、劳逸结合。</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/f10.jpg"></a>
                                    <span class="shadow"><a>沐浴晨光，迎接朝霞，总是忙碌中的三楼会议室。</a></span>
                                </div>
                            </div>
                            <div class="fbg">
                                <div class="D1fBt" id="D2fBt">
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class="current"><i>1</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>2</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>3</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>4</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>5</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>6</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>7</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>8</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>9</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>10</i></a>

                                </div>
                            </div>
                            <span class="prev"></span>
                            <span class="next"></span>
                        </div>
                        <!-- 代码 结束 -->
                    </div>
                </section>
            </div>
            <!--员工培训-->
            <div class="product">
                <section>
                    <div class="cultre-main-text">
                        <h3>完善的培训体系</h3>
                        <p>主要有中高层干部管理培训、新员工入职培训、部门内部培训、讲师队伍培训、在职人员技能提升训练、储备人员知识培训等。</p>
                        <h3>健全的培训制度</h3>
                        <p>在快速的培养人才路上，用健全的培训实施制度、讲师制度，从培训的需求调研、组织实施、评估跟进出发，为人才培养保驾护航。</p>
                        <h3>优秀的讲师队伍</h3>
                        <p>公司有高级、中级、初级讲师团队，并定期组织讲师的培养体系建设，为各部门培训提供丰富的讲师资源。</p>
                        <h3>丰富的培训形式</h3>
                        <p>在知识更新迭代的快速发展中，公司根据不同的培训对象，不同的培训需求，在培训形式上尝试多样化，突破原有的“坐-讲-听”模式。</p>
                        <p>公司注重培养内部讲师队伍，利用“走出去-带进来”的培训创新模式，既邀请外部专家和讲师到公司讲课，也定期派员工参加外部机构学习，为公司培训带来新鲜活力。同时，通过户外素质拓展、团队建设、模拟演练、行动学习等方式，增强培训效果的转化。</p>
                    </div>
                    <div class="cultre-main">
                        <!-- 代码 开始 -->
                        <div id="fsD1" class="focus">
                            <div id="D1pic1" class="fPic">
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/p1.jpg"></a>
                                    <span class="shadow"><a>人力资源部付经理详细介绍公司业务规模。</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/p2.jpg"></a>
                                    <span class="shadow"><a>2017年长和控股第一期新员工培训。</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/p3.jpg"></a>
                                    <span class="shadow"><a>互动小游戏，增强新员工之间的亲和力。</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/p4.jpg"></a>
                                    <span class="shadow"><a>人力资源部白总监工作经验分享。</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/p5.jpg"></a>
                                    <span class="shadow"><a>我们是“绿巨人”团队。</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/p6.jpg"></a>
                                    <span class="shadow"><a>《时间管理》培训，高效利用自己的碎片时间。</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/p7.jpg"></a>
                                    <span class="shadow"><a>2017年季度会议“纸板做车”游戏。</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/p8.jpg"></a>
                                    <span class="shadow"><a>这个车模就问你，酷不酷？</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/p9.jpg"></a>
                                    <span class="shadow"><a>小组教学，圆桌讨论，案例分析。</a></span>
                                </div>
                                <div class="fcon">
                                    <a><img src="images/group/cefiro/p10.jpg"></a>
                                    <span class="shadow"><a>长和人1小时造了14辆车！</a></span>
                                </div>
                            </div>
                            <div class="fbg">
                                <div class="D1fBt" id="D1fBt">
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class="current"><i>1</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>2</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>3</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>4</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>5</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>6</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>7</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>8</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>9</i></a>
                                    <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>10</i></a>
                                </div>
                            </div>
                            <span class="prev"></span>
                            <span class="next"></span>
                        </div>
                        <!-- 代码 结束 -->
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
    <form method="POST" action="/joinus" accept-charset="utf-8"enctype="multipart/form-data">
        {!! csrf_field() !!}
    <div class="online-application-bj">
        <div class="online-application">
            <h2>在线申请</h2>
            <table>
                <tr class="sml">
                    <td class="sml-label">姓名</td>
                    <td><input type="text" name="name" required="required"></td>
                    <td class="sml-label">性别</td>
                    <td><input type="text" name="gender" required="required"></td>
                </tr>
                <tr class="sml">
                    <td class="sml-label">联系电话</td>
                    <td><input type="text" name="phone" required="required"></td>
                    <td class="sml-label">年龄</td>
                    <td><input type="text" name="age" required="required"></td>
                </tr>
                <tr class="sml">
                    <td class="sml-label">工作年限</td>
                    <td><input type="text" name="years_work" required="required"></td>
                    <td class="sml-label">申请职位</td>
                    <td><input type="text" name="apply_job" required="required"></td>
                </tr>
                <tr class="sml">
                    <td class="sml-label">在职状态</td>
                    <td><input type="text" name="office_status" required="required"></td>
                    <td class="sml-label">教育程度</td>
                    <td><input type="text" name="education_level" required="required"></td>
                </tr>
                <tr class="sml">
                    <td class="sml-label">期望工作地</td>
                    <td><input type="text" name="expect_workplace" required="required"></td>
                    <td class="sml-label">上岗时间</td>
                    <td><input type="text" name="induction_time" required="required"></td>
                </tr>
                <tr class="dg">
                    <td class="sml-label">教育经历</td>
                    <td colspan="3"><textarea name="educational_experience" required="required"></textarea></td>
                </tr>
                <tr class="dg">
                    <td class="sml-label">工作经历</td>
                    <td colspan="3"><textarea name="work_experience" required="required"></textarea></td>
                </tr>
                <tr class="dg">
                    <td class="sml-label">自我评价</td>
                    <td colspan="3"><textarea name="self_evaluation"></textarea></td>
                </tr>
                <tr class="dg">
                    <td class="sml-label">上传附件(简历)</td>
                    <td colspan="3"><input type="file" name="annex" required="required"></td>
                </tr>
            </table>
            <button class="application-submit">提交</button>
            <div class="application-img"><img src="images/group/join-fork.png"></div>
        </div>
    </div>
    </form>
    <a href="#0" class="cd-top">Top</a>
@endsection
