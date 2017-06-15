@extends('admin.app')
@section('content-header')
    <section class="content-header">
        <h1>
            管理台
            <small>控制面板</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> 主页</a></li>
            <li class="active">控制面板</li>
        </ol>
    </section>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            @foreach($collects as $collect)
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box {{$collect['bck']}}" style="color: #fff">
                        <div class="inner">
                            <h3>{{$collect['count']}}<sup style="font-size: 20px">{{$collect['sup']}}</sup></h3>

                            <p>{{$collect['title']}}</p>
                        </div>
                        <div class="icon">
                            <i class="ion {{$collect['icon']}}"></i>
                        </div>
                        <a href="{{url($collect['url'])}}" class="small-box-footer">更多信息 <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
        </div>
    </section>
@endsection
