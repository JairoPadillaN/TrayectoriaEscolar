@if (auth()->user()->rol_id == 1)
{{-- Modal para edición de la categoria --}}
<div class="modal fade" id="editarCategoria{{$categoria->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Categoria</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('categorias.update',$categoria->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="modal-body">
            
            <div class="mb-3">
              <label for="" class="form-label">Nombre</label> 
              <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" value="{{$categoria->categoria}}">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Descripción </label> 
              <input type="text" class="form-control" name="descripcion" id="" aria-describedby="helpId" value="{{$categoria->descripcion}}">
            </div>
  
          </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-outline-success">Actualizar</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  {{-- Modal de advertencia eliminacion de sede --}}


<div class="modal fade" id="eliminarCategoria{{$categoria->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Categoria</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('categorias.destroy', $categoria->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="modal-body">
            Estas seguro de querer eliminar la categoria <strong>{{$categoria->categoria}} ?</strong>
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-outline-danger">Confirmar</button>
      </div>
    </form>
    </div>
  </div>
</div>
  
@elseif (auth()->user()->rol_id == 2)

{{-- Modal para edición de la categoria --}}
<div class="modal fade" id="editarCategoria{{$categoria->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ver Categoria</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('categorias.update',$categoria->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal-body">
          
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label> 
            <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" value="{{$categoria->categoria}}" disabled>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Descripción </label> 
            <input type="text" class="form-control" name="descripcion" id="" aria-describedby="helpId" value="{{$categoria->descripcion}}" disabled>
          </div>

        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </form>
    </div>
  </div>
</div>

@elseif (auth()->user()->rol_id == 3)
@php
  function redirectToDash()
  {
    return redirect('/dashboard');
  }
  echo redirectToDash();
@endphp
@endif