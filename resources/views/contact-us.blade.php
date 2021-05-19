@extends('layouts.master')



@section('content')
    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-3">
                    <div class="contact-info">
                        <h4>Information</h4>
                        <ul>
                            <li><i class="fa fa-phone"></i>+60 18-989-7580</li>
                            <li><i class="fa fa-envelope"></i>harizulaiman@gmail.com</li>
                        </ul>
                    </div>
                    <div class="contact-address">
                        <h4>Address</h4>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> No 9, Jalan 4, Taman Baiduri, 43800 Dengkil, Selangor
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="contact-form">
                        @if (Session::has('success'))
                            <div class="alert alert-info">{{ Session::get('success') }}</div>
                        @endif

                        <h4>Get in touch</h4>
                        <form action="{{ route('contactus') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name" name="name" value="{{ Auth::check() ? Auth::user()->name : '' }}">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email" name="email" value="{{ Auth::check() ? Auth::user()->email : '' }}">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message" name="message"></textarea>
                                    <button type="submit" class="c-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection