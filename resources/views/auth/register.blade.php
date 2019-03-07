@extends('layouts.master')

@section('content')
    <main style="height: 100vh" class="d-flex justify-content-center align-items-center bg-theme-alt">
        <div class="container justify-content-center d-flex">
            <div class="card" style="max-width: 420px; width: 100%">
                <div class="card-body">
                    <div class="p-3">
                        <div class="d-flex justify-content-center text-theme-alt mb-4" style="font-size: 30px">
                            <a href="{{ route('home') }}" class="d-flex align-items-center no-underline">
                                <div>
                                    <img src="{{ asset('img/icon.png') }}" width="58"/>
                                </div>
                                BYA<span class="text-theme">RENT</span>
                            </a>
                        </div>

                        <p class="text-center text-muted">
                            You're moments away from owning your home. Fill the form to get started!
                        </p>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-prepend input-group-text bg-transparent border-right-0{{ $errors->has('name') ? ' border-danger' : '' }} border-top-right-radius-0 border-bottom-right-radius-0">
                                        <i class="fa fa-user"></i>
                                    </span>

                                    <input id="name" type="text"
                                           class="form-control border-left-0 p-3{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" value="{{ old('name') }}" required autofocus
                                           placeholder="Name">
                                </div>


                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-prepend input-group-text bg-transparent border-right-0{{ $errors->has('email') ? ' border-danger' : '' }} border-top-right-radius-0 border-bottom-right-radius-0">
                                            <i class="fa fa-envelope"></i>
                                    </span>

                                    <input id="email" type="email"
                                           class="form-control p-3 border-left-0{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required
                                           placeholder="Email">
                                </div>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                     <span class="input-group-prepend input-group-text bg-transparent border-right-0{{ $errors->has('phone') ? ' border-danger' : '' }} border-top-right-radius-0 border-bottom-right-radius-0">
                                            <i class="fa fa-mobile"></i>
                                    </span>

                                    <input id="phone" type="tel"
                                           class="form-control p-3 border-left-0{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                           name="phone" value="{{ old('phone') }}" required
                                           placeholder="Phone Number">
                                </div>

                                @if ($errors->has('phone'))
                                    <small class="text-danger form-text" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </small>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-prepend input-group-text bg-transparent border-right-0{{ $errors->has('password') ? ' border-danger' : '' }} border-top-right-radius-0 border-bottom-right-radius-0">
                                            <i class="fa fa-lock"></i>
                                    </span>

                                    <input id="password" type="password"
                                           class="form-control p-3 border-left-0{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required placeholder="Password">

                                    <span class="input-group-append bg-transparent border-left-0 input-group-text">
                                        <button class="btn p-0 bg-transparent" data-toggle="password"
                                                title="Show password"
                                                type="button">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    </span>
                                </div>

                                @if ($errors->has('password'))
                                    <small class="form-text text-danger     " role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </small>
                                @endif
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary py-3 btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

                <div class="card-footer text-center text-muted">
                    <div class="py-2 px-3">
                        Already have an account? <a href="{{ route('login') }}">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('page-script')
    <script>
        $(function () {
            $("[data-toggle='password']").click(function () {
                $(this).parents('.form-group').find('#password').attr('type', function (index, attr) {
                    return attr === 'password' ? 'text' : 'password';
                });

                $(this).find('.fa').toggleClass('fa-eye fa-eye-slash');
            });
        })
    </script>
@endpush