@extends('layouts.app')

@section('content')

@include('shared._nav')

<div class="cultre-banner main-banner">
    <div class="banner-title">
        <img src="/images/group/about_title.png">
    </div>
</div>
<div class="main-countent">
    <div class=" main-countent-nav">
        <div class="title cf">
            <ul class="title-list fl cf ">
                <li class="{{$filter == 'index' ? 'on' : ''}}" >企业简介</li>
                <li class="{{$filter == 'culture' ? 'on' : ''}}">企业文化</li>
                <li class="{{$filter == 'mien' ? 'on' : ''}}">企业风采</li>
                @if ($filter == 'index')
                <p><b></b></p>
                @elseif ($filter == 'culture')
                <p style="left: 146px;"><b></b></p>
                @else
                <p style="left: 292px;"><b></b></p>
                @endif
            </ul>
        </div>
        <div class="product-wrap">
            <!--案例1-->
            <div class="product" style="display: {{$filter == 'index' ? 'block' : 'none' }};" id="intro">
                <section>
                    <div class="cultre-main">
                        <div class="tabs-main-changh main-qyjj">
                            <div class="main-left-pic fl">
                                <img src="/images/group/culture_main_pic1.jpg">
                            </div>
                            <div class="main-right-text fr">
                                <div class="text-english">COMPANY <span class="text-english-color">PROFILE</span></div>
                                <div class="text-title">企业简介</div>
                                <div class="text-main">
                                    <p>浙江长和控股有限公司前身成立于2013年3月，注册资金5000万元人民币。凭借多年的市场敏锐度与成熟的管理机制于2016年5月完成重组，实行集团化运营。</p>
                                    <p>目前，长和控股旗下已有6家全资子公司，是一家专业从事二手车按揭贷款、电商平台、资产管理、融资租赁、评估鉴定、不良资产清收、资产证券化等为一体的创新型消费金融服务公司，与中国人保、工商银行、中国银行、杭州银行等多家金融机构达成为战略合作伙伴，互惠互信。</p>
                                    <p>企业总部位于杭州，现有员工900余人，具有多年汽车消费金融、风险管理、法务催收、保险、资产处置等从业经验。其中汽车类相关专业占90%以上，风控及法务队伍庞大，是一支年轻化、知识化、专业化的富有超强执行力的优秀团队。</p>
                                    <p>自成立以来，长和控股以精湛专业的金融服务、严谨先进的风控理念，为消费者和车商提供了全面、便捷、高效、安全的二手车按揭业务。通过团队不懈的努力创造，2017年期间，车贷业务已覆盖全国18个省120多个城市，个人车贷申请总额超50亿元，创造了二手车金融直营团队的新纪录。</p>
                                    <p>长和控股旨在为车商提供成本低、放款快的二手车消费贷，促进成交，提高客单价。为客户量身打造二手车按揭和车延保方案，基本做到当天选车、当天过户、当天放款，让客户体验轻松购车的快感。同时，深化银行合作，帮助银行获取优质资产。</p>
                                </div>
                                <div class="text-number">
                                    <ul>
                                        <li>
                                            <h3>2013</h3>
                                            <p>公司成立</p>
                                        </li>
                                        <li>
                                            <h3>900+</h3>
                                            <p>优秀员工</p>
                                        </li>
                                        <li>
                                            <h3>18+</h3>
                                            <p>覆盖省级</p>
                                        </li>
                                        <li>
                                            <h3>50亿</h3>
                                            <p>销售额度</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="picScroll-left">
                            <div class="hd">
                                <a class="hd-left fl" href="javascript:void(0)"><img src="/images/group/cefiro/arrow-left.png" /></a>
                                <a class="hd-right fr" href="javascript:void(0)"><img src="/images/group/cefiro/arrow-right.png"/></a>
                            </div>
                            <div class="bd">
                                <ul class="picList">
                                    <li>
                                        <div class="pic"><a href="#"><img src="/images/group/cefiro/company1.jpg" /></a></div>
                                    </li>
                                    <li>
                                        <div class="pic"><a href="#"><img src="/images/group/cefiro/company3.jpg" /></a></div>
                                    </li>
                                    <li>
                                        <div class="pic"><a href="#"><img src="/images/group/cefiro/company4.jpg"/></a></div>
                                    </li>
                                    <li>
                                        <div class="pic"><a href="#"><img src="/images/group/cefiro/company5.jpg" /></a></div>
                                    </li>
                                    <li>
                                        <div class="pic"><a href="#"><img src="/images/group/cefiro/company6.jpg" /></a></div>
                                    </li>
                                    <li>
                                        <div class="pic"><a href="#"><img src="/images/group/cefiro/company7.jpg" /></a></div>
                                    </li>
                                    <li>
                                        <div class="pic"><a href="#"><img src="/images/group/cefiro/company8.jpg"/></a></div>
                                    </li>
                                    <li>
                                        <div class="pic"><a href="#"><img src="/images/group/cefiro/company9.jpg" /></a></div>
                                    </li>
                                    <li>
                                        <div class="pic"><a href="#"><img src="/images/group/cefiro/company10.jpg" /></a></div>
                                    </li>
                                    <li>
                                        <div class="pic"><a href="#"><img src="/images/group/cefiro/company11.jpg" /></a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--董事长致辞-->
                        <div class="tabs-main-changh main-ldzz">
                            <div class="main-right-text fl">
                                <div class="text-english">LEADER'S SPEECH</div>
                                <div class="text-title">董事长致辞</div>
                                <div class="text-main">
                                    <p>以稳健的优质姿态，不断提升服务价值。重视诚信经营，打造一个可以无处不分期的汽车金融交易诚信市场。以争做“中国汽车销售金融服务国民品牌”为企业奋斗目标。</p>
                                </div>
                            </div>
                            <div class="main-left-pic fr">

                            </div>
                        </div>
                        <!--<div class="tabs-main-changh main-fwzz">
                            <div class="main-right-text fl">
                                <div class="text-english">THE SERVICE<span class="text-english-color">PURPOSE</span> </div>
                                <div class="text-title">企业荣誉</div>
                                <div class="text-main">
                                    <p>拼搏创新、敢为人先，“不拼不博不是长和人”。</p>
                                    <p>长和人把拼搏创新作为自己的处事风格和行动指南。在长和人眼里，没有跨不过的河，没有翻不过的山。长和人明白，拼搏决不是蛮干。拼搏是审时度势后的果断决策，是把不可能变成有可能的创新开拓，是认准目标后的不屈不挠和咬定青山不放松的执着秉赋。</p>
                                    <p>敢为人先，是长和发展壮大的内在驱动力，是长和人心有大世界，追求一流目标的具体概况。长和人敢于打破常规，做别人想不到的事，做别人不敢想的事，做别人做不到的事。长和人是敢于创造的人，长和人是永争第一的人。</p>
                                </div>
                            </div>
                            <div class="main-left-pic fr">
                                <img src="images/group/about_main_pic2.png">
                            </div>
                        </div>-->
                    </div>
                </section>
            </div>
            <!--案例2-->
            <div class="product" style="display: {{$filter == 'culture' ? 'block' : 'none' }};" id="intro">
                <section>
                    <div class="cultre-main">
                        <div class="tabs-main-changh main-hxjz">
                            <div class="main-left-pic fl">
                                <img src="/images/group/culture_main_pic.png">
                            </div>
                            <div class="main-right-text fr">
                                <div class="text-english">THE CORE <span class="text-english-color">VALUE</span></div>
                                <div class="text-title">长和核心价值观</div>
                                <div class="text-main">
                                    <h3>客户至上</h3>
                                    <p>客户的满意是我们所有工作的出发点和落脚点，打造便捷安全的金融服务产品，为客户的资金安全保驾护航。帮助车商提高经营效率、实现收益最大化。</p>
                                    <h3>诚信尽职</h3>
                                    <p>以服务求生存，以创新求发展，追求卓越，崇尚一流。恪守诚信，视“超出客户期望”为工作方向，尽职尽责。</p>
                                    <h3>以人为本</h3>
                                    <p>以品质取胜，以服务立足。打造人性化、多元化、全方位的金融服务，以建立品牌为目标，真正实现一站式的汽车金融服务体验，满足国民对美好车生活的不断需求。</p>
                                    <h3>共生共赢</h3>
                                    <p>诚信、合作、共生、共赢。</p>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-main-changh main-yuanj">
                            <div class="main-right-text">
                                <div class="text-english">CHANGHE  VISION </div>
                                <div class="text-title">长和愿景</div>
                                <div class="text-main">
                                    <p>挑战与机遇并存的汽车金融领域，长和控股定将砥砺深耕，</p>
                                    <p>为撬动这片万亿级新蓝海迅速布局。立足现在，连接未来。</p>
                                    <p>保持稳健、快步的发展态势，秉承着一切为了客户的核心经营理念。</p>
                                    <p>实现“中国汽车金融服务国民品牌”的宏伟目标。</p>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-main-changh main-fwzz">
                            <div class="main-right-text fl">
                                <div class="text-english">THE SERVICE <span class="text-english-color">PURPOSE</span></div>
                                <div class="text-title">长和服务宗旨</div>
                                <div class="text-main">
                                    <p>成立以来，浙江长和控股有限公司始终坚持“热情、专业、高效、优质”的服务宗旨。</p>
                                    <p>统一、优质、便捷的一站式呼叫中心，为客户提供安心优质的售后保障。</p>
                                    <p>严格高效的审核系统、专业的风控管理模式以及合理的风险承担机制，让业务更加灵活，风险更加清晰直观。</p>
                                    <p>有效规避风险，为客户提供阳光、快捷、安全、稳固的车贷服务。</p>
                                </div>
                            </div>
                            <div class="main-left-pic fr">
                                <img src="/images/group/culture_main_pic2.png">
                            </div>
                        </div>
                        <div class="tabs-main-changh main-chjs">
                            <div class="main-right-text fr">
                                <div class="text-english">CHANGHE  SPIRIT </div>
                                <div class="text-title">长和精神</div>
                                <div class="text-main">
                                    <p>公司秉承“务实创新、合作共赢”的经营理念，倡导“诚信、奋斗、精益、成长，人品立身，技能立业”的企业精神，不断提升公司核心竞争力，提高员工职业技能，不断满足合作伙伴和客户的需求，提升满意度，持续创新。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!--案例3-->
            <div class="product" style="display: {{$filter == 'mien' ? 'block' : 'none' }};" id="sty">
                <section>
                    @foreach($enterprisestyles as $enterprisestyle)
                    <div class="cultre-qyfc">
                        <h3>{{$enterprisestyle->title}}<span>{{$enterprisestyle->subtitle}}</span></h3>
                        <div class="picScroll-left">
                            <div class="hd">
                                <a class="hd-left fl" href="javascript:void(0)"><img src="/images/group/cefiro/arrow-left.png" /></a>
                                <a class="hd-right fr" href="javascript:void(0)"><img src="/images/group/cefiro/arrow-right.png"/></a>
                            </div>
                            <div class="bd">
                                <ul class="picList">
                                    @foreach($enterprisestyle->getallimg() as $img)
                                    <li>
                                        <div class="pic"><a href="#"><img src="{{$img->filepath}}" width="420px" height="280px"/></a></div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </section>
            </div>
        </div>
    </div>
</div>
<a href="#0" class="cd-top">Top</a>
@endsection
