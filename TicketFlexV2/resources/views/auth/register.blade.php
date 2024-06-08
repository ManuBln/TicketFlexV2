@extends('layouts.app')

@section('content')
<div class="container fondo-negro">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="tarjeta">
                <div class="tarjeta-cabecera">{{ __('Registrarse') }}</div>

                <div class="tarjeta-cuerpo">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="formulario-control @error('name') es-invalido @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="retroalimentacion-invalida" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="formulario-control @error('email') es-invalido @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="retroalimentacion-invalida" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="formulario-control @error('password') es-invalido @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="retroalimentacion-invalida" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="formulario-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="button_slide slide_right" type="submit">Registrarse</button>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    
h1 {
    font-family: 'ticketflex', sans-serif;
    font-size: 7rem;
    text-align: center;
    color: #ffffff;
    margin-bottom: 20px;
}
    .fondo-negro {
        background-color: #000;
        color: #FFF;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: smaller;
        font-weight: bold;
    }

    .tarjeta {
        border: 1px solid #f7b4fffc;
        border-radius: 0px;
        background: linear-gradient(to bottom, #bd6ff431, #000000);
    }

    .tarjeta-cabecera {
        background: linear-gradient(to bottom, #f7b4fffc, #78479b);
        color: #FFF;
        font-size: 1.5rem;
        padding: 10px;
    }

    .tarjeta-cuerpo {
        padding: 20px;
    }

    .formulario-control {
        border: 1px solid #f7b4fffc;
        border-radius: 0px;
        background-color: #000000;
        color: #FFF;
    }

    .form-check-label, .retroalimentacion-invalida, label {
        color: #FFF;
    }

    .retroalimentacion-invalida strong {
        color: #FF6A6A;
    }

    .btn-primary {
        background-color: #f7b4fffc;
        border-color: #f7b4fffc;
    }

    .btn-primary:hover {
        background-color: #f7b4fffc;
        border-color: #f7b4fffc;
    }

    .btn-link {
        color: #f7b4fffc;
    }

    .btn-link:hover {
        color: #f7b4fffc;
    }
    .button_slide {
    color: #ffffff;
    background-color: #000000;
    border: 2px solid #ffffff;
    padding: 18px 36px;
    display: inline-block;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: bold;
    font-size: 14px;
    letter-spacing: 1px;
    cursor: pointer;
    box-shadow: inset 0 0 0 0 #ffffff;
    transition: ease-out 0.4s;
    }

    .slide_right:hover {
    box-shadow: inset 400px 0 0 0 #f7b4fffc;
    color: black;
    border: 2px solid #f7b4fffc;
    }
</style>
@endsection