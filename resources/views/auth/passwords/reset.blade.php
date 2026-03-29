@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #c5c9b8;
        font-family: 'Nunito', sans-serif;
    }
    .navbar {
        display: none;
    }
    .login-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }
    .auth-card {
        display: flex;
        width: 100%;
        max-width: 1000px;
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .auth-left {
        flex: 1;
        background: linear-gradient(135deg, #4a3018 0%, #634020 100%);
        padding: 60px;
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .auth-right {
        flex: 1;
        padding: 40px 60px;
        background: #e2e2e2;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .auth-left h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-transform: uppercase;
        border-bottom: 2px solid rgba(255,255,255,0.3);
        padding-bottom: 10px;
    }
    .auth-left h2 {
        font-size: 1.2rem;
        color: #d4a373;
        margin-bottom: 20px;
    }
    .auth-left p {
        font-size: 0.95rem;
        line-height: 1.6;
        color: rgba(255,255,255,0.8);
        margin-bottom: 20px;
    }
    .quote {
        font-style: italic;
        color: #d4a373;
        margin-top: 20px;
    }
    .go-back {
        position: absolute;
        top: 20px;
        right: 20px;
        background: #3e4c2c;
        color: #fff;
        padding: 5px 15px;
        border-radius: 20px;
        text-decoration: none;
        font-size: 0.8rem;
        display: flex;
        align-items: center;
    }
    .go-back:hover {
        color: #fff;
        background: #2d3820;
    }
    .logo-container {
        margin-bottom: 30px;
        text-align: center;
    }
    .logo-container img {
        max-width: 80px;
    }
    .login-title {
        font-size: 1.8rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 30px;
    }
    .form-group {
        margin-bottom: 15px;
        width: 100%;
    }
    .form-control {
        background: #cbd5e0 !important;
        border: 2px solid #b7a692;
        border-radius: 8px;
        padding: 12px 15px;
        color: #333;
    }
    .form-control:focus {
        box-shadow: none;
        border-color: #8b6e4e;
    }
    .btn-login {
        background: #63300a;
        color: #fff;
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        font-weight: 600;
        text-transform: uppercase;
        border: none;
        margin-top: 10px;
    }
    .btn-login:hover {
        background: #4a2408;
        color: #fff;
    }
    .footer-text {
        margin-top: auto;
        font-size: 0.75rem;
        color: #63300a;
        padding-top: 40px;
    }
    @media (max-width: 768px) {
        .auth-card {
            flex-direction: column;
        }
        .auth-left {
            padding: 40px;
        }
        .auth-right {
            padding: 40px;
        }
    }
</style>

<div class="login-container">
    <div class="auth-card">
        <div class="auth-left">
            <h1>ZAMA CONTRACTORS</h1>
            <h2>Quality & Reliability in Every Project</h2>
            <p>From large-scale industrial construction to specialized renovations, we take you beyond the typical service paths.</p>
            <p>Experience the professional, authentic spirit of Zama Contractors with experts in high-quality engineering and construction. Witness excellence in motion.</p>
            <p class="quote">"Building the future, restoring the past."</p>
        </div>
        <div class="auth-right">
            <a href="{{ route('login') }}" class="go-back">
                <span class="me-1">←</span> BACK TO LOGIN
            </a>
            
            <div class="logo-container">
                <img src="{{ asset('logo.png') }}" alt="Logo">
                <div style="font-size: 0.8rem; color: #63300a; font-weight: bold; margin-top: 5px;">ZAMA CONTRACTORS</div>
            </div>

            <h3 class="login-title">Reset Password</h3>

            <form method="POST" action="{{ route('password.update') }}" style="width: 100%;">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>

                <button type="submit" class="btn btn-login">
                    {{ __('Reset Password') }}
                </button>
            </form>

            <div class="footer-text">
                © {{ date('Y') }} Zama Contractors. All Rights Reserved.
            </div>
        </div>
    </div>
</div>
@endsection
