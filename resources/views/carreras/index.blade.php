@extends('carreras')
@section('carrerasList')

<div class="row" style="padding-top: 70px">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <br>
    <h3>Carreras y perfil profesional</h3>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#crearCarrera">
      <i class="fa-solid fa-plus"></i>
    </button>
    <br><br>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Carrera</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($carreras as $carrera)
          <tr class="">
            <td scope="row">{{$carrera->id}}</td>
            <td>{{$carrera->carrera}}</td>
            <td>    
              <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editarCarrera{{$carrera->id}}">
                <i class="fa-regular fa-pen-to-square"></i>
              </button>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarCarrera{{$carrera->id}}">
                <i class="fa-regular fa-trash-can"></i>
              </button>
          </td>
          </tr>
          @include('carreras.info')
          @endforeach
        </tbody>
      </table>
    </div>
    @include('carreras.crear')
  </div>
  <div class="col-md-2"></div>
</div>
     
 @endsection