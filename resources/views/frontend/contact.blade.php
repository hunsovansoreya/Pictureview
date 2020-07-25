@extends('layouts.masterfrontend')
@yield('title')
@section('content')
    <!-- Contact Page -->
    <section class="contact__page">
        <div class="contact__warp">
            <div class="row">
                <div class="col-md-6">
                    <h2>Contact Me</h2>
                    <div class="contact__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact__text">
                        <p>Phone: 015380328</p>
                        <p>Email: soreyahun.it@gmail.com</p>
                        <p>Address: Phnom Penh</p>
                    </div>
                </div>
            </div>
            <form class="contact__form">
                <input type="text" placeholder="Name">
                <input type="text" placeholder="Email">
                <input type="text" placeholder="Phone">
                <textarea placeholder="Message"></textarea>
                <button class="site-btn">Send Message</button>
            </form>
        </div>
    </section>
    <!-- Contact Page end -->

@endsection
