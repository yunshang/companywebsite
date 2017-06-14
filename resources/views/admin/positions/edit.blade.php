@extends('admin.app')
@section('other-css')
    <link rel="stylesheet" href="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link href="//cdn.bootcss.com/select2/4.0.3/css/select2.min.css" rel="stylesheet">
@endsection
@section('content-header')
    <h1>
        内容管理
        <small>职位</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="{{url('/admin/positions/index')}}">职位管理</a></li>
        <li class="active">编辑职位</li>
    </ol>
@stop

@section('content')
    <h2 class="page-header">编辑职位</h2>
    <div class="box box-primary">
        <form method="POST" action="/admin/positions/{{$position->id}}" accept-charset="utf-8">
            {{method_field('PATCH')}}
            {!! csrf_field() !!}
            <div class="nav-tabs-custom">
                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="form-group">
                            <label>职位
                                <small class="text-red">*</small>
                            </label>
                            <input required="required" type="text" class="form-control" name="job" autocomplete="off"
                                   placeholder="职位" maxlength="80" value="{{$position->job}}">
                        </div>
                        <div class="form-group">
                            <label>招聘部门
                                <small class="text-red">*</small>
                            </label>
                            <input required="required" type="text" class="form-control" name="department" autocomplete="off"
                                   placeholder="招聘部门" maxlength="80" value="{{$position->department}}">
                        </div>

                        <div class="form-group">
                            <label>招聘数量
                                <small class="text-red">*</small>
                            </label>
                            <input required="required" type="text" class="form-control" name="quantity" autocomplete="off"
                                   placeholder="招聘数量" maxlength="80" value="{{$position->quantity}}">
                        </div>

                        <div class="form-group">
                            <label>学历要求
                                <small class="text-red">*</small>
                            </label>
                            <input required="required" type="text" class="form-control" name="academic_requirements" autocomplete="off"
                                   placeholder="学历要求" maxlength="80" value="{{$position->academic_requirements}}">
                        </div>
                        <div class="form-group">
                            <label>工作区域
                                <small class="text-red">*</small>
                            </label>
                            <input required="required" type="text" class="form-control" name="work_area" autocomplete="off"
                                   placeholder="work_area" maxlength="80" value="{{$position->work_area}}">
                        </div>

                        <div class="form-group">
                            <label>正文(支持Markdown语法)
                                <small class="text-red">*</small>
                            </label>
                            <script id="container" name="content" type="text/plain" style="height:200px;">
                                {!! $position->content !!}
                            </script>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">更新文章</button>

                </div>
            </div>
        </form>
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

    <script>
        var ue = UE.getEditor('container', {
            toolbars: [
                ['bold', 'italic', 'underline', 'strikethrough', 'blockquote', 'insertunorderedlist', 'insertorderedlist', 'justifyleft', 'justifycenter', 'justifyright', 'link', 'insertimage', 'fullscreen']
            ],
            elementPathEnabled: false,
            enableContextMenu: false,
            autoClearEmptyNode: true,
            wordCount: false,
            imagePopup: false,
            autotypeset: {indent: true, imageBlockLine: 'center'}
        });
        ue.ready(function () {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
    </script>
@endsection

