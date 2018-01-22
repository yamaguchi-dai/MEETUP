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
    <div class="col s12 m6">
        <div class="card  brown lighten-4">
            <div class="card-content white-text">
                <span class="card-title"><i class="material-icons col s2">info_outline</i><span class="col s8 offset-s1">お知らせ</span></span>
            </div>
        </div>
    </div>
    <div class="col s12 m6">
        <div class="card  brown lighten-4">
            <div class="card-content white-text">
                <span class="card-title"><i class="material-icons col s2">info_outline</i><span class="col s8 offset-s1">お知らせ</span></span>
            </div>
        </div>
    </div>
</div>

@endsection