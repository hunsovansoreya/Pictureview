@extends('layouts.masterfrontend')
@yield('title')
@section('content')
    <!-- About Page -->
    <section class="about__page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about__text">
                        <h3 class="about__title">About Me</h3>
                        <div class="about__meta">
                            <img src="images/icon/avatar-01.jpg" alt="">
                            <div class="about__meta__info">
                                <h5>Soreya Hun</h5>
                                <p>Web Developer</p>
                            </div>
                        </div>
                        <p>Hello World</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="experience__text">
                        <h3 class="about__title">Experience</h3>

                        <div class="experience__item">
                            <p>Hello Word</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="skills__text">
                        <h3 class="about__title">Skills</h3>
                        <div class="single-progress-item">
                            <h6>Web Development</h6>
                            <div class="progress-bar-style" data-progress="50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Page end -->
@endsection
