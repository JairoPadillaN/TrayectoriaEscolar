@extends('encuesta')

@section('encuestaList')

<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
@if (auth()->user()->rol_id == 1)
<div class="container">
    <h2>Encuesta (Vista Previa)</h2>
    <div class="row" style="padding-top: 5px">
        
        <div>
            <form action="{{route('encuesta.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <ul class="nav nav-tabs">
                        @foreach($categorias as $categoria)
                        <li class="nav-item">
                            <a class="nav-link" href="#tab-{{ $categoria->id }}" data-toggle="tab">{{
                                $categoria->categoria }}</a>
                        </li>
                        @endforeach
                    </ul>

                    <div class="tab-content"> 
                        @foreach($categorias as $categoria)
                        <div class="tab-pane" id="tab-{{ $categoria->id }}">
                            <h4>{{ $categoria->categoria }}</h4>

                            @foreach($preguntas as $pregunta)
                            @if($pregunta->categoria->id == $categoria->id)
                            <p>{{ $pregunta->pregunta }}</p>


                            {{-- <div class="form-group">

                                @if($pregunta->tipoEntrada == 3)
                                    @include('partials.input_checkbox')
                                        @endif
                                @if($pregunta->tipoEntrada == 2)
                                    @include('partials.input_radio')
                                        @endif
                                @if($pregunta->tipoEntrada == 1)
                                    @include('partials.input_text')
                                        @endif
                            </div> --}}
 {{--                            <div class="form-group">
                                @switch($pregunta->tipoEntrada)
                                    @case(3)
                                        @include('partials.input_checkbox')
                                        @break
                                    @case(2)
                                        @include('partials.input_radio')
                                        @break
                                    @case(1)
                                        @include('partials.input_text')
                                        @break
                                @endswitch
                            </div> --}}
{{--                             <div class="form-group">
                                @when($pregunta->tipoEntrada, 3, @include('partials.input_checkbox'))
                                @when($pregunta->tipoEntrada, 2, @include('partials.input_radio'))
                                @when($pregunta->tipoEntrada, 1, @include('partials.input_text'))
                            </div> --}}
                            <div class="form-group">
                                @if($pregunta->tipoEntrada == 7)
                                    @include('partials.input_telefono')
                                @elseif($pregunta->tipoEntrada == 6)
                                    @include('partials.input_email')
                                @elseif($pregunta->tipoEntrada == 5)
                                    @include('partials.input_url')
                                @elseif($pregunta->tipoEntrada == 4)
                                    @include('partials.input_posible')
                                @elseif($pregunta->tipoEntrada == 3)
                                    @include('partials.input_fecha')
                                @elseif($pregunta->tipoEntrada == 2)
                                    @include('partials.input_radio')
                                @elseif($pregunta->tipoEntrada == 1)
                                    @include('partials.input_text')
                                @else
                                    <p>Tipo de entrada no reconocido.</p>
                                @endif
                            </div>

 

                            @endif 
                            @endforeach
                        </div>
                        @endforeach

                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <span class="d-inline-block" 
                                        tabindex="0" 
                                        data-bs-toggle="tooltip" 
                                        data-bs-placement="bottom"
                                        data-bs-title="El botón esta deshabilitado, solo se muestra para ver como lo ve el estudiante">
                                    <button type="submit" class="btn btn-outline-primary" >
                                        Enviar Respuestas
                                    </button>
                                </span>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</div>
@elseif (auth()->user()->rol_id == 2)
<div class="container">
    <h2>Encuesta (Vista Previa)</h2>
    <div class="row" style="padding-top: 5px">
        
        <div>
            <form action="{{route('encuesta.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <ul class="nav nav-tabs">
                        @foreach($categorias as $categoria)
                        <li class="nav-item">
                            <a class="nav-link" href="#tab-{{ $categoria->id }}" data-toggle="tab">{{
                                $categoria->categoria }}</a>
                        </li>
                        @endforeach
                    </ul>

                    <div class="tab-content"> 
                        @foreach($categorias as $categoria)
                        <div class="tab-pane" id="tab-{{ $categoria->id }}">
                            <h4>{{ $categoria->categoria }}</h4>

                            @foreach($preguntas as $pregunta)
                            @if($pregunta->categoria->id == $categoria->id)
                            <p>{{ $pregunta->pregunta }}</p>

                                <div class="col-md-6">
                                    <input type="text" id="respuesta" class="form-control"
                                        name="respuesta[{{ $pregunta->id }}]" required>
                                </div>

                            @endif 
                            @endforeach
                        </div>
                        @endforeach

                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <span class="d-inline-block" 
                                        tabindex="0" 
                                        data-bs-toggle="tooltip" 
                                        data-bs-placement="bottom"
                                        data-bs-title="El botón esta deshabilitado, solo se muestra para ver como lo ve el estudiante">
                                    <button type="submit" class="btn btn-outline-primary" disabled>
                                        Enviar Respuestas
                                    </button>
                                </span>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@elseif (auth()->user()->rol_id == 3)
<div class="container">
    <h2>Encuesta</h2>
    <div class="row" style="padding-top: 5px">
        <div>
            <form action="{{route('encuesta.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <ul class="nav nav-tabs">
                        @foreach($categorias as $categoria)
                        <li class="nav-item">
                            <a class="nav-link" href="#tab-{{ $categoria->id }}" data-toggle="tab">{{
                                $categoria->categoria }}</a>
                        </li>
                        @endforeach
                    </ul>

                    <div class="tab-content"> 
                        @foreach($categorias as $categoria)
                        <div class="tab-pane" id="tab-{{ $categoria->id }}">
                            <h4>{{ $categoria->categoria }}</h4>

                            @foreach($preguntas as $pregunta)
                            @if($pregunta->categoria->id == $categoria->id)
                            <p>{{ $pregunta->pregunta }}</p>

                                <div class="col-md-6">
                                    <input type="text" id="respuesta" class="form-control"
                                        name="respuesta[{{ $pregunta->id }}]" required>
                                </div>

                            @endif 
                            @endforeach
                        </div>
                        @endforeach

                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary">
                                    Enviar Respuestas
                                </button>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endif
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    })
    </script>

@endsection