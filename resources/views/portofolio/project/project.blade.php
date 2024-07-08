@extends('layout.layout')
@section('title')
portofolio
@endsection

@section('conten')
<div class="project">
    <h1>my project</h1>
    <div class="project-c">
        <div class="grid">
            <figure class="effect-marley"  data-aos="fade-right">
                <img src="{{ asset('img/API.png') }}" alt="img11" width="500"/>
                <figcaption>
                    <h2>project react <span>Api</span></h2>
                    <p>This is my React project when connecting Api From Vodio Web to my React code</p>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <figure class="effect-marley" data-aos="fade-left">
                <img src="{{ asset('img/data.png') }}" alt="img11" width="500"/>
                <figcaption>
                    <h2>project react <span>    </span></h2>
                    <p>This is my React project to organize finances in the dormitory so that children can manage their finances</p>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <figure class="effect-marley" data-aos="fade-right">
                <img src="{{ asset('img/clock.png') }}" alt="img11" width="500"/>
                <figcaption>
                    <h2>project clock <span>Digital</span></h2>
                    <p>This is my HTML project when I enter HTML, CSS and JS material. I made a digital clock.</p>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <figure class="effect-marley"data-aos="fade-left">
                <img src="{{ asset('img/invrntory.png') }}" alt="img11" width="500"/>
                <figcaption>
                    <h2>project react <span>Api</span></h2>
                    <p>This is my Laravel inventory project when I was learning Laravel</p>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <figure class="effect-marley"  data-aos="fade-right">
                <img src="{{ asset('img/crus.png') }}" alt="img11" width="500"/>
                <figcaption>
                    <h2>Laravel Crud Project</h2>
                    <p>I made Laravel crud when I first learned Laravel</p>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <figure class="effect-marley"data-aos="fade-left">
                <img src="{{ asset('img/todo.png') }}" alt="img11" width="500"/>
                <figcaption>
                    <h2>project react <span>Todo</span></h2>
                    <p>This is my React project when I was asked to make a todo list</p>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
        </div>
    </div>
</div>
@include('portofolio.foooter')
@endsection
