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
        <h5>MEETUPアカウント作成完了</h5>
    </div>
    <div class=" col s12">
        <p>MEETUP登録完了いたしました。</p>
    </div>
    <div class="input-field col s12">
        <a href="dashboard" class="waves-effect waves-light btn red">ユーザー画面へ</a>
    </div>

</div>
@endsection