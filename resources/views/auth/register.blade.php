@extends('layouts.dashboard')
@section('body')
    <body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-block p-4">
                        <h1>Register</h1>
                        <p class="text-muted">Create your account</p>
                        @if ($errors->has('name'))
                            <div class="alert alert-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </div>
                        @endif
                        @if ($errors->has('email'))
                            <div class="alert alert-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                        @endif
                        @if ($errors->has('password'))
                            <div class="alert alert-danger">
                                <strong>{{ $errors->first('password') }}</strong>
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="input-group mb-3">
                              <span class="input-group-addon"><i class="icon-user"></i>
                              </span>
                                <input id="name" type="text"
                                       class="form-control {{ $errors->has('name') ? 'alert alert-danger' : '' }}"
                                       name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-addon">@</span>
                                <input id="email" type="email"
                                       class="form-control {{ $errors->has('email') ? 'alert alert-danger' : '' }}"
                                       name="email" value="{{ old('email') }}" placeholder="Email" required>
                            </div>

                            <div class="input-group mb-3">
                              <span class="input-group-addon"><i class="icon-lock"></i>
                              </span>
                                <input id="password" type="password" class="form-control" name="password"
                                       placeholder="Password" required>
                            </div>

                            <div class="input-group mb-4">
                              <span class="input-group-addon"><i class="icon-lock"></i>
                              </span>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" placeholder="Repeat password" required>
                            </div>

                            <button type="submit" class="btn btn-block btn-success">Create Account</button>
                        </form>
                    </div>
                    <div class="card-footer p-4">
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-block btn-facebook" type="button">
                                    <span>facebook</span>
                                </button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-block btn-twitter" type="button">
                                    <span>twitter</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
