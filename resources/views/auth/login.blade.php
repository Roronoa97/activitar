@extends('layouts.master')


@section('content')

<section class="contact-section" style="min-height: 100vh">
    <div class="container">
        <div class="contact-form w-50 m-auto">
            <form action="{{ route('login')}}" method="POST" style="margin-top: 200px">
                @csrf
                <h4>Ready to achieve your dream now?</h4>
                <div class="row">
                    <div class="col-lg-12">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input type="text" placeholder="Email" name="email" class="@error('email') is-invalid @enderror">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input type="password" placeholder="Password" name="password" class="@error('password') is-invalid @enderror">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="submit" class="c-btn">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
    
@endsection