@extends('templates.base')
@section('indication')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Services</h1>
            <a href="{{route('accueil')}}" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="{{route('services')}}" class="h5 text-white">Services</a>
        </div>
    </div>
</div>
@endsection
@section('content')
    <!-- Service Start -->
        <x-services/>
    <!-- Service End -->


    <!-- Testimonial Start -->
        <x-testimonials/>
    <!-- Testimonial End -->
@endsection
