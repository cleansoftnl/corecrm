@extends('layouts.dashboard')
@section('body')
<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group mb-0">
                    <div class="card p-4">
                        <div class="card-block">
                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                              {{ csrf_field() }}
                              @if ($errors->has('email'))
                                  <div class="alert alert-danger">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </div>
                              @endif
                              <div class="input-group mb-3">
                                  <span class="input-group-addon"><i class="icon-user"></i>
                                  </span>
                                  <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'alert alert-danger' : '' }}" placeholder="Email" required autofocus>
                              </div>
                              <div class="input-group mb-4">
                                  <span class="input-group-addon"><i class="icon-lock"></i>
                                  </span>
                                  <input id="password" name="password" type="password" class="form-control {{ $errors->has('password') ? 'alert alert-danger' : '' }}" placeholder="Password">
                              </div>
                              <div class="row">
                                  <div class="col-6">
                                      <button type="submit" class="btn btn-primary px-4">Login</button>
                                  </div>
                                  <div class="col-6 text-right">
                                      <a href="{{ url('/password/reset') }}" class="btn btn-link px-0">Forgot password?</a>
                                  </div>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember"> Remember Me
                                  </label>
                              </div>
                          </form>
                        </div>
                    </div>
                    <div class="card card-inverse card-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-block text-center">
                            <div>
                                <h2>Sign up</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="{{ url('/register') }}" class="btn btn-primary active mt-3">Register now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
