@extends('admin.app')
@section('content-header')
    <h1>
         Setting
        <small>setting</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li class="active"><a href="">公司信息设置</a></li>
    </ol>
@stop

@section('content')
    <h2 class="page-header">公司信息设置</h2>
    <form method="POST" action="/admin/settings/{{$setting->id}}" accept-charset="utf-8">
        {!! csrf_field() !!}
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">公司地址</a></li>
                <li><a href="#tab_2" data-toggle="tab" aria-expanded="true">公司联系电话 </a></li>
                <li><a href="#tab_3" data-toggle="tab" aria-expanded="true">公司邮箱 </a></li>
            </ul>

            <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="form-group">
                            <label>地址
                                <small class="text-red">*</small>
                            </label>
                            <input value="{{$setting->company_address}}" required="required" type="text" class="form-control"
                                   name="company_address" autocomplete="off"
                                   maxlength="80">
                        </div>
                    </div>
                    <div class="tab-pane " id="tab_2">
                        <div class="form-group">
                            <label>联系电话
                                <small class="text-red">*</small>
                            </label>
                            <input value="{{$setting->company_phone}}" required="required" type="text" class="form-control"
                                   name="company_phone" autocomplete="off"
                                   maxlength="80">
                        </div>
                    </div>
                    <div class="tab-pane " id="tab_3">
                        <div class="form-group">
                            <label>邮箱
                                <small class="text-red">*</small>
                            </label>
                            <input value="{{$setting->company_email}}" required="required" type="text" class="form-control"
                                   name="company_email" autocomplete="off"
                                   maxlength="80">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">确认修改</button>
            </div>
        </div>
    </form>
@stop

