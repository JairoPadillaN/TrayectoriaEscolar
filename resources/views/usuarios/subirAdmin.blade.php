
<!-- Modal -->
<div class="modal fade" id="subirAdmin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Usuarios con Privilegios</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <h1><strong>¿Como agrego a mis Administradores y Docentes?</strong></h1>
                <br>
                <p>Para agregar Administradores o Docentes, debes de tener en a la mano lo siguiente:</p>
                    <ul class="list-group">
                        <li class="list-group-item">Nombre(s) del usuario</li>
                        <li class="list-group-item">Correo electronico Institucional</li>
                        <li class="list-group-item">Una contraseña segura</li>
                        <li class="list-group-item">Rol asignado para este usuario</li>
                    </ul>
            </div>

            <div>
                <br>
                <h1><strong>¿Como asigno los privilegios de mis usuarios?</strong></h1>
                <p>Es muy sencillo!! solo sigue el patron de la siguiente tabla:</p>
                <br>
                <img src="{{asset('assets/img/roles_list.png')}}" class="img-fluid" alt="..." style="align-content: center">
            </div>

            <div>
                <br>
                <p>Por lo tanto tu archivo CSV debe de tener la siguiente estructura:</p>
                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">password</th>
                                <th scope="col">rol_id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td scope="row">Pedro</td>
                                <td>pedro.martinez@utvtol.edu.mx</td>
                                <td>WabX095$kL</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>

            <div>
                <br>
                <p>Y tu archivo debe de verse de esta forma para poder subir a tus usuarios</p>
                <img src="{{asset('assets/img/formato_csv.png')}}" class="img-fluid" alt="...">

            </div>

            <div>
                <br>
                <p><strong>!Ahora tu puedes agregar a tus usuarios con privilegios, Adelante¡</strong></p>

            </div>


            <div>
                <br>
                <form action="{{ route('import-users') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="csv_file" accept=".csv" required>
                    <button type="submit" class="btn btn-outline-success">Agregar</button>
                </form>
            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>