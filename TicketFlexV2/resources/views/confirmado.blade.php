<!DOCTYPE html>
<html>
<head>
    <title>Confirmación de Pago</title>
    <style>
        .confirmacion {
            text-align: center;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 18px;
            line-height: 1.6;
            max-width: 600px;
            width: 300%;
            color: rgb(120, 120, 120);
        }
        .h1confirmacion {
            margin-bottom: 20px;
            font-size: 30px;
            color:black;
        }

        .button_slide {
            color: #ffffff;
            background-color: #000000;
            border: 2px solid #ffffff;
            padding: 18px 36px;
            display: inline-block;
            font-family: "Lucida Console", Monaco, monospace;
            font-size: 14px;
            letter-spacing: 1px;
            cursor: pointer;
            box-shadow: inset 0 0 0 0 #ffffff;
            transition: ease-out 0.4s;
        }

        .slide_right:hover {
            box-shadow: inset 400px 0 0 0 #e620d5;
            color: black;
            border: 2px solid #e620d5;
        }

        .contenedorConfirmacion {
            margin-top: 50px;
            display: flex;
            align-items: center;
            max-width: 800px;
            width: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-left: 565px;
            gap: 100px;
        }
        .imagenCompra {
            text-align: center;
        }
        .imagenCompra img {
            max-width: 150%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
@extends('layouts.app')

@section('content')
    <body>
    <div class="contenedorConfirmacion">
        <div class="imagenCompra">
            <img src="https://static.vecteezy.com/system/resources/previews/004/786/659/original/illustration-of-a-young-guy-with-purchases-positive-flat-illustration-in-cartoon-style-discounts-and-sales-shopaholic-shopping-a-young-man-talking-on-the-phone-shopping-vector.jpg">
        </div>
        <div class="confirmacion">
            <p class="h1confirmacion"><b>¡Gracias por tu compra, {{Auth::user()->name}}!</b></p>

            <p>Tu pedido ha sido confirmado y está siendo procesado. Pronto recibirás una notificación con la información de envío en tu correo electrónico.</p>

            <p>Si tienes alguna pregunta, no dudes en contactarnos.</p>

            <button class="button_slide slide_right" type="button" onclick="window.location.href='/home'">Volver a Home</button>

        </div>
    </div>
    </body>
@endsection
</html>
</html>
