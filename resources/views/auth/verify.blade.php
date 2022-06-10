@extends('layouts.frontend')

@section('content')

<div class="site-login">
    <div class="banner banner--dark banner--same">
        <p class="banner__header">Verify Email</p>
        <p class="banner__info">Verify and login for more advanced features!</p>
    </div>
    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item link link--state-1"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Verify Email</li>
        </ol>
    </nav>

    <div class="container spacing-vertical-outer-main">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="login-message">
                    <p class="login-message__text">Please fill out the following field to verify your email.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 offset-md-2">
                <div class="login-form">

                    <form method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <h1 class="login-form__header header-2">Verify Email Form</h1>

                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
                        <p>Before proceeding, please check your email for a verification link. If you did not receive the email, <button type="submit" class="btn btn-link p-0 m-0 align-baseline">click here to request another</button></p>

                        <div class="form-group row">
                            <label for="email" class="col-sm-12 col-form-label">Email</label>
                            <div class="col-sm-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
