{{-- Modal para ver los roles --}}
<div class="modal fade" id="verRol{{$rol->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tipo de Rol</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('rolesUser.update',$rol->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="modal-body">
            
            <div class="mb-3">
              <label for="" class="form-label">Tipo</label> 
              <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" value="{{$rol->Rol}}" disabled>
            </div>
  
          </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
          {{-- <button type="submit" class="btn btn-success">Actualizar</button> --}}
        </div>
      </form>
      </div>
    </div>
  </div>

