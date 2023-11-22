
<div class="modal fade" id="crearCarrera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Carrera</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('carreras.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            
            <div class="mb-3">
              <label for="" class="form-label">Carrera</label> 
              <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="Plan educativo nuevo" required>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Acronimo de la carrera</label> 
              <input type="text" class="form-control" name="acronimo" id="" aria-describedby="helpId" placeholder="Acronimo" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Descripción </label> 
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" type="text" name="descripcion" aria-describedby="helpId" placeholder="Perfil profesional" required></textarea>
            </div>

            <select class="form-select" aria-label="Default select example" name="sede" id="sede">
                @foreach($sedes as $sede)
                <option value="{{$sede->id}}" required>{{$sede->NombreSede}}</option>
                @endforeach
            </select>
  
          </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-outline-success">Guardar</button>
        </div>
      </form>
      </div>
    </div>
  </div>