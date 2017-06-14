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
        <li><a href="{{url('/admin/articlekind/index')}}">新闻分类管理</a></li>
        <li class="active">创建分类</li>
    </ol>
@stop

@section('content')
    <h2 class="page-header">创建分类</h2>
    <div class="box box-primary">
        <form method="POST" action="/admin/articlekind" accept-charset="utf-8">
            {!! csrf_field() !!}
            <div class="nav-tabs-custom">
                <div class="tab-content">

                    <div class="tab-pane active">
                        <div class="form-group">
                            <label>
                                名字
                                <small class="text-red">*</small>
                            </label>
                            <input required="required" type="text" class="form-control" name="name" autocomplete="off"
                                   placeholder="新闻名字" maxlength="80">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">提交</button>

                </div>
            </div>
        </form>
    </div>
@stop

@section('other-js')
@endsection

