@section('other-css')
<link href="//cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
@show
@extends('layouts.app')

@section('content')

@include('shared._nav')
<div class="news-banner main-banner">
    <div class="banner-title">
        <img src="/images/group/news_title.png">
    </div>
</div>
<div class="main-countent" id="aaa">
    <div class="main-countent-nav ">
        <div class="title cf">
            <ul class="title-list fl">
                <a href="/newlist" style="color:#333"><li class="">公司新闻</li></a>
                <a href="/newlist/industry" style="color:#333"><li class="on">行业新闻</li></a>
                <p style="left:146px"><b></b></p>
            </ul>
        </div>
        <div class="product-wrap">
            <!--案例1-->
            <div class="product show" style="display: block;">
                <section>
                    <div class="tabs-main">
                        <div class="tabs-main-changh main-news">
                            <ul>
                                @foreach($articles as $article)
                                <li>
                                    <div class="main-news-left fl">
                                        <a href="/new/1"><img src="{{$article->cover}}" width="60%"></a>
                                    </div>
                                    <div class="main-news-right fr">
                                        <div class="main-news-right-date" style=" -webkit-box-sizing: initial;">
                                            <span>{{$article->created_at->format('d')}}</span>
                                            <span>{{$article->created_at->format('Y.m')}}</span>
                                        </div>
                                        <h3>{{$article->title}}</h3>
                                        {!! str_limit($article->body,500,'"></p>') !!}
                                    <a href='/new/{{$article->id}}' class="lock-more">查看详情 ></a>
                                    </div>
                                </li>
                                @endforeach
                                {{$articles->links()}}
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<a href="#0" class="cd-top">Top</a>
@endsection
