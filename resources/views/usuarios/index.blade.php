@extends('usuarios')
@section('usuariosList')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@if (auth()->user()->rol_id == 1)
<div class="row" style="padding-top: 20px">
  <div class="col-md-2"></div>
  <div class="col-md-5">
    <h3>Lista de Usuarios Registrados</h3>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#subirAdmin">
          <i class="fa-solid fa-plus"></i>
        </button>
  </div>
  <div class="col-md-3">
    <form method="GET" action="{{ route('usuarios.index') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
      <div class="input-group">
          <input type="text" class="form-control" name="search" placeholder="Buscar usuario" value="{{ request('search') }}">
          <span class="input-group-append">
              <button class="btn btn-outline-primary" type="submit">
                  <i class="fa fa-search"></i>
              </button>
          </span>
      </div>
  </form>
  </div>
  <div class="col-md-2"></div>
</div>

<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col" >Id</th>
            <th scope="col" >Matricula</th>
            <th scope="col" >Nombre</th>
            <th scope="col" >Carrera</th>
            <th scope="col" >Acciones</th>
          </tr>
        </thead>
        <tbody class="table-group-divider " >
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
            <td >{{$usuario->matricula}}</td>
            <td >{{$usuario->name}} {{$usuario->apPaterno}} {{$usuario->apMaterno}}</td>
            <td >{{$acronimo}}</td>
            <td>    
              <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#infoUsuario{{$usuario->id}}">
                <i class="fa-solid fa-circle-info"></i>
              </button>
          </td>
          </tr>
          @include('usuarios.info')
          @endforeach
        </tbody>
      </table>
      {{ $usuarios->links() }}
    </div>
    @include('usuarios.subirAdmin')
  </div>
  <div class="col-md-1"></div>
</div>

@elseif (auth()->user()->rol_id == 2)

<div class="row" style="padding-top: 20px">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h3>Lista de Usuarios Registrados</h3>
    <form method="GET" action="{{ route('usuarios.index') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
      <div class="input-group">
          <input type="text" class="form-control" name="search" placeholder="Buscar usuario" value="{{ request('search') }}">
          <span class="input-group-append">
              <button class="btn btn-outline-primary" type="submit">
                  <i class="fa fa-search"></i>
              </button>
          </span>
      </div>
  </form>
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col" >Id</th>
            <th scope="col" >Matricula</th>
            <th scope="col" >Nombre</th>
            <th scope="col" >Carrera</th>
            <th scope="col" >Acciones</th>
          </tr>
        </thead>
        <tbody class="table-group-divider " >
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
            <td >{{$usuario->matricula}}</td>
            <td >{{$usuario->name}} {{$usuario->apPaterno}} {{$usuario->apMaterno}}</td>
            <td >{{$acronimo}}</td>
            <td>    
              <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#infoUsuario{{$usuario->id}}">
                <i class="fa-solid fa-circle-info"></i>
              </button>
          </td>
          </tr>
          @include('usuarios.info')
          @endforeach
        </tbody>
      </table>
      {{ $usuarios->links() }}
    </div>
  </div>
  <div class="col-md-1"></div>
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