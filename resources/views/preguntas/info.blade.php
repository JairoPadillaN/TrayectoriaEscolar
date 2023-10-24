{{-- Modal para edición de la pregunta --}}
<div class="modal fade" id="editarPregunta{{$pregunta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Pregunta</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('preguntas.update',$pregunta->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="modal-body">
            
            <div class="mb-3">
              <label for="" class="form-label">Pregunta</label> 
              <input type="text" class="form-control" name="pregunta" id="" aria-describedby="helpId" value="{{$pregunta->pregunta}}">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Descripción </label> 
              <input type="text" class="form-control" name="descripcion" id="" aria-describedby="helpId" value="{{$pregunta->descripcion}}">
            </div>
  
            <select class="form-select" aria-label="Default select example" name="categoria" id="categoria">
                @foreach($categorias as $categoria)
                @php
                 $valorSeleccionado;
                 $valorNombre;
                 if ($pregunta->categoria_id == $categoria->id) {
                   $valorSeleccionado = $pregunta->categoria_id;
                   $valorNombre = $categoria->categoria;
                 }   
                @endphp
                <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
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

  {{-- Modal de advertencia eliminacion de la pregunta --}}


<div class="modal fade" id="eliminarPregunta{{$pregunta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar pregunta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('preguntas.destroy', $pregunta->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="modal-body">
            Estas seguro de querer eliminar de la lista "<strong>{{$pregunta->id}} - {{$pregunta->pregunta}}"?</strong>
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Confirmar</button>
      </div>
    </form>
    </div>
  </div>
</div>
  