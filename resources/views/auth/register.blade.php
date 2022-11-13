<style>

.btn.btn-primary{
width: 100%;
background: #12324;
border: none;
padding: 12px;
margin: 16px 0;
font-size: 16px;
border-radius: 0.375rem;
display: inline-flex;
align-items: center;
justify-content: center;
font-family: "Poppins", sans-serif;
font-weight: 700;
text-align: center;
text-decoration: none;
color: #fff;
backface-visibility: hidden

}



</style>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-3 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="password" name="correo" id="correo" placeholder="Ingrese su Contraseña" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                            <input class="form-control" type="password" name="correo" id="correo" placeholder="Confirme su Contraseña" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

