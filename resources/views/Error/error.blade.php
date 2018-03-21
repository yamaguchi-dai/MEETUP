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
    <i class="red-text material-icons large">favorite_border</i>
    <div class=" col s12">
        <h5>{{$title}}</h5>
    </div>
    <div class="input-field col s12">
        <p>{{$message}}</p>
    </div>
</div>
@endsection