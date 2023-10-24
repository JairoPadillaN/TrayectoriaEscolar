{{-- Modal para edición de la carrera --}}
<div class="modal fade" id="editarCarrera{{$carrera->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Carrera</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('carreras.update',$carrera->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="modal-body">
            
            <div class="mb-3">
              <label for="" class="form-label">Carrera</label> 
              <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" value="{{$carrera->carrera}}" required>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Descripción </label> 
              <input type="text" class="form-control" name="descripcion" id="" aria-describedby="helpId" value="{{$carrera->descripcion}}" required>
            </div>
  
            <select class="form-select" aria-label="Default select example" name="sede" id="sede">
                @foreach($sedes as $sede)
                @php
                 $valorSeleccionado;
                 $valorNombre;
                 if ($carrera->sede_id == $sede->id) {
                   $valorSeleccionado = $carrera->sede_id;
                   $valorNombre = $sede->NombreSede;
                 }   
                @endphp
                <option value="{{$sede->id}}">{{$sede->NombreSede}}</option>
                @endforeach
                <option selected value="{{$valorSeleccionado}}">Valor actual - {{$valorNombre}} -</option>
            </select>

          </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-success">Actualizar</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  {{-- Modal de advertencia eliminacion de la carrera --}}


<div class="modal fade" id="eliminarCarrera{{$carrera->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Carrera</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('carreras.destroy', $carrera->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="modal-body">
            Estas seguro de querer eliminar de la lista "<strong>{{$carrera->id}} - {{$carrera->carrera}}"?</strong>
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Confirmar</button>
      </div>
    </form>
    </div>
  </div>
</div>
  