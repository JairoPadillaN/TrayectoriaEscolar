@if (auth()->user()->rol_id == 1)
{{-- Modal para edición de la sede --}}
<div class="modal fade" id="editar{{$sede->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Sede</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('sedes.update',$sede->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="modal-body">
            
            <div class="mb-3">
              <label for="" class="form-label">Nombre</label> 
              <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" value="{{$sede->NombreSede}}">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Dirección </label> 
              <input type="text" class="form-control" name="dirección" id="" aria-describedby="helpId" value="{{$sede->Direccion}}">
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


<div class="modal fade" id="eliminar{{$sede->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Sede</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('sedes.destroy', $sede->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="modal-body">
            Estas seguro de querer eliminar la sede de <strong>{{$sede->NombreSede}} ?</strong>
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

{{-- Modal para edición de la sede --}}
<div class="modal fade" id="editar{{$sede->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Sede</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('sedes.update',$sede->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal-body">
          
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label> 
            <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" value="{{$sede->NombreSede}}" disabled>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Dirección </label> 
            <input type="text" class="form-control" name="dirección" id="" aria-describedby="helpId" value="{{$sede->Direccion}}" disabled>
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