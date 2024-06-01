@extends('layouts.main')

@section('content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
          <div class="bread-inner">
            <div class="row">
              <div class="col-12">
                <h2>Contact Us</h2>
                <ul class="bread-list">
                  <li><a href="index.html">Home</a></li>
                  <li><i class="icofont-simple-right"></i></li>
                  <li class="active">Contact Us</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Breadcrumbs -->
@include('includes.contactUs')

@endsection

@section('addionalFooter')
    <!-- Google Map API Key JS -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
    <!-- Map Active JS -->
    <script src="{{asset('assets/js/map-active.js') }}" ></script>
    <!-- Gmaps JS -->
    <script src="{{asset('assets/js/gmaps.min.js') }}"></script>
@endsection