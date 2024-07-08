@extends('layout.layout')
@section('title')
    joshua
@endsection
@section('conten')
   <div class="certifica">
    <h1 class="jcerti">certificate</h1>
    <div class="image-container">
    <img src="{{ asset('certificate/Bootcam .jpg') }}" alt="" class="cece">
    <img src="{{ asset('certificate/Lomba ui ux.jpg') }}" alt="" class="cece">
    <img src="{{ asset('certificate/webinar laravel.jpeg') }}" alt="" class="cece">
</div>
   </div>
   @include('portofolio.foooter')
@endsection
