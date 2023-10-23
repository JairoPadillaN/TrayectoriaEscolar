@extends('categorias')
@section('categoriasList')

<div class="row justify-content-center align-items-center g-2" style="padding-top: 70px">
    <div class="col-md-2"></div>
    <div class="col-md-8">

        <br>
        <h3>Categorias de las preguntas</h3>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#categoriaNueva">
            <i class="fa-solid fa-plus"></i>
        </button>
        <br><br>
        <div class="table-responsive">
            <table class="table">
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
                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editarCategoria{{$categoria->id}}">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarCategoria{{$categoria->id}}">
                                <i class="fa-regular fa-trash-can"></i>
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

@endsection