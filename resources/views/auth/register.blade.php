@extends('layouts.app')

@section('content')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ __('Create Account') }}</h3></div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="small mb-1">{{ __('First Name') }}</label>
                                                    <input id="name" type="text" class="form-control py-4 @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="Enter First Name">
                                                    @error('first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="small mb-1">{{ __('Last Name') }}</label>
                                                    <input id="name" type="text" class="form-control py-4 @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="Enter Last Name" />

                                                    @error('last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="small mb-1">{{ __('E-Mail') }}</label>
                                            <input id="email" type="email" class="form-control py-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email address" />

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password" class="small mb-1">{{ __('Password') }}</label>
                                                    <input id="password" type="password" class="form-control py-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password-confirm" class="small mb-1">{{ __('Confirm Password') }}</label>
                                                    <input id="password-confirm" type="password" class="form-control py-4 @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">

                                                    @error('password-confirm')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">{{ __('Register') }}</button></div>
                                        {{--                                        <div class="form-group mt-4 mb-0">--}}
                                        {{--                                                <button type="submit" class="btn btn-primary">--}}
                                        {{--                                                    {{ __('Register') }}--}}
                                        {{--                                                </button>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="{{ route('login') }}">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
