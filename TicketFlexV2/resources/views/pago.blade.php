@extends('layouts.app')

@section('content')
    <div class="container fondo-negro">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="tarjeta">
                    <div class="tarjeta-cabecera">{{ __('Pago') }}</div>

                    <div class="tarjeta-cuerpo">
                        @if(!empty($cestaEvento))
                            <h3>Entradas</h3>
                            @foreach($cestaEvento as $evento)
                                @if(is_array($evento))
                                    <p>{{ $evento['nombre'] ?? 'Nombre no disponible' }} -
                                        Precio: {{ $evento['precio'] ?? 'Precio no disponible' }}$</p>
                                @else
                                    <p>{{ $evento }}</p>
                                @endif
                            @endforeach
                        @endif

                        @if(!empty($cestaArticulo))
                            <h3>Artículos</h3>
                            @foreach($cestaArticulo as $articulo)
                                @if(is_array($articulo))
                                    <p>{{ $articulo['nombre'] ?? 'Nombre no disponible' }} -
                                        Precio: {{ $articulo['precio'] ?? 'Precio no disponible' }}$</p>
                                @else
                                    <p>{{ $articulo }}</p>
                                @endif
                            @endforeach
                        @endif
                        <form action="{{ route('procesar-pago') }}" method="POST">
                            @csrf
                            <!-- Nombre y Apellidos -->
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Nombre y
                                    apellidos:</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="formulario-control @error('name') es-invalido @enderror" name="name"
                                           required>

                                    @error('name')
                                    <span class="retroalimentacion-invalida" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Dirección de correo electrónico -->
                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Correo electronico:') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="formulario-control @error('email') es-invalido @enderror" name="email"
                                           required>

                                    @error('email')
                                    <span class="retroalimentacion-invalida" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Dirección de Entrega -->
                            <div class="row mb-3">
                                <label for="shipping_address"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Direccion de Entrega:') }}</label>

                                <div class="col-md-6">
                                    <input id="shipping_address" type="text"
                                           class="formulario-control @error('shipping_address') es-invalido @enderror"
                                           name="shipping_address" required>

                                    @error('shipping_address')
                                    <span class="retroalimentacion-invalida" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Nombre del Titular de la Tarjeta -->
                            <div class="row mb-3">
                                <label for="cardholder_name"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Titular de la Tarjeta:') }}</label>

                                <div class="col-md-6">
                                    <input id="cardholder_name" type="text"
                                           class="formulario-control @error('cardholder_name') es-invalido @enderror"
                                           name="cardholder_name" required>

                                    @error('cardholder_name')
                                    <span class="retroalimentacion-invalida" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Número de la Tarjeta -->
                            <div class="row mb-3">
                                <label for="card_number"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Numero de la Tarjeta:') }}</label>

                                <div class="col-md-6">
                                    <input id="card_number" type="text"
                                           class="formulario-control @error('card_number') es-invalido @enderror"
                                           name="card_number" required>

                                    @error('card_number')
                                    <span class="retroalimentacion-invalida" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Fecha de Expiración y CVV -->
                            <div class="row mb-3">
                                <label for="expiry_date"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Fecha de Expiración:') }}</label>
                                <div class="col-md-6">
                                    <input id="expiry_date" type="text"
                                           class="formulario-control @error('expiry_date') es-invalido @enderror"
                                           name="expiry_date" placeholder="MM/AA" required>

                                    @error('expiry_date')
                                    <span class="retroalimentacion-invalida" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="cvv" class="col-md-4 col-form-label text-md-end">{{ __('CVV:') }}</label>
                                <div class="col-md-6">
                                    <input id="cvv" type="password"
                                           class="formulario-control @error('cvv') es-invalido @enderror" name="cvv"
                                           required>

                                    @error('cvv')
                                        <span class="retroalimentacion-invalida" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <!-- Dirección de Facturación -->
                            <div class="row mb-3">
                                <label for="billing_address"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Dirección de Facturación:') }}</label>

                                <div class="col-md-6">
                                    <input id="billing_address" type="text"
                                           class="formulario-control @error('billing_address') es-invalido @enderror"
                                           name="billing_address" required>

                                    @error('billing_address')
                                    <span class="retroalimentacion-invalida" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Botón de Envío -->
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button class="button_slide slide_right" type="submit">Pagar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .fondo-negro {
            color: #FFF;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
            font-size: 20px;
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

        .contraseña-olvidada {
            color: #f7b4fffc;
            font-weight: 10;
        }
    </style>
@endsection
