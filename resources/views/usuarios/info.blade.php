@if (auth()->user()->rol_id == 1)
{{-- Modal para edición del rol usuario --}}
<div class="modal fade" id="infoUsuario{{$usuario->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Información del usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('usuarios.edit',$usuario->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('GET')
          <div class="modal-body">
            
            <div class="mb-3">
              <label for="" class="form-label">Nombre</label> 
              <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" value="{{$usuario->name}}" required disabled>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Matricula</label> 
              <input type="text" class="form-control" name="matricula" id="" aria-describedby="helpId" value="{{$usuario->matricula}}" required disabled>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Correo </label> 
              <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" value="{{$usuario->email}}" required disabled>
            </div>
            <label for="" class="form-label">Tipo de usuario </label> 
            <select class="form-select" aria-label="Default select example" name="rol" id="rol">
                @foreach($roles as $rol)
                @php
                 $valorSeleccionado;
                 $valorNombre;
                 if ($usuario->rol_id == $rol->id) {
                   $valorSeleccionado = $usuario->rol_id;
                   $valorNombre = $rol->Rol;
                 }   
                @endphp
                <option value="{{$rol->id}}">{{$rol->Rol}}</option>
                @endforeach
                <option selected value="{{$valorSeleccionado}}">Actual - {{$valorNombre}} -</option>
            </select>
            <div class="mb-3">
                <label for="" class="form-label">Plantel Educativo </label> 
                @foreach($sedes as $sede)
                @php
                 $valorSeleccionado;
                 $valorNombre;
                 if ($usuario->sede_id == $sede->id) {
                   $valorSeleccionado = $usuario->sede_id;
                   $valorNombre = $sede->NombreSede;
                 }   
                @endphp
                @endforeach
                <input type="text" class="form-control" id="" aria-describedby="helpId" value="{{$valorNombre}}" required disabled>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Carrera </label> 
                @foreach($carreras as $carrera)
                @php
                 $valorSeleccionado;
                 $valorNombre;
                 if ($usuario->carrera_id == $carrera->id) {
                   $valorSeleccionado = $usuario->carrera_id;
                   $valorNombre = $carrera->carrera;
                 }   
                @endphp
                @endforeach
                <input type="text" class="form-control" id="" aria-describedby="helpId" value="{{$valorNombre}}" required disabled>
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
  @elseif (auth()->user()->rol_id == 2)
{{-- Modal para edición del rol usuario --}}
<div class="modal fade" id="infoUsuario{{$usuario->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Información del usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('usuarios.edit',$usuario->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('GET')
        <div class="modal-body">
          
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label> 
            <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" value="{{$usuario->name}}" required disabled>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Matricula</label> 
            <input type="text" class="form-control" name="matricula" id="" aria-describedby="helpId" value="{{$usuario->matricula}}" required disabled>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Correo </label> 
            <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" value="{{$usuario->email}}" required disabled>
          </div>
          <div class="mb-3">
              <label for="" class="form-label">Plantel Educativo </label> 
              @foreach($sedes as $sede)
              @php
               $valorSeleccionado;
               $valorNombre;
               if ($usuario->sede_id == $sede->id) {
                 $valorSeleccionado = $usuario->sede_id;
                 $valorNombre = $sede->NombreSede;
               }   
              @endphp
              @endforeach
              <input type="text" class="form-control" id="" aria-describedby="helpId" value="{{$valorNombre}}" required disabled>
          </div>
          <div class="mb-3">
              <label for="" class="form-label">Carrera </label> 
              @foreach($carreras as $carrera)
              @php
               $valorSeleccionado;
               $valorNombre;
               if ($usuario->carrera_id == $carrera->id) {
                 $valorSeleccionado = $usuario->carrera_id;
                 $valorNombre = $carrera->carrera;
               }   
              @endphp
              @endforeach
              <input type="text" class="form-control" id="" aria-describedby="helpId" value="{{$valorNombre}}" required disabled>
          </div>

        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </form>
    </div>
  </div>
</div>
  @endif
