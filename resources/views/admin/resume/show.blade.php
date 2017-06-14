@extends('admin.app')
@section('other-css')
    <link rel="stylesheet" href="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link href="//cdn.bootcss.com/select2/4.0.3/css/select2.min.css" rel="stylesheet">
@endsection
@section('content-header')
    <h1>
        内容管理
        <small>简历</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="{{url('/admin/article/index')}}">内容管理</a></li>
        <li class="active">查看简历</li>
    </ol>
@stop

@section('content')
    <h2 class="page-header">查看简历</h2>
    <div class="box box-primary">
        <div class="nav-tabs-custom">
            <div class="tab-content">
                <div class="tab-pane active">
                    <div class="form-group">
                        <label class="col-sm-2">名字
                        </label>
                        <h4><span class="label label-default">{{$resume->name}}</span></h4>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">性别
                        </label>
                        <h4><span class="label label-default">{{$resume->gender}}</span></h4>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">联系电话
                        </label>
                        <h4><span class="label label-default">{{$resume->phone}}</span></h4>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">年龄
                        </label>
                        <h4><span class="label label-default">{{$resume->age}}</span></h4>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">工作年限
                        </label>
                        <h4><span class="label label-default">{{$resume->years_work}}</span></h4>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">申请职位
                        </label>
                        <h4><span class="label label-default">{{$resume->apply_job}}</span></h4>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">在职状态
                        </label>
                        <h4><span class="label label-default">{{$resume->office_status}}</span></h4>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2">教育程度
                        </label>
                        <h4><span class="label label-default">{{$resume->education_level}}</span></h4>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">期望工作地
                        </label>
                        <h4><span class="label label-default">{{$resume->expect_workplace}}</span></h4>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">上岗时间
                        </label>
                        <h4><span class="label label-default">{{$resume->induction_time}}</span></h4>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">教育经历
                        </label>
                        <h4><span class="label label-default">{{$resume->educational_experience}}</span></h4>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">工作经历
                        </label>
                        <h4><span class="label label-default">{{$resume->work_experience}}</span></h4>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2">自我评价
                        </label>
                        <h4><span class="label label-default">{{$resume->self_evaluation}}</span></h4>
                    </div>
                </div>
                <a href="/admin/resume/download/{{$resume->id}}" class="btn btn-primary">下载附件</a>
            </div>
        </div>
    </div>
@stop

@section('other-js')
    <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
    <script src="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="//cdn.bootcss.com/select2/4.0.3/js/select2.full.min.js"></script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="{{ asset('vendor/ueditor/ueditor.config.js') }}"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="{{ asset('vendor/ueditor/ueditor.all.js') }}"></script>
    <script>
        window.UEDITOR_CONFIG.serverUrl = '{{ config('ueditor.route.name') }}'
    </script>
@endsection

