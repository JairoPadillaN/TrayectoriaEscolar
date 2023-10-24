@extends('preguntas')
@section('preguntasList')

<div class="row" style="padding-top: 70px">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <br>
    <h3>Compendio de preguntas</h3>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#crearPregunta">
      <i class="fa-solid fa-plus"></i>
    </button>
    <br><br>
    <div class="table-responsive">
      <table class="table">
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
              <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editarPregunta{{$pregunta->id}}">
                <i class="fa-regular fa-pen-to-square"></i>
              </button>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarPregunta{{$pregunta->id}}">
                <i class="fa-regular fa-trash-can"></i>
              </button>
          </td>
          </tr>
          @include('preguntas.info')
          @endforeach
        </tbody>
      </table>
    </div>
    @include('preguntas.crear')
  </div>
  <div class="col-md-2"></div>
</div>
     
 @endsection