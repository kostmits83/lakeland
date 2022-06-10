@extends('layouts.frontend')

@section('content')

<div class="site-login">
    <div class="banner banner--dark banner--same">
        <p class="banner__header">Reset Password</p>
        <p class="banner__info">Login for more advanced features!</p>
    </div>
    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item link link--state-1"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Reset Password</li>
        </ol>
    </nav>

    <div class="container spacing-vertical-outer-main">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="login-message">
                    <p class="login-message__text">Please fill out the following fields to reset your password and have access to more advanced search features.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 offset-md-2">
                <div class="login-form">

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <h1 class="login-form__header header-2">Reset Password Form</h1>

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

                        <div class="login-form__button">
                            <button type="submit" class="btn button--attention button buttons-row__button">Send Password Reset Link</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
