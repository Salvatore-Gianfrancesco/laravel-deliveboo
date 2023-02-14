@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        @include('partials.errors')

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="login-box w-100">
                    <p>{{ __('Registrazione') }}</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-4 user-box">
                            <label for="name" class="col-form-label text-md-right">{{ __('Nome *') }}</label>

                            <div class="col">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 user-box">
                            <label for="email" class=" col-form-label text-md-right">{{ __('Indirizzo E-Mail *') }}</label>

                            <div class="col">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 user-box">
                            <label for="password" class="col-form-label text-md-right">{{ __('Password *') }}</label>

                            <div class="col">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 user-box">
                            <label for="password-confirm"
                                class="col-form-label text-md-right">{{ __('Conferma Password *') }}</label>

                            <div class="col">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-4 user-box">
                            <label for="company_name"
                                class="col-form-label text-md-right">{{ __('Nome del Ristorante *') }}</label>

                            <div class="col">
                                <input id="company_name" type="text"
                                    class="form-control @error('company_name') is-invalid @enderror" name="company_name"
                                    value="{{ old('company_name') }}" required maxlength="100">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 user-box">
                            <label for="types"
                                class="col-form-label text-md-right">{{ __('Seleziona una o più tipi di cucina *') }}</label>

                            <div class="col">
                                <select multiple class="form-select" name="types[]" id="types" required>

                                    @forelse ($types as $type)
                                        <option value="{{ $type->id }}"
                                            {{ in_array($type->id, old('types', [])) ? 'selected' : '' }}>
                                            {{ $type->name }}</option>
                                    @empty
                                        <option value="" disabled>Nessun tipo registrato</option>
                                    @endforelse
                                </select>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 user-box">
                            <label for="address" class="col-form-label text-md-right">{{ __('Indirizzo *') }}</label>

                            <div class="col">
                                <input id="address" type="text"
                                    class="form-control @error('address') is-invalid @enderror" name="address"
                                    value="{{ old('address') }}" required maxlength="255">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 user-box">
                            <label for="piva" class="col-form-label text-md-right">{{ __('P-IVA *') }}</label>

                            <div class="col">
                                <input id="piva" type="text"
                                    class="form-control @error('piva') is-invalid @enderror" name="piva"
                                    value="{{ old('piva') }}" required maxlength="11" minlength="11">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn login">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    {{ __('Registrati') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
