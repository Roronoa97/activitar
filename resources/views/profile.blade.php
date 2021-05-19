@extends('layouts.master')

@section('content')

<!-- Trainer Section Begin -->
<section class="trainer-section" style="min-height: 100vh">
  <div class="container">
    <div class="row" style="margin-top: 100px">
      <div class="col-lg-3 col-sm-6">
        <div class="trainer-item">
          <div class="ti-pic">
            @if(!empty(Auth::user()->profile->image))
            <img src="{{ asset('storage/Profil/'. Auth::user()->profile->image ) }}" alt="">
            @else
            <img src="{{ asset('template/assets/img/default-img.jpg') }}" alt="">
            @endif
            <div class="ti-links">
              <a href="https://www.instagram.com/harizulaiman/" target="_blank"><i class="fa fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/nur-harizul-aiman-mat-harith-6299b8200/" target="_blank"><i
                  class="fa fa-linkedin"></i></a>
            </div>
            <div class="trainer-text">
              {{-- {{ dd(Auth::user()->profile )}} --}}
              <h5 class="text-uppercase">{{ Auth::user()->name}}<span
                  class="text-capitalize">{{ !empty(Auth::user()->profile->job) ? ' - '. Auth::user()->profile->job : ''}}</span>
              </h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-4">
        <div class="text-white mb-5">
          <h3 class="font-weight-bold mb-4">Motivations</h3>
          <h4><i class="fa fa-quote-left"></i> {{Auth::user()->profile->motivation}} <i class="fa fa-quote-right"></i>
          </h4>
        </div>
        <a href="#" class="primary-btn" data-toggle="modal" data-target="#exampleModal">Edit Profile</a>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('profile.update', Auth::user()->profile->id )}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label>Motivations</label>
            <input type="text" class="form-control" name="motivation"
              value="{{ !empty(Auth::user()->profile->motivation) ? Auth::user()->profile->motivation : ''}}">
          </div>
          <div class="form-group">
            <label>Job</label>
            <div></div>
            <input type="text" class="form-control" name="job" value="{{ !empty(Auth::user()->profile->job) ? Auth::user()->profile->job : ''}}">
          </div>
          <div class="form-group">
            <label>Profile Image</label>
            <div></div>
            <input type="file" name="image">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Trainer Section End -->

@endsection