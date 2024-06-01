<!DOCTYPE html>
<html>
<head>
    <title>Confirmación de Pago</title>
</head>
@extends('layouts.app')

@section('content')
<body>
<h1>Confirmación de Pago</h1>
{{ __('Bienvenido a TicketFlex, ') . Auth::user()->name . '!' }}
@if(isset($data['entrada_seleccionada']))
    <h2>Entradas Seleccionadas:</h2>
    @foreach($data['entrada_seleccionada'] as $entrada)
        <p>{{ $entrada }}</p>
    @endforeach
@endif

@if(isset($data['articulo_seleccionado']))
    <h2>Artículos Seleccionados:</h2>
    @foreach($data['articulo_seleccionado'] as $articulo)
        <p>{{ $articulo }}</p>
    @endforeach
@endif

<p><strong>Nombre y Apellidos:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Dirección de Entrega:</strong> {{ $data['shipping_address'] }}</p>
<p><strong>Nombre del Titular de la Tarjeta:</strong> {{ $data['cardholder_name'] }}</p>
<p><strong>Número de la Tarjeta:</strong> {{ $data['card_number'] }}</p>
<p><strong>Fecha de Expiración:</strong> {{ $data['expiry_date'] }}</p>
<p><strong>CVV:</strong> {{ $data['cvv'] }}</p>
<p><strong>Dirección de Facturación:</strong> {{ $data['billing_address'] }}</p>
</body>
@endsection
</html>
