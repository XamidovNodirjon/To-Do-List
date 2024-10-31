@extends('layouts.app')

@section('content')
    <style>
        body {
            background: linear-gradient(135deg, #9facb9, #d1d0e8);
            color: #333;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: -50px; /* Moves the card higher on the page */
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0px 20px 20px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }
        .card-header {
            background: #0984e3;
            color: #fff;
            font-weight: 500;
            text-align: center;
            padding: 1.2rem;
            font-size: 1.25rem;
        }
        .form-control {
            border-radius: 20px;
            padding: 0.75rem;
        }
        .form-control:focus {
            box-shadow: 0 0 5px rgba(9, 132, 227, 0.5);
            border-color: #0984e3;
        }
        .btn-primary {
            background: #6c5ce7;
            border: none;
            border-radius: 20px;
            padding: 0.5rem 1.5rem;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background: #341f97;
        }
        .invalid-feedback {
            font-size: 0.875rem;
            margin-top: 5px;
        }
    </style>

    <div class="container d-flex align-items-center min-vh-100">
        <div class="row justify-content-center w-100">
            <div class="col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection