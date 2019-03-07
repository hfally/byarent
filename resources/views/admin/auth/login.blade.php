@extends('layouts.master')

@section('title', 'Admin Login')

@section('content')
    <main style="height: 100vh" class="d-flex justify-content-center align-items-center bg-theme">
        <div class="container justify-content-center d-flex">
            <div class="card p-3" style="max-width: 420px; width: 100%">
                <div class="card-body">

                    <div class="mb-4 text-center text-muted" style="font-size: 20px">
                        <div>
                            <img src="{{ asset('img/icon.png') }}" width="58"/>
                        </div>

                        <span class="font-weight-bold">
                            ADMINISTRATOR
                        </span>

                        <small class="form-text">
                            Please leave if you are not an authorized user!
                        </small>
                    </div>

                    <form method="POST" action="{{ route('admin.login') }}">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection