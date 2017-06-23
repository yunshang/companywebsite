@extends('admin.app')
@section('other-css')
    <link rel="stylesheet" href="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link href="//cdn.bootcss.com/select2/4.0.3/css/select2.min.css" rel="stylesheet">
@endsection
@section('content-header')
    <h1>
        内容管理
        <small>员工条目</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="{{url('/admin/entries/index')}}">员工条目</a></li>
        <li class="active">创建新条目</li>
    </ol>
@stop

@section('content')
    <h2 class="page-header">创建新条目</h2>
    <div class="box box-primary">
        <form method="POST" action="/admin/entries/{{$entry->id}}" accept-charset="utf-8">
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
                            placeholder="标题" maxlength="80" value="{{$entry->title}}">

                    </div>

                    <div class="form-group">
                        <label>正文(支持Markdown语法)
                            <small class="text-red">*</small>
                        </label>
                        <script id="container" name="content" type="text/plain" style="height:200px;">
                             {!! $entry->content !!}
                        </script>
                    </div>


                    <div class="row fileupload-buttonbar" style="padding-left:15px;">
                        <div class="thumbnail col-sm-12">
                            <div class="row img-list">
                                @foreach($imgs as $img)
                                <div class="col-sm-12 entry-list">
                                    <div class="col-sm-4"> 
                                        <img class="weixin_show" style="height:180px;margin-top:10px;margin-bottom:8px;"  src="{{$img->filepath}}" data-holder-rendered="true">
                                    </div>
                                    <div class="col-sm-4"> 
                                        <input required="required" type="text" class="form-control" name="description[]" autocomplete="off" placeholder="描述" maxlength="50" style=" margin-top: 80px" value="{{$img->description}}">
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="##" class="btn btn-warning weixin_cancle" style="margin-top:80px">删除</a>
                                    </div>
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
                                <span>上传图片</span>
                                <input type="file" id="weixin_image" name="files" multiple>
                                </span>
                            </div>
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary">更新</button>
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
                var imgshow = '<div class="col-sm-12 entry-list"><div class="col-sm-4"><img class="weixin_show" style="height: 180px;margin-top:10px;margin-bottom: 8px" src=/uploads/'+data.result.path+' data-holder-rendered="true"/></div>' +
                    '<div class="col-sm-4"> <input required="required" type="text" class="form-control" name="description[]" autocomplete="off" placeholder="描述" maxlength="50" style=" margin-top: 80px"></div>' +
                    '<div class="col-sm-4"><a href="##" class="btn btn-warning weixin_cancle" style="margin-top:80px">删除</a></div><input type="hidden" name="img[]" class="file_val" value="/uploads/' +data.result.path+'"></div>';
                    jQuery('.img-list').append(imgshow);
                $("#weixin_progress").css('width',0 + '%');
                $("#weixin_progress").html(0 + '%');
            });
        });

        $('.img-list').on('click','.weixin_cancle',function(){
            $(this).parents('.entry-list').remove();
        });
        function cancleUpload() {
            $("#file_valu").val("");
            $("#weixin_upload").css({display:""});
            $("#weixin_cancle").css({display:"none"});
        }
    </script>
@endsection

