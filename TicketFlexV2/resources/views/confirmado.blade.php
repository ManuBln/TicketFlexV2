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

    @if(isset($data['entrada_seleccionada']) && is_array($data['entrada_seleccionada']) && count($data['entrada_seleccionada']) > 0)
        <h2>Entradas Seleccionadas:</h2>
        @foreach($data['entrada_seleccionada'] as $entrada)
            @if(is_array($entrada))
                <p>{{ $entrada['nombre'] ?? 'Nombre no disponible' }} - Precio: {{ $entrada['precio'] ?? 'Precio no disponible' }}$</p>
            @else
                <p>{{ $entrada }}</p>
            @endif
        @endforeach
    @else
        <p>No hay entradas seleccionadas.</p>
    @endif

    @if(isset($data['articulo_seleccionado']) && is_array($data['articulo_seleccionado']) && count($data['articulo_seleccionado']) > 0)
        <h2>Artículos Seleccionados:</h2>
        @foreach($data['articulo_seleccionado'] as $articulo)
            @if(is_array($articulo))
                <p>{{ $articulo['nombre'] ?? 'Nombre no disponible' }} - Precio: {{ $articulo['precio'] ?? 'Precio no disponible' }}$</p>
            @else
                <p>{{ $articulo }}</p>
            @endif
        @endforeach
    @else
        <p>No hay artículos seleccionados.</p>
    @endif

    <p><strong>Nombre y Apellidos:</strong> {{ $data['name'] ?? 'Nombre no disponible' }}</p>
    <p><strong>Email:</strong> {{ $data['email'] ?? 'Email no disponible' }}</p>
    <p><strong>Dirección de Entrega:</strong> {{ $data['shipping_address'] ?? 'Dirección no disponible' }}</p>
    <p><strong>Nombre del Titular de la Tarjeta:</strong> {{ $data['cardholder_name'] ?? 'Nombre no disponible' }}</p>
    <p><strong>Número de la Tarjeta:</strong> {{ $data['card_number'] ?? 'Número no disponible' }}</p>
    <p><strong>Fecha de Expiración:</strong> {{ $data['expiry_date'] ?? 'Fecha no disponible' }}</p>
    <p><strong>CVV:</strong> {{ $data['cvv'] ?? 'CVV no disponible' }}</p>
    <p><strong>Dirección de Facturación:</strong> {{ $data['billing_address'] ?? 'Dirección no disponible' }}</p>
    </body>
@endsection
</html>