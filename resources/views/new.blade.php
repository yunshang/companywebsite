@extends('layouts.app')

@section('content')

@include('shared._nav')

<div class="news-banner main-banner">
    <div class="banner-title">
        <img src="/images/group/news_title.png">
    </div>
</div>
<div class="main-countent">
    <div class="main-countent-news wearp-main">
        <div class="news-detail-title">
            <h3>{{$article->title}}</h3>
            <span>发布时间：{{$article->created_at->format('Y-m-d')}}</span>
            <span>发布人：{{$article->user->name}}</span>
        </div>
        <div class="news-detail-content">
            {!!$article->body !!}
        </div>
        <div class="news-detail-link">
            <span class="fl"><a href="/newlist">返回列表</a> </span>
            @if (isset($nextarticle))
                <span class="fr"><a href="/new/{{isset($nextarticle) ? $nextarticle->id: ''}}"> 下一篇：{{isset($nextarticle) ? $nextarticle->title : 'none'}}</a></span>
            @endif
        </div>

    </div>

</div>
<a href="#0" class="cd-top">Top</a>
@endsection
