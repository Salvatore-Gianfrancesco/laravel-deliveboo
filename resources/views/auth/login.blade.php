@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="login-box">
                    <p>Login</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4  user-box">
                            <label for="email"
                                class=" col-form-label text-md-right">{{ __('Indirizzo E-Mail') }}</label>

                            <div class="col">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4  user-box">
                            <label for="password"
                                class=" col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 ">
                            <div class="col-md-6 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ricordami') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn login">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    {{ __('Accedi') }}
                                </button>

                                <div class="button-text">
                                    @if (Route::has('password.request'))
                                        <a class="link" href="{{ route('password.request') }}">
                                            {{ __('Password dimenticata?') }}
                                        </a>
                                    @endif
    
                                    <p>Non hai un account? <a href="" class="link d-inline">Registrati!</a></p>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
