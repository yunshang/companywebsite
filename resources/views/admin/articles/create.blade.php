@extends('admin.app')
@section('other-css')
    <link rel="stylesheet" href="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link href="//cdn.bootcss.com/select2/4.0.3/css/select2.min.css" rel="stylesheet">
@endsection
@section('content-header')
    <h1>
        内容管理
        <small>问题</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="{{url('/admin/article/index')}}">内容管理</a></li>
        <li class="active">创建问题</li>
    </ol>
@stop

@section('content')
    <h2 class="page-header">创建问题</h2>
    <div class="box box-primary">
        <form method="POST" action="/admin/articles" accept-charset="utf-8">
            {!! csrf_field() !!}
            <div class="nav-tabs-custom">
                <div class="tab-content">

                    <!---按钮组-->
                    <div class="form-group ">
                        <label for="thumb" class="col-sm-2 control-label">封面</label>
                        <div class="col-sm-2 fileupload-buttonbar">
                  <span class="btn btn-success fileinput-button">
                       <input type="file" name="files" multiple id="fileupload">
                      <div class="files"> </div>
                  </span>
                        </div>
                        <div class="col-sm-6 fileupload-buttonbar">


                            <button type="button" id="startupload" class="btn btn-primary start">
                                <i class="glyphicon glyphicon-upload"></i>
                                <span>上传</span>
                            </button>
                            {{--<button type="button" class="btn btn-warning cancel">--}}
                                {{--<i class="glyphicon glyphicon-ban-circle"></i>--}}
                                {{--<span>Cancel upload</span>--}}
                            {{--</button>--}}
                            {{--<button type="button" class="btn btn-danger delete">--}}
                                {{--<i class="glyphicon glyphicon-trash"></i>--}}
                                {{--<span>Delete</span>--}}
                            {{--</button>--}}
                        </div>
                    </div>
                    <!---进度条-->
                    {{--<div class="form-group">--}}
                        {{--<div class="progress col-sm-7 padding0 margin-left15">--}}
                            {{--<div id="progressbar" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="10" aria-valuemax="100" aria-valuenow="0">
                        <div id="progressbar" class="progress-bar progress-bar-success" style="width:0%;"></div>
                    </div>

                    <div class="tab-pane active">
                        <div class="form-group">
                            <label>标题
                                <small class="text-red">*</small>
                            </label>
                            <input required="required" type="text" class="form-control" name="title" autocomplete="off"
                                   placeholder="问题标题" maxlength="80">
                        </div>
                        <div class="form-group">
                            <label>分类
                                <small class="text-red">*</small>
                            </label>

                            <select name="topics[]" class="js-example-placeholder-multiple js-data-example-ajax form-control" multiple="multiple">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>是否置顶
                                <small class="text-red">*</small>
                            </label>
                            <select class="js-example-placeholder-single form-control" name="is_first">
                                <option value=""></option>
                                <option value="T">是</option>
                                <option value="F">否</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>正文(支持Markdown语法)
                                <small class="text-red">*</small>
                            </label>
                            <div id="container" name="body" type="text/plain" style="height:200px;">
                                {!! old('body') !!}
                            </div>

                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">发布文章</button>

                </div>
            </div>
        </form>
    </div>
@stop

@section('other-js')
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


        $(function () {
            function formatTopic (topic) {
                return "<div class='select2-result-repository clearfix'>" +
                "<div class='select2-result-repository__meta'>" +
                "<div class='select2-result-repository__title'>" +
                topic.name ? topic.name : "Laravel"   +
                    "</div></div></div>";
            }

            function formatTopicSelection (topic) {
                return topic.name || topic.text;
            }

            $(".js-example-placeholder-multiple").select2({
                tags: true,
                placeholder: '选择相关话题',
                minimumInputLength: 2,
                ajax: {
                    url: '/api/topics',
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term
                        };
                    },
                    processResults: function (data, params) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                },
                templateResult: formatTopic,
                templateSelection: formatTopicSelection,
                escapeMarkup: function (markup) { return markup; }
            });
        })
    </script>
    <script>
        $(function () {
            $('#fileupload').fileupload({
                dataType: 'json',
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progressbar').css(
                        'width',
                        progress + '%'
                    );
                },
                add: function (e, data) {
                    data.context = $('#startupload').click(function () {
                        data.submit();
                    });
                },
                submit: function (e, data) {

                },
                autoUpload:false,

                formData:{_token:"{{csrf_token()}}"},
                url:'/admin/articles/uploadimage',
                done: function (e, data) {
                    console.log(data);
                    if(data.result.status == 'success')
                    {
                        $('#thumb').val(data.result.path);
                        var imgshow = '<div class="images_zone"><input type="hidden" name="img" value="'+data.result.path+'" /><span><img src=/uploads/'+data.result.path+' /></span><a href="javascript:;">删除</a></div>';
                        jQuery('.files').append(imgshow);
                        alert('上传成功！') ;
                    }else{
                        alert('上传失败！') ;
                    }
                }
            });
        });
        //图片删除
        $('.files').on({
            mouseenter:function(){
                $(this).find('a').show();
            },
            mouseleave:function(){
                $(this).find('a').hide();
            },
        },'.images_zone');
        $('.files').on('click','.images_zone a',function(){
            $(this).parent().remove();
        });
    </script>
@endsection

