@extends('respuestasPosibles')
@section('respuestasCatList')

@if (auth()->user()->rol_id == 1)

<div class="row" style="padding-top: 20px">
  <div class="col-md-2"></div>
  <div class="col-md-6">
    <h3>Compendio de Respuestas</h3>
  </div>
  <div class="col-md-2">
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#crearRespuestas">
      <i class="fa-solid fa-plus"></i>
    </button>
    <a href="{{url('preguntas')}}" class="btn btn-outline-primary">
      <i class="fa-solid fa-table-list"></i>
    </a>
  </div>
  <div class="col-md-2"></div>
</div>

<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Pregunta</th>
            <th scope="col">Respuesta</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($respuestasPosibles as $rp)
          <tr class="">
            <td scope="row">{{$rp->id}}</td>
            <td>{{$rp->pregunta_id}}</td>
            <td>{{$rp->respuesa}}</td>
            <td>    
              <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editarRespuesta{{$rp->id}}">
                <i class="fa-regular fa-pen-to-square"></i>
              </button>
              <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminarRespuesta{{$rp->id}}">
                <i class="fa-regular fa-trash-can"></i>
              </button>
          </td>
          </tr>
          @include('respuestasPosibles.info')
          @endforeach
        </tbody>
      </table>
    </div>
    @include('respuestasPosibles.crear')
  </div>
  <div class="col-md-2"></div>
</div>

@elseif (auth()->user()->rol_id == 2)
<div class="row" style="padding-top: 20px">
  <div class="col-md-2"></div>
  <div class="col-md-6">
    <h3>Compendio de Respuestas</h3>
  </div>
  <div class="col-md-2">
    <a href="{{url('preguntas')}}" class="btn btn-outline-primary">
      <i class="fa-solid fa-table-list"></i>
    </a>
  </div>
  <div class="col-md-2"></div>
</div>

<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Pregunta</th>
            <th scope="col">Respuesta</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($respuestasPosibles as $rp)
          <tr class="">
            <td scope="row">{{$rp->id}}</td>
            <td>{{$rp->pregunta_id}}</td>
            <td>{{$rp->respuesa}}</td>
            <td>    
              <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editarRespuesta{{$rp->id}}">
                <i class="fa-regular fa-pen-to-square"></i>
              </button>
          </td>
          </tr>
          @include('respuestasPosibles.info')
          @endforeach
        </tbody>
      </table>
    </div>
    @include('respuestasPosibles.crear')
  </div>
  <div class="col-md-2"></div>
</div>
@elseif (auth()->user()->rol_id == 3)
@php
  function redirectToDash()
  {
    return redirect('/dashboard');
  }
  echo redirectToDash();
@endphp
@endif
 @endsection
