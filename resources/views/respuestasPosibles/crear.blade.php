
<div class="modal fade" id="crearRespuestas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Respuestas Posibles</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('respuestasPosibles.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div>
              <label for="" class="form-label">¿A que regunta deseeas asignar esta posible respuesta?</label> 
                <select class="form-select" aria-label="Default select example" name="pregunta" id="pregunta">
                  
                    @foreach($preguntas as $pregunta)
                    <option value="{{$pregunta->id}}" required>{{$pregunta->pregunta}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Respuesta</label> 
              <input type="text" class="form-control" name="respuesta" id="" aria-describedby="helpId" placeholder="" required>
            </div>
            
  
          </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-outline-success">Guardar</button>
        </div>
      </form>
      </div>
    </div>
  </div>

