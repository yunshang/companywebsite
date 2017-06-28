@extends('layouts.app')

@section('content')

@include('shared._nav')
<div class="contact-banner">
    <div class="banner-title">
        <img src="images/group/contact_us_title.png">
    </div>
</div>
<div class="main-countent contact-main">
    <div class="main-content-map">
        <img src="images/group/contact_map.png" width="100%">
    </div>
    <div class="main-content-contact ">
        <ul>
            <li>
                <span><img src="/images/group/contact_us_icon1.png"></span>
                <p>{{$setting->company_address}}</p>
            </li>
            <li>
                <span><img src="/images/group/contact_us_icon2.png"></span>
                <p>{{$setting->company_phone}}</p>
            </li>
            <li>
                <span><img src="/images/group/contact_us_icon3.png"></span>
                <p>{{$setting->company_email}}</p>
            </li>
        </ul>
    </div>
</div>
<a href="#0" class="cd-top">Top</a>
@endsection

