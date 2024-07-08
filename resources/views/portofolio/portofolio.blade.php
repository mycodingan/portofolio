@extends('layout.layout ')

@section('title')
portofolio
@endsection

@section('conten')
<div class="contenn">
    <div class="judul">
        <h1>welcome to my portfolio website</h1>
        <h5>MY_Codingan</h5>
    </div>
    <div class="image">
    <img src="{{ asset('img/Logo.png') }}" alt="Logo" width="300" height="300">
    </div>
</div>

<div class="header">
    <h1 class="skil">MY SKILL</h1>
    <div class="introduction"  data-aos="fade-up">
        <div class="card">
            <i class="fa-solid fa-laptop-code marker"></i>
            <h1 class="titlee">web development</h1>
            <p>I have expertise in the field <br> of web development, because
                I am also interested in the world of IT</p>
        </div>
        <div class="card">
            <i class="fa-solid fa-pen-nib"></i>
            <h1 class="titlee"><br> UI/UX  DESIGN</h1>
            <p>I once took part in a UI/UX design competition,<br> which added to my experience</p>
        </div>
        <div class="card">
            <i class="fa-solid fa-mobile-screen-button"></i>
            <h1 class="titlee">Mobile development</h1>
            <p>I have experience in mobile development<br>
                 and I have tried React Native and Flutter</p>
        </div>
        <div class="card">
            <i class="fa-solid fa-desktop"></i>
            <h1 class="titlee">software enginering</h1>
            <p>I also have skills in this section,<br> with my frontend and backend skills I can develop further</p>
        </div>
    </div>
</div>

{{--  container  --}}
@include('portofolio.tesmyfriend')
{{--  contact  --}}
@include('portofolio.contact')
{{--  footer  --}}
@include('portofolio\foooter')
@endsection
