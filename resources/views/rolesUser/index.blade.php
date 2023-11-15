@extends('rolesUser')
@section('rolesList')
@if (auth()->user()->rol_id == 1)
<div class="row" style="padding-top: 20px">
  <div class="col-md-2"></div>
  <div class="col-md-6">
    <h3>Lista de Roles</h3>
  </div>
  <div class="col-md-2">
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
            <th scope="col">Tipo de Rol</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($roles as $rol)
          <tr class="">
            <td scope="row">{{$rol->id}}</td>
            <td>{{$rol->Rol}}</td=>
            <td>    
              <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#verRol{{$rol->id}}">
                <i class="fa-solid fa-circle-info"></i>
              </button>
          </td>
          </tr>
          @include('rolesUser.info')
          @endforeach
        </tbody>
      </table>
    </div>
    @include('rolesUser.crear')
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