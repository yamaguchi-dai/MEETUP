@extends('common.app')
@section('title', '')
@push('scripts')
<script></script>
@endpush
@push('css')
<link href="/css/Login/login.css" type="text/css" rel="stylesheet" >
@endpush
@section('content')
<div class="row center">
    <i class="red-text material-icons">favorite</i>
    <div class=" col s12">
        <h5>MEETUPにログイン</h5>
    </div>
    <div class="input-field col s12">
        <input placeholder="ログインID" type="text" class="validate">
    </div>
    <div class="input-field col s12">
        <input placeholder="パスワード" type="password" class="validate">
    </div>
    <div class="input-field col s12">
        <a class="waves-effect waves-light btn red">ログイン</a>
    </div>
</div>
<div class="row center">
    <div class="col s12">
        <a class="red-text">パスワードをお忘れですか？</a>・<a class="red-text">アカウント作成</a>
    </div>
</div>
@endsection