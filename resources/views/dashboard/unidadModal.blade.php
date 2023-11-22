  <!-- Modal -->
<div class="modal fade" id="unidadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Sedes y Carreras</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{asset('assets/img/vectores/sedes.jpg')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title"><strong>Catalogo de Sedes</strong></h3>
                        <p class="card-text">Selecciona esta opcion para visualizar las Unidades Academicas de la <strong>UTVT</strong>.</p><br>
                        <a href="{{url('sedes')}}" class="btn btn-outline-primary btn-sm">Ver Unidades Academicas</a>
                    </div>
                    </div>
                </div>
            </div>  
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{asset('assets/img/vectores/carreras.jpg')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title"><strong>Catalogo de Carreras</strong></h3>
                        <p class="card-text">Selecciona esta opcion para visualizar los planes educativos que ofrece la <strong>UTVT</strong>.</p><br>
                        <a href="{{url('carreras')}}" class="btn btn-outline-primary btn-sm">Ver Carreras</a>
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