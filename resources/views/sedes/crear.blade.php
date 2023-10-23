
<div class="modal fade" id="crear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Sede</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('sedes.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label> 
            <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Dirección </label> 
            <input type="text" class="form-control" name="dirección" id="" aria-describedby="helpId" placeholder="">
          </div>

        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Guardar</button>
      </div>
    </form>
    </div>
  </div>
</div>