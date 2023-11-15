@extends('sedes')
@section('sedesList')
@if (auth()->user()->rol_id == 1)

<div class="row" style="padding-top: 20px">
  <div class="col-md-2"></div>
  <div class="col-md-6">
    <h3>Lista de Sedes</h3>
  </div>
  <div class="col-md-2">
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#crear">
      <i class="fa-solid fa-plus"></i>
    </button>
  </div>
  <div class="col-md-2"></div>
</div>

<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="table-responsive">
      <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Unidad Acádemica</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($sedes as $sede)
          <tr class="">
            <td scope="row">{{$sede->id}}</td>
            <td>{{$sede->NombreSede}}</td>
            <td>    
              <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editar{{$sede->id}}">
                <i class="fa-regular fa-pen-to-square"></i>
              </button>
              <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminar{{$sede->id}}">
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

@else

@php
  function redirectToDash()
  {
    return redirect('/dashboard');
  }
  echo redirectToDash();
@endphp

@endif
     
 @endsection