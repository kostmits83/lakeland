@extends('layouts.frontend')

@section('content')

<div class="site-login">
    <div class="banner banner--dark banner--same">
        <p class="banner__header">Confirm Email</p>
        <p class="banner__info">Confirm your email and login for more advanced features!</p>
    </div>
    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item link link--state-1"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Confirm Email</li>
        </ol>
    </nav>

    <div class="container spacing-vertical-outer-main">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="login-message">
                    <p class="login-message__text">Please fill out the following field to confirm your password.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 offset-md-2">
                <div class="login-form">

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <h1 class="login-form__header header-2">Confirm Password</h1>
                        <p>Please confirm your password before continuing.</p>
                        
                        <div class="form-group row">
                            <label for="email" class="col-sm-12 col-form-label">Email</label>
                            <div class="col-sm-12">

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <p>If you forgot your password you can <a class="inline-block link link--state-1 " href="{{ route('password.request') }}">reset it here</a>.</p>
                            <div class="login-form__button">
                                <button type="submit" class="btn button--attention button buttons-row__button">Confirm Password</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
