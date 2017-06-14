@extends('admin.app')
@section('other-css')
    <link rel="stylesheet" href="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link href="//cdn.bootcss.com/select2/4.0.3/css/select2.min.css" rel="stylesheet">
@endsection
@section('content-header')
    <h1>
        内容管理
        <small>新闻分类</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="{{url('/admin/articlekind/index')}}">内容管理</a></li>
        <li class="active">编辑分类</li>
    </ol>
@stop

@section('content')
    <h2 class="page-header">编辑分类</h2>
    <div class="box box-primary">
        <form method="POST" action="/admin/articlekind/{{$articlekind->id}}" accept-charset="utf-8">
            {{method_field('PATCH')}}
            {!! csrf_field() !!}
            <div class="nav-tabs-custom">
                <div class="tab-content">

                    <div class="tab-pane active">
                        <div class="form-group">
                            <label>标题
                                <small class="text-red">*</small>
                            </label>
                            <input required="required" type="text" class="form-control" name="name" autocomplete="off"
                                   placeholder="问题标题" maxlength="80" value="{{$articlekind->name}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">更新分类</button>

                </div>
            </div>
        </form>
    </div>
@stop

@section('other-js')
    <script src="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- 配置文件 -->
        window.UEDITOR_CONFIG.serverUrl = '{{ config('ueditor.route.name') }}'
    </script>
@endsection

