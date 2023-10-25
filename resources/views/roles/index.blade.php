@extends('roles')
@section('rolesList')

<div class="row" style="padding-top: 70px">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <br>
    <h3>Lista de Roles</h3>
    {{-- <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#crear">
      <i class="fa-solid fa-plus"></i>
    </button> --}}
    <br><br>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Rol</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($roles as $rol)
          <tr class="">
            <td scope="row">{{$rol->id}}</td>
            <td>{{$rol->Rol}}</td>
            <td>    
              <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#verRol{{$rol->id}}">
                <i class="fa-solid fa-info"></i>
              </button>
              {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarRol{{$rol->id}}">
                <i class="fa-regular fa-trash-can"></i>
              </button> --}}
          </td>
          </tr>
          @include('roles.info')
          @endforeach
        </tbody>
      </table>
    </div>
    @include('roles.crear')
  </div>
  <div class="col-md-2"></div>
</div>
     
 @endsection