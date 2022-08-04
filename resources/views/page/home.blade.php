@extends('layouts.base')
@section('title', 'Home - Hip Hop Hooray')
@section('css')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection
@section('content')

@include('partials.navbar')

<div class="header">
    <h1 class="header__title" data-aos="fade-down">Hip Hop Hooray</h1>
</div>

<div class="container-fluid call-action">
    <div class="row">
        <div class="col-md-12">
            <p class="call-action__title" data-aos="fade-down">MyHipHopHooray@gmail.com</p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row info">
        <div class="col-md-6 info__info">
            <p class="info__info--text">Imparting a love of dance since 2001</p>
            <p class="info__info--textaera">Whether your child is looking to pick up a few moves, get some exercise, meet new friends, build self-esteem  or just have a lot of fun, we’ve got it all here for you! All of this is wrapped in a package that promises to challenge the children while still allowing complete beginners to get a solid and fun introduction to dance.</p>
            <p class="info__info--text">Come join us!</p>
            <p class="info__info--text">Richelle Trias-Fraticelli</p>
            <p class="info__info--text">Director</p>
        </div>
        <div class="col-md-6 info__image">
            <img class="img-fluid img-thumbnail" src="{{ asset('img/bg-info.jpg') }}" alt="">
        </div>
    </div>
</div>

<div class="container-fluid call-action-gallery">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center align-items-center">
                <a class="call-action-gallery__title" href="#" data-aos="fade-down">See Our Gallery</a>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')

@endsection

@section('js')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection
