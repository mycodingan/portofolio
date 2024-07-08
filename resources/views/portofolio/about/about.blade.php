@extends('layout.layout')

@section('title')
mycodingan
@endsection
@section('conten')
<div class="aboutme">
    <div class="about">
        <img src="{{ asset('img/ppku/jojo.png') }}" alt="ppku" width="50%" class="imgage">
        <div class="fill">
            <h1 class="myco">About me</h1>
            <p class="bobo">Hi, my name is Joshua Wahyu, most people know me as mycodingan. I have expertise in programming, because I want to become a web developer who has expertise in coding.</p>
        </div>
    </div>
</div>
@include('portofolio.foooter')
@endsection
