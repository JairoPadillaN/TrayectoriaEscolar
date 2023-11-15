@extends('preguntas')
@section('preguntasList')

@if (auth()->user()->rol_id == 1)
<div class="row" style="padding-top: 20px">
  <div class="col-md-2"></div>
  <div class="col-md-5">
    <h3>Compendio de preguntas</h3>
  </div>
  <div class="col-md-3">
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#crearPregunta">
      <i class="fa-solid fa-plus"></i>
    </button>
    <a href="{{url('categorias')}}" class="btn btn-outline-warning">
      <i class="fa-solid fa-cubes"></i>
    </a>
    <a href="{{url('respuestasPosibles')}}" class="btn btn-outline-primary">
      <i class="fa-solid fa-list-check"></i>
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
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($preguntas as $pregunta)
          <tr class="">
            <td scope="row">{{$pregunta->id}}</td>
            <td>{{$pregunta->pregunta}}</td>
            <td>    
              <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editarPregunta{{$pregunta->id}}">
                <i class="fa-regular fa-pen-to-square"></i>
              </button>
              <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminarPregunta{{$pregunta->id}}">
                <i class="fa-regular fa-trash-can"></i>
              </button>
          </td>
          </tr>
          @include('preguntas.info')
          @endforeach
        </tbody>
      </table>
      {{ $preguntas->links() }}
    </div>
    @include('preguntas.crear')
  </div>
  <div class="col-md-2"></div>
</div>

@elseif (auth()->user()->rol_id == 2)

<div class="row" style="padding-top: 20px">
  <div class="col-md-2"></div>
  <div class="col-md-5">
    <h3>Compendio de preguntas</h3>
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
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($preguntas as $pregunta)
          <tr class="">
            <td scope="row">{{$pregunta->id}}</td>
            <td>{{$pregunta->pregunta}}</td>
            <td>    
              <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editarPregunta{{$pregunta->id}}">
                <i class="fa-solid fa-circle-info"></i>
              </button>
          </td>
          </tr>
          @include('preguntas.info')
          @endforeach
        </tbody>
      </table>
      {{ $preguntas->links() }}
    </div>
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