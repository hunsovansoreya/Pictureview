@extends('layouts.appaccount')

@section('content')
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="">
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                        @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <a href="/email">Forget your password?</a>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Log In</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't have account?
                                    <a href="/register">Register</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('scripts')
@endsection
