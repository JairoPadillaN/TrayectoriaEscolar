
<div class="modal fade" id="crearPregunta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Pregunta</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('preguntas.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            
            <div class="mb-3">
              <label for="" class="form-label">Pregunta</label> 
              <input type="text" class="form-control" name="pregunta" id="" aria-describedby="helpId" placeholder="" required>
            </div>
            <div>
            <label for="" class="form-label">Categoria</label> 
              <select class="form-select" aria-label="Default select example" name="categoria" id="categoria">
                
                  @foreach($categorias as $categoria)
                  <option value="{{$categoria->id}}" required>{{$categoria->categoria}}</option>
                  @endforeach
              </select>
            </div>

            {{-- <div>
              <label for="" class="form-label">Tipo de entrada</label> 
              <select class="form-select" aria-label="Default select example" name="input" id="input">
                
                  @foreach($tipoInput as $input)
                  <option value="{{$input->id}}" required>{{$input->nombre}}</option>
                  @endforeach
              </select>
            </div> --}}
  
          </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-outline-success">Guardar</button>
        </div>
      </form>
      </div>
    </div>
  </div>