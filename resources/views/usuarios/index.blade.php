@extends('usuarios')
@section('usuariosList')

<div class="row" style="padding-top: 70px">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <br>
    <h3>Usuarios Registrados</h3>
    {{-- <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#crearPregunta">
      <i class="fa-solid fa-plus"></i>
    </button> --}}
    <br><br>
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Matricula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Carrera</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($usuarios as $usuario)
          @foreach($carreras as $carrera)
          @php
            if ($usuario->carrera_id == $carrera->id) {
              $acronimo = $carrera->acronimo;
            }    
          @endphp
          @endforeach
          <tr class="">
            <td scope="row">{{$usuario->id}}</td>
            <td>{{$usuario->matricula}}</td>
            <td>{{$usuario->name}} {{$usuario->apPaterno}} {{$usuario->apMaterno}}</td>
            <td>{{$acronimo}}</td>
            <td>    
              <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#infoUsuario{{$usuario->id}}">
                <i class="fa-solid fa-id-badge"></i>
              </button>
              {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarUsuario{{$usuario->id}}">
                <i class="fa-regular fa-trash-can"></i>
              </button> --}}
          </td>
          </tr>
          @include('usuarios.info')
          @endforeach
        </tbody>
      </table>
    </div>
    {{-- @include('usuarios.edit') --}}
  </div>
  <div class="col-md-2"></div>
</div>
     
 @endsection