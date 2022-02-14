@extends('layouts.masterfrontend')
@yield('title')
@section('content')

    <!-- About Page -->
    <div class="gallery__page">
        <div class="gallery__warp">

            <div class="row">
                 @foreach($pro as $item)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a class="gallery__item fresco" href="{{ asset('img/'.$item->image) }}" data-fresco-group="gallery">
                        <img src="{{ asset('img/'.$item->image) }}" alt="">
                    </a>
                </div>
                   @endforeach
            </div>
            <div class="row">
                <div class="col-lg-5">
                </div>
                  <div class="col-lg-7">
            
                  </div>
            </div>
        </div>

    <!-- About Page end -->
    @endsection
@section('scripts')
