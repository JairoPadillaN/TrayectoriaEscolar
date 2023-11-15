<!-- Modal -->
<div class="modal fade" id="usuariosModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Usuarios</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{asset('assets/img/vectores/Usuarios_lista.jpg')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title"><strong>Lista de Usuarios</strong></h3>
                        <p class="card-text">Selecciona esta opcion para visualizar a los usuarios registrados, su información basica y asignarle un rol si es que es necesario.</p><br>
                        <a href="{{url('usuarios')}}" class="btn btn-outline-primary btn-sm">Ir a Usuarios</a>
                    </div>
                    </div>
                </div>
            </div>  
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{asset('assets/img/vectores/roles.jpg')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title"><strong>Lista de Roles</strong></h3>
                        <p class="card-text">Selecciona esta opcion para visualizar  los roles autorizados dentro del sistema.</p><br>
                        <a href="{{url('rolesUser')}}" class="btn btn-outline-primary btn-sm">Ir a Roles</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
