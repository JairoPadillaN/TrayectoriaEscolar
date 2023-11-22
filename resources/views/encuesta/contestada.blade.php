@extends('encuesta')

@section('encuestaList')
<style>
    .image-container {
 position: relative;
 text-align: center;
 color: white;
}

.background-image {
 display: block;
 width: 100%;
 height: auto;
}

.text-over-image {
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%, -50%);
 font-size: 3em;
 font-weight: bold;
 text-shadow: 2px 2px 5px black;
}
</style>
@if(session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
<div class="image-container">
    <img src="{{asset('assets/img/explanada_3.jpg')}}" alt="Fondo" class="background-image">
    <h1 class="text-over-image">Estimado/a {{ Auth::user()->name }},
    gracias por participar de nuestra encuesta.</h1>
 </div>

@endsection