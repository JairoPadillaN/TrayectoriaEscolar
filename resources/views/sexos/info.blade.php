{{-- Modal para edición del sexo --}}
<div class="modal fade" id="editarSexo{{$sexo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Sexo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('sexos.update',$sexo->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="modal-body">
            
            <div class="mb-3">
              <label for="" class="form-label">Sexo</label> 
              <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" value="{{$sexo->sexo}}">
            </div>
  
          </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-success">Actualizar</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  {{-- Modal de advertencia eliminacion del sexo --}}


<div class="modal fade" id="eliminarSexo{{$sexo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Sexo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('sexos.destroy', $sexo->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="modal-body">
            Estas seguro de querer eliminar el sexo <strong>{{$sexo->sexo}} ?</strong>
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Confirmar</button>
      </div>
    </form>
    </div>
  </div>
</div>
  