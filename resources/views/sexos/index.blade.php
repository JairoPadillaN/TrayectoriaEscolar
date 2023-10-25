@extends('sexo')
@section('sexosList')

<div class="row" style="padding-top: 70px">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <br>
    <h3>Lista de Sexos</h3>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#crearSexo">
      <i class="fa-solid fa-plus"></i>
    </button>
    <br><br>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Sexo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($sexos as $sexo)
          <tr class="">
            <td scope="row">{{$sexo->id}}</td>
            <td>{{$sexo->sexo}}</td>
            <td>    
              <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editarSexo{{$sexo->id}}">
                <i class="fa-regular fa-pen-to-square"></i>
              </button>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarSexo{{$sexo->id}}">
                <i class="fa-regular fa-trash-can"></i>
              </button>
          </td>
          </tr>
          @include('sexos.info')
          @endforeach
        </tbody>
      </table>
    </div>
    @include('sexos.crear')
  </div>
  <div class="col-md-2"></div>
</div>
     
 @endsection