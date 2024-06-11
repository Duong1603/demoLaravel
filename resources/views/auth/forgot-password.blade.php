@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Forgot Password') }}</div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }} " id="forgotPasswordForm">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('Email Address') }}</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>

                    <div class="mt-3">
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
