@extends('admin.app')
@section('other-css')
    <link rel="stylesheet" href="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link href="//cdn.bootcss.com/select2/4.0.3/css/select2.min.css" rel="stylesheet">
@endsection
@section('content-header')
    <h1>
        内容管理
        <small>企业风采</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="{{url('/admin/article/index')}}">内容管理</a></li>
        <li class="active">企业风采</li>
    </ol>
@stop

@section('content')
    <h2 class="page-header">企业风采管理</h2>
    <div class="box box-primary">
        <form method="POST" action="/admin/enterprisestyles/{{$enterprise_style->id}}" accept-charset="utf-8">
            {{method_field('PATCH')}}
            {!! csrf_field() !!}
            <div class="nav-tabs-custom">
                <div class="tab-content">

                    <div class="tab-pane active">
                        <div class="form-group">
                            <label>标题
                                <small class="text-red">*</small>
                            </label>
                            <input required="required" type="text" class="form-control" name="title" autocomplete="off"
                                   placeholder="标题" maxlength="80" value="{{$enterprise_style->title}}">
                        </div>

                        <div class="form-group">
                            <label>副标题
                                <small class="text-red">*</small>
                            </label>
                            <input required="required" type="text" class="form-control" name="subtitle" autocomplete="off"
                                   placeholder="标题" maxlength="80" value="{{$enterprise_style->subtitle}}">
                        </div>

                        <div class="row fileupload-buttonbar" style="padding-left:15px;">
                            <div class="thumbnail col-sm-12">
                                <div class="row img-list">
                                    @foreach($imgs as $img)
                                        <div class="col-sm-4">
                                            <img class="weixin_show" style="height:180px;margin-top:10px;margin-bottom:8px;"  src="{{$img->filepath}}" data-holder-rendered="true">
                                            <a href="##" class="btn btn-warning weixin_cancle">删除</a>
                                            <input type="hidden" name="img[]" class="file_val" value="{{$img->filepath}}">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="10" aria-valuemax="100" aria-valuenow="0">
                                    <div id="weixin_progress" class="progress-bar progress-bar-success" style="width:0%;">
                                    </div>
                                </div>
                                <div class="caption" align="center">
                                <span id="weixin_upload" class="btn btn-primary fileinput-button">
                                <span>上传封面</span>
                                <input type="file" id="weixin_image" name="files" multiple>
                                </span>
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">更新</button>
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
        $(function() {
            $("#weixin_image").fileupload({
                url: '/admin/articles/uploadimage',
                sequentialUploads: true
            }).bind('fileuploadprogress', function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $("#weixin_progress").css('width',progress + '%');
                $("#weixin_progress").html(progress + '%');
            }).bind('fileuploaddone', function (e, data) {
                var imgshow = '<div class="col-sm-4"><img class="weixin_show" style="height: 180px;margin-top:10px;margin-bottom: 8px" src=/uploads/'+data.result.path+' data-holder-rendered="true"/>' +
                    '<a href="##" class="btn btn-warning weixin_cancle">删除</a><input type="hidden" name="img[]" class="file_val" value="/uploads/' +data.result.path+'"></div>';
                jQuery('.img-list').append(imgshow);
                $("#weixin_progress").css('width',0 + '%');
                $("#weixin_progress").html(0 + '%');
            });
        });

        $('.img-list').on('click','.weixin_cancle',function(){
            $(this).parent().remove();
        });
        function cancleUpload() {
            $("#file_valu").val("");
            $("#weixin_upload").css({display:""});
            $("#weixin_cancle").css({display:"none"});
        }
    </script>
@endsection

