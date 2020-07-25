@extends('layouts.masterfrontend')
@yield('title')

@section('content')

<section class="hero__section">
        <div class="hero-slider">
            @foreach($img as $imgs)
            <div class="slide-item">
                <a class="fresco" href="{{asset('img/'. $imgs->image)}}" data-fresco-group="projects">
                <img src="{{asset('img/'. $imgs->image)}}" alt="">
                </a>
            </div>
            @endforeach
         </div>
        <div class="hero-text-slider">
            @foreach($img as $imgs)
            <div class="text-item">
                <h2>{{$imgs->name}}</h2>
                <p>Photography</p>
            </div>
@endforeach
        </div>

    </section>

@endsection

@section('scripts')
