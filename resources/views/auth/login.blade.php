@extends('layouts.app')

@section('content')

<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Login Form</h1>
                <div>
                    <input class="form-control @error('email') is-invalid @enderror" placeholder="Email" type="email" name="email" value="{{ old('email') }}" required="" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div>
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required="" />
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="checkbox p-0">
                      <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label class="text-muted" for="checkbox1">Remember password</label>
                    </div>
                <div>
                    <button class="btn btn-primary btn-block mt-2" type="submit">{{ __('Masuk') }}</button>
                    <a class="reset_pass" href="#">Lost your password?</a>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <p class="change_link">New to site?
                        <a href="{{ route('register') }}" class="to_register"> Create Account </a>
                    </p>

                    <div class="clearfix"></div>
                    <br />

                    <div>
                        <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                        <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>

@endsection