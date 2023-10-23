{{-- Modal para edición de la sede --}}
<div class="modal fade" id="editarGenero{{$genero->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Género</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('generos.update',$genero->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="modal-body">
            
            <div class="mb-3">
              <label for="" class="form-label">Nombre</label> 
              <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" value="{{$genero->genero}}">
            </div>
            {{-- <div class="form-check form-switch">
                <input data-id="{{$genero->id}}" class="form-check-input ActivarDesAct" type="checkbox" role="switch" 
                id=""data-on="1" data-off="0" {{$genero->activo ? 'checked' : ''}}>
                <label class="form-check-label" for="flexSwitchCheckDefault">{{$activeG}}</label>
            </div>   --}}
          </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-success">Actualizar</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  {{-- Modal de advertencia eliminacion de sede --}}


<div class="modal fade" id="eliminarGenero{{$genero->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Género</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('generos.destroy', $genero->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="modal-body">
            Estas seguro de querer eliminar de la lista : <strong>{{$genero->genero}} </strong>?
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Confirmar</button>
      </div>
    </form>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('ActivarDesAct').change(function){
            var activo = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            console.log(activo);
        });
</script>