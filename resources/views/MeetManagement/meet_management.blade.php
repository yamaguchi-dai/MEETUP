@extends('Common.app')
@section('title', '')
@push('css')
<link href="/css/MeetManagement/meet_management.css" type="text/css" rel="stylesheet" >
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
    <div class="row">
        <div class="col offset-s1">
            <i class="material-icons rate">star_rate</i>
            <i class="material-icons rate">star_rate</i>
        </div>
    </div>
    <div class="row">
        <div class="col s1 offset-s1"><p class="right"><i class="material-icons">account_box</i></p></div>
        <div class="col s4"><h5>Aこさん</h5></div>
        <div class="col s1 offset-s1"><p class="right"><i class="material-icons">apps</i></p></div>
        <div class="col s4"><h5>With</h5></div>
    </div>
    <div class="row">
        <div class="col s1 offset-s1"><p class="right"><i class="material-icons">work</i></p></div>
        <div class="col s4"><h5>学生</h5></div>
        <div class="col s1 offset-s1"><p class="right"><i class="material-icons">album</i></p></div>
        <div class="col s4"><h5>21</h5></div>
    </div>
</div>
<div class="row card  brown lighten-5">
    <div class="row">
        <div class="col offset-s1">
            <i class="material-icons rate">star_rate</i>
            <i class="material-icons rate">star_rate</i>
            <i class="material-icons rate">star_rate</i>
            <i class="material-icons rate">star_rate</i>
        </div>
    </div>
    <div class="row">
        <div class="col s1 offset-s1"><p class="right"><i class="material-icons">account_box</i></p></div>
        <div class="col s4"><h5>Aこさん</h5></div>
        <div class="col s1 offset-s1"><p class="right"><i class="material-icons">apps</i></p></div>
        <div class="col s4"><h5>With</h5></div>
    </div>
    <div class="row">
        <div class="col s1 offset-s1"><p class="right"><i class="material-icons">work</i></p></div>
        <div class="col s4"><h5>学生</h5></div>
        <div class="col s1 offset-s1"><p class="right"><i class="material-icons">album</i></p></div>
        <div class="col s4"><h5>21</h5></div>
    </div>
</div>
<div class="row card  brown lighten-5">
    <div class="row">
        <div class="col s1 offset-s1"><p class="right"><i class="material-icons">account_box</i></p></div>
        <div class="col s4"><h5>Aこさん</h5></div>
        <div class="col s1 offset-s1"><p class="right"><i class="material-icons">apps</i></p></div>
        <div class="col s4"><h5>With</h5></div>
    </div>
    <div class="row">
        <div class="col s1 offset-s1"><p class="right"><i class="material-icons">work</i></p></div>
        <div class="col s4"><h5>学生</h5></div>
        <div class="col s1 offset-s1"><p class="right"><i class="material-icons">album</i></p></div>
        <div class="col s4"><h5>21</h5></div>
    </div>
</div>

@endsection