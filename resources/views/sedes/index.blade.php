@extends('sedes')
@section('sedesList')

<div class="row" style="padding-top: 70px">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <br>
    <h3>Lista de Sedes</h3>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#crear">
      <i class="fa-solid fa-plus"></i>
    </button>
    <br><br>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Unidad Acádemica</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($sedes as $sede)
          <tr class="">
            <td scope="row">{{$sede->id}}</td>
            <td>{{$sede->NombreSede}}</td>
            <td>    
              <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editar{{$sede->id}}">
                <i class="fa-regular fa-pen-to-square"></i>
              </button>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar{{$sede->id}}">
                <i class="fa-regular fa-trash-can"></i>
              </button>
          </td>
          </tr>
          @include('sedes.info')
          @endforeach
        </tbody>
      </table>
    </div>
    @include('sedes.crear')
  </div>
  <div class="col-md-2"></div>
</div>
     
 @endsection