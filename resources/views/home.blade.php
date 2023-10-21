@extends('layouts.app')

@section('content')
<title>Inicio - UTVT</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/6832f025eb.js" crossorigin="anonymous"></script>
<link rel="icon" href="{{ asset('assets/img/cuervo.png') }}">
<link rel="stylesheet" href="{{asset('assets/css/home.css')}}">

<body>
    <div class="bg-img">
        <div class="container">
            <section class="card-section">

                <div class="tarjeta">
                    <div class="logo-cart">
                        <img src="{{asset('assets/img/UTVT_logo.png')}}">
                    </div>
                    <div class="perfil">
                        <img class="blue active" src="{{asset('assets/img/vectores/Usuario.jpg')}}">
                    </div>
                    <div class="info">
                        <span class="name">Perfil</span>
                        <p>Edita tu perfil</p>
                    </div>
                    <div class="add-cart button">
                        <div class="button-layer"></div>
                        <button>Editar</button>
                    </div>
                </div>

                <div class="tarjeta">
                    <div class="logo-cart">
                        <img src="{{asset('assets/img/UTVT_logo.png')}}">
                    </div>
                    <div class="encuesta">
                        <img class="blue active" src="{{asset('assets/img/vectores/Encuesta.jpg')}}">
                    </div>
                    <div class="info">
                        <span class="name">Encuesta</span>
                        <p>Encuesta Inicial</p>
                    </div>
                    <div class="add-cart button">
                        <div class="button-layer"></div>
                        <button>Contestar</button>
                    </div>
                </div>

                <div class="tarjeta">
                    <div class="logo-cart">
                        <img src="{{asset('assets/img/UTVT_logo.png')}}">
                    </div>
                    <div class="panelC">
                        <img class="blue active" src="{{asset('assets/img/vectores/panel_control.jpg')}}">
                    </div>
                    <div class="info">
                        <span class="name">Admin</span>
                        <p>Accede a tus herramientas</p>
                    </div>
                    <div class="add-cart button">
                        <div class="button-layer"></div>
                        <button>Acceder</button>
                    </div>
                </div>
                

            </section>
        </div>

    </div>
</body>
@endsection