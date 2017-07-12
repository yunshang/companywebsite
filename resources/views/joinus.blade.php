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
                @foreach($entries as $entry)
                <li>{{$entry->title}}</li>
                @endforeach
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
                                <img src="/images/group/join_banner1.png">
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
                                    @foreach($positions as $position)
                                    <li>
                                        <div class="link">
                                            <div class="link-position">{{$position->job}}</div>
                                            <div class="link-position">{{$position->department}}</div>
                                            <div class="link-number">{{$position->quantity}}</div>
                                            <div class="link-position">{{$position->academic_requirements}}</div>
                                            <div class="link-position">{{$position->work_area}}</div>
                                            <div class="link-position">{{$position->created_at->format('Y-m-d')}}</div>
                                            <i class="fa fa-chevron-down"></i>
                                        </div>
                                        <div class="submenu">
                                            {!! $position->content !!}
                                            <span class="submenu-shenq fr"><a href="javascript:void(0)">申请职位</a> </span></p>
                                        </div>
                                        @endforeach
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
                            {!! $entries[0]->content !!}
                        </div>
                        <!-- 代码 开始 -->
                        <div id="fsD2" class="focus">
                            <div id="D1pic2" class="fPic">
                                @foreach($entries[0]->getallimg() as $img)
                                <div class="fcon">
                                    <a><img src="{{$img->filepath}}"></a>
                                    <span class="shadow"><a>{{$img->description}}</a></span>
                                </div>
                                @endforeach
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

            <div class="product">
                <section>
                    <div class="cultre-main">
                        <div class="cultre-main-text">
                            {!! $entries[1]->content !!}
                        </div>
                        <!-- 代码 开始 -->
                        <div id="fsD1" class="focus">
                            <div id="D1pic1" class="fPic">
                                @foreach($entries[1]->getallimg() as $img)
                                <div class="fcon">
                                    <a><img src="{{$img->filepath}}"></a>
                                    <span class="shadow"><a>{{$img->description}}</a></span>
                                </div>
                                @endforeach
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
            <button class="application-submit" type="submit">提交</button>
            <div class="application-img"><img src="/images/group/join-fork.png"></div>
        </div>
    </div>
    </form>
    <a href="#0" class="cd-top">Top</a>
@endsection
@yield('js')
<script src="{{url('/js/source/koala.min.1.5.js')}}"></script>
<script src="{{url('/js/source/terminator2.2.min.js')}}"></script>
<script type="text/javascript">
    Qfast.add('widgets', { path: "/js/source/terminator2.2.min.js", type: "js", requires: ['fx'] });
    Qfast(false, 'widgets', function () {
        K.tabs({
            id: 'fsD2',   //焦点图包裹id
            conId: "D1pic2",  //** 大图域包裹id
            tabId:"D2fBt",
            tabTn:"a",
            conCn: '.fcon', //** 大图域配置class
            auto: 1,   //自动播放 1或0
            effect: 'fade',   //效果配置
            eType: 'click', //** 鼠标事件
            pageBt:true,//是否有按钮切换页码
            bns: ['.prev', '.next'],//** 前后按钮配置class
            interval: 3000  //** 停顿时间
        })
    })
</script>
<script type="text/javascript">
    Qfast.add('widgets', { path: "/js/source/terminator2.2.min.js", type: "js", requires: ['fx'] });
    Qfast(false, 'widgets', function () {
        K.tabs({
            id: 'fsD1',   //焦点图包裹id
            conId: "D1pic1",  //** 大图域包裹id
            tabId:"D1fBt",
            tabTn:"a",
            conCn: '.fcon', //** 大图域配置class
            auto: 1,   //自动播放 1或0
            effect: 'fade',   //效果配置
            eType: 'click', //** 鼠标事件
            pageBt:true,//是否有按钮切换页码
            bns: ['.prev', '.next'],//** 前后按钮配置class
            interval: 3000  //** 停顿时间
        })
    })
</script>
