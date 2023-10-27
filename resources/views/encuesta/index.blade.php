@extends('encuesta')
@section('encuestaList')
<div class="row" style="padding-top: 70px">
  <div class="col-md-2"></div>
  <div class="col-md-8">

  <div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Datos Generales</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Domicilio de residencia</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Datos de contacto de Emergencia</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p>@include('encuesta.modules.datos_generales')</p>
        </div>

        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <p>@include('encuesta.modules.domicilio_residencia')</p>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <p>@include('encuesta.modules.datos_contacto_emergemcia')</p>
        </div>
    </div>
</div>


</div>
  <div class="col-md-2"></div>
</div>
@endsection