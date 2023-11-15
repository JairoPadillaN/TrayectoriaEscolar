@extends('categorias')
@section('categoriasList')

@if (auth()->user()->rol_id == 1)

<div class="row" style="padding-top: 20px">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <h3>Categorias de las preguntas</h3>
    </div>
    <div class="col-md-2">
        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#categoriaNueva">
            <i class="fa-solid fa-plus"></i>
        </button>
        <a href="{{url('preguntas')}}" class="btn btn-outline-primary">
            <i class="fa-solid fa-table-list"></i>
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
                        <th scope="col">Categoria</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($categorias as $categoria)
                @php
                    $activeG ;
                    if ($categoria->activo == 1) {
                        $activeG = "Activo";
                    } else {
                        $activeG = 'inactivo';
                    }
                @endphp
                    <tr class="">
                        <td scope="row">{{$categoria->id}}</td>
                        <td>{{$categoria->categoria}}</td>
                        <td>
                            <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editarCategoria{{$categoria->id}}">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminarCategoria{{$categoria->id}}">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>        
                    @include('categorias.info')                            
                @endforeach
                </tbody>
            </table>
        </div>
        @include('categorias.crear')
    </div>
    <div class="col-md-2"></div>
</div>
@elseif (auth()->user()->rol_id == 2)
<div class="row" style="padding-top: 20px">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <h3>Categorias de las preguntas</h3>
    </div>
    <div class="col-md-2">

        <a href="{{url('preguntas')}}" class="btn btn-outline-primary">
            <i class="fa-solid fa-table-list"></i>
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
                        <th scope="col">Categoria</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($categorias as $categoria)
                @php
                    $activeG ;
                    if ($categoria->activo == 1) {
                        $activeG = "Activo";
                    } else {
                        $activeG = 'inactivo';
                    }
                @endphp
                    <tr class="">
                        <td scope="row">{{$categoria->id}}</td>
                        <td>{{$categoria->categoria}}</td>
                        <td>
                            <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editarCategoria{{$categoria->id}}">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                        </td>
                    </tr>        
                    @include('categorias.info')                            
                @endforeach
                </tbody>
            </table>
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