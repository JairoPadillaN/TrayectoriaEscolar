@extends('generos')
@section('generosList')

<div class="row justify-content-center align-items-center g-2" style="padding-top: 70px">
    <div class="col-md-2"></div>
    <div class="col-md-8">

        <br>
        <h3>Lista de Géneros</h3>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#generoNuevo">
            <i class="fa-solid fa-plus"></i>
        </button>
        <br><br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Género</th>
                        {{-- <th scope="col">Status</th> --}}
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($generos as $genero)
                @php
                    $activeG ;
                    if ($genero->activo == 1) {
                        $activeG = "Activo";
                    } else {
                        $activeG = 'inactivo';
                    }
                @endphp
                    <tr class="">
                        <td scope="row">{{$genero->id}}</td>
                        <td>{{$genero->genero}}</td>
                        {{-- <td value="{{$genero->activo}}">{{$activeG}}</td> --}}
                        <td>
                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editarGenero{{$genero->id}}">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarGenero{{$genero->id}}">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>        
                    @include('generos.info')                            
                @endforeach
                </tbody>
            </table>
        </div>
        @include('generos.crear')
    </div>
    <div class="col-md-2"></div>
</div>

@endsection