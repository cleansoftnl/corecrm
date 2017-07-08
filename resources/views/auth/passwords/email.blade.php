@extends('layouts.dashboard')
@section('body')
    <body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group mb-0">
                    <div class="card p-4">
                        <div class="card-block">
                            <h1>Reset password</h1>
                            <p class="text-muted">Recover your password</p>
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if ($errors->has('email'))
                                <div class="alert alert-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{ route('password.email') }}">
                                {{ csrf_field() }}
                                <div class="input-group mb-3 {{ $errors->has('email') ? ' alert alert-danger' : '' }}">
                                  <span class="input-group-addon"><i class="icon-user"></i>
                                  </span>
                                    <input id="email" name="email" type="email" value="{{ old('email') }}"
                                           class="form-control {{ $errors->has('email') ? 'alert alert-danger' : '' }}"
                                           placeholder="Email" required autofocus>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary px-4">Send reset link</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
