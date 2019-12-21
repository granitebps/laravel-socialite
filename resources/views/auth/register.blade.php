@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-4">
                                <a href="{{url('/auth/facebook')}}" class="btn btn-dark mb-1">
                                    <i class="fab fa-facebook"></i> Sign Up With Facebook
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{url('/auth/github')}}" class="btn btn-dark mb-1">
                                    <i class="fab fa-github"></i> Sign Up With Github
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{url('/auth/google')}}" class="btn btn-dark mb-1">
                                    <i class="fab fa-google"></i> Sign Up With Google
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{url('/auth/twitter')}}" class="btn btn-dark mb-1">
                                    <i class="fab fa-twitter"></i> Sign Up With Twitter
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{url('/auth/linkedin')}}" class="btn btn-dark mb-1">
                                    <i class="fab fa-linkedin"></i> Sign Up With Linkedin
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{url('/auth/line')}}" class="btn btn-dark mb-1">
                                    <i class="fab fa-line"></i> Sign Up With Line
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{url('/auth/gitlab')}}" class="btn btn-dark mb-1">
                                    <i class="fab fa-gitlab"></i> Sign Up With Gitlab
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{url('/auth/bitbucket')}}" class="btn btn-dark mb-1">
                                    <i class="fab fa-bitbucket"></i> Sign Up With Bitbucket
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{url('/auth/digitalocean')}}" class="btn btn-dark mb-1">
                                    <i class="fab fa-digital-ocean"></i> Sign Up With DigitalOcean
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{url('/auth/discord')}}" class="btn btn-dark mb-1">
                                    <i class="fab fa-discord"></i> Sign Up With Discord
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{url('/auth/dropbox')}}" class="btn btn-dark mb-1">
                                    <i class="fab fa-dropbox"></i> Sign Up With Dropbox
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
