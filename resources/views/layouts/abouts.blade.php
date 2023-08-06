@extends('templates.base')
@section('indication')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">À propos de nous</h1>
            <a href="" class="h5 text-white">Accueil</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">À propos de nous</a>
        </div>
    </div>
</div>
@endsection
@section('content')
    <!-- About Start -->
        <x-about/>
    <!-- About End -->


    <!-- Team Start -->
    <x-caroussel-team/>
    <!-- Team End -->

@endsection
