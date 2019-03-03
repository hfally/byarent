@extends('layouts.master')

@section('content')
    <main style="height: 100vh" class="d-flex justify-content-center align-items-center bg-theme-alt">
        <div class="container justify-content-center d-flex">
            <div class="card p-3" style="max-width: 420px; width: 100%">
                <div class="card-body">

                    <div class="d-flex justify-content-center text-theme-alt mb-4" style="font-size: 30px">
                        <a href="{{ route('home') }}" class="d-flex align-items-center no-underline">
                            <div>
                                <img src="{{ asset('img/icon.png') }}" width="58"/>
                            </div>
                            BYA<span class="text-theme">RENT</span>
                        </a>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <input id="email" type="email"
                                   class="form-control p-3{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email" value="{{ old('email') }}" required
                                   placeholder="Email Address">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input id="password" type="password"
                                       class="form-control p-3{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" required placeholder="Password">
                            </div>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label text-muted" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary py-3 btn-block">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <span class="form-text my-3 text-muted">
                                    Help,
                                    <a href="{{ route('password.request') }}">
                                        {{ __('I forgot my password') }}
                                    </a>
                                </span>
                            @endif

                            <span class="form-text text-muted">
                                Don't have an account? <a href="{{ route('register') }}">Register</a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection