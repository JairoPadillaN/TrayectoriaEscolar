{{-- Modal para edición de la pregunta --}}
<div class="modal fade" id="editarRespuesta{{$rp->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Pregunta</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('respuestasPosibles.update',$rp->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="modal-body">
            
            <div class="mb-3">
              <label for="" class="form-label">Respuesta</label> 
              <input type="text" class="form-control" name="respuesta" id="" aria-describedby="helpId" value="{{$rp->respuesa}}">
            </div>
  
            <label for="" class="form-label">¿a que pregunta corresponde?</label> 
            <select class="form-select" aria-label="Default select example" name="pregunta" id="pregunta">
                @foreach($preguntas as $pregunta)
                @php
                 $valorSeleccionado;
                 $valorNombre;
                 if ($rp->pregunta_id == $pregunta->id) {
                   $valorSeleccionado = $rp->pregunta_id;
                   $valorNombre = $pregunta->pregunta;
                 }   
                @endphp
                <option value="{{$pregunta->id}}">{{$pregunta->pregunta}}</option>
                @endforeach
                <option selected value="{{$valorSeleccionado}}">Valor actual - {{$valorNombre}} -</option>
            </select>

          </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-outline-success">Actualizar</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  {{-- Modal de advertencia eliminacion de la pregunta --}}


<div class="modal fade" id="eliminarRespuesta{{$rp->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Respuesta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('respuestasPosibles.destroy', $rp->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="modal-body">
            Estas seguro de querer eliminar de la lista "<strong>{{$rp->id}} - {{$rp->respuesa}}"?</strong>
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-outline-danger">Confirmar</button>
      </div>
    </form>
    </div>
  </div>
</div>
  