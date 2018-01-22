@extends('Common.app')
@section('title', '')
@push('scripts')
<script></script>
@endpush
@push('css')
@endpush
@section('nav')
@include('Common.header')
@endsection
@section('content')
<div class="row center">
    <i class="red-text material-icons large">favorite</i>
    <div class=" col s12">
        <h5>MEETUPアカウント作成</h5>
    </div>
    <div class="input-field col s12">
        <input placeholder="ログインID" type="text" class="validate">
    </div>
    <div class="input-field col s12">
        <input placeholder="パスワード" type="password" class="validate">
    </div>
    <div class="input-field col s12">
        <input placeholder="パスワード（確認用）" type="password" class="validate">
    </div>
    <div class="input-field col s6">
        <a href="create_complete" class="waves-effect waves-light btn blue lighten-3">男性アカウント作成</a>
    </div>
    <div class="input-field col s6">
        <a href="create_complete" class="waves-effect waves-light btn pink lighten-3">女性アカウント作成</a>
    </div>
</div>
@endsection