@extends('Common.app')
@section('title', '')
@push('css')
<link href="/css/Dashboard/dashboard.css" type="text/css" rel="stylesheet" >
@endpush
@section('nav')
@include('Common.header_min')
@endsection
@section('content')
<div class="row center">
    <i class="red-text material-icons large">favorite</i>
    <div class=" col s12">
        <h5>MEETUP</h5>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <div class="card  brown lighten-5">
            <div class="card-content">
                <span class="card-title"><i class="material-icons col s2">info_outline</i><span class="col s8 center">お知らせ</span></span>
            </div>
        </div>
    </div>
</div>

<div class="row card  brown lighten-5">
    <div class="col s1 offset-s1"><p class="right"><i class="material-icons">account_box</i></p></div>
    <div class="col s8"><h5>自己紹介</h5></div>
    <div class="col s2"><p><i class="material-icons">content_copy</i></p></div>
    <div class="input-field col s10 offset-s1 ">
        <hr>
        <textarea id="introduction_message" class="materialize-textarea cnt" data-length="120"></textarea>
    </div>
</div>

<div class="row card  brown lighten-5">
    <div class="col s1 offset-s1"><p class="right"><i class="material-icons">message</i></p></div>
    <div class="col s8"><h5>メッセージ１</h5></div>
    <div class="col s2"><p><i class="material-icons">content_copy</i></p></div>
    <div class="input-field col s10 offset-s1 ">
        <hr>
        <textarea id="introduction_message" class="materialize-textarea cnt" data-length="120"></textarea>
    </div>
</div>

<div class="row card  brown lighten-5">
    <div class="col s1 offset-s1"><p class="right"><i class="material-icons">message</i></p></div>
    <div class="col s8"><h5>メッセージ2</h5></div>
    <div class="col s2"><p><i class="material-icons">content_copy</i></p></div>
    <div class="input-field col s10 offset-s1 ">
        <hr>
        <textarea id="introduction_message" class="materialize-textarea cnt" data-length="120"></textarea>
    </div>
</div>

@endsection