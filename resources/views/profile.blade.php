@extends('layouts.master')

@section('content')
    
<!-- Trainer Section Begin -->
<section class="trainer-section" style="min-height: 100vh">
    <div class="container">
        <div class="row" style="margin-top: 100px">
            <div class="col-lg-3 col-sm-6">
                <div class="trainer-item">
                    <div class="ti-pic">
                        <img src="{{ asset('template/assets/img/me.jpg') }}" alt="" style="transform: scale(1.7);">
                        <div class="ti-links">
                            <a href="https://www.instagram.com/harizulaiman/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/nur-harizul-aiman-mat-harith-6299b8200/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="trainer-text">
                            <h5>Harizul Aiman <span>- Web Devoloper </span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-4">
                <div class="text-white mb-5">
                    <h3 class="font-weight-bold mb-4">Motivations</h3>
                    <h4><i class="fa fa-quote-left"></i> Keep looking forward no matter how hard it is <i class="fa fa-quote-right"></i></h4>
                </div>
                <a href="#" class="primary-btn">Edit Profile</a>
            </div>
        </div>
    </div>
</section>
<!-- Trainer Section End -->

@endsection