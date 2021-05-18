@extends('layouts.master')


@section('content')
<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-item set-bg" data-setbg="{{ asset('template/assets/img/hero-slider/hero-1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-text">
                            @auth
                            <h2>Welcome To Activitar</h2>
                            <h1>{{ Auth::user()->name }}</h1>
                            @endauth
                            @guest
                            <h2>Join Us Now</h2>
                            <h1>FITNESS & SPORT</h1>
                            <a href="{{ route('login') }}" class="primary-btn">Login</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-item set-bg" data-setbg="{{ asset('template/assets/img/hero-slider/hero-2.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-text">
                            <h2>Achieve Your Ideal Body Now</h2>
                            <h1>Muscle & Strength</h1>
                            {{-- <a href="#" class="primary-btn">Read More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-item set-bg" data-setbg="{{ asset('template/assets/img/hero-slider/hero-3.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-text">
                            <h2>Boost Your Energer </h2>
                            <h1>PERFORMANCE & ATHLETIC</h1>
                            {{-- <a href="#" class="primary-btn">Read More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero End -->
@endsection