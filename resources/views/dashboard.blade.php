<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                {{-- elementos visibles para el administrador --}}
                @if (auth()->user()->rol_id == 1)
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Bienvenido al sistema web de la encuesta inicial para los alumnos de nuevo ingreso de la <strong>Universidad Tecnologica del Valle de Toluca</strong>, aquí encontrarás diversas funcionalidades que facilitarán la gestión de la encuesta inicial.</h1>
                </div>                   
                <div class="row row-cols-1 row-cols-md-2 g-4">
                  <div class="col">
                    <div class="card text-center">
                      <img src="{{asset('assets/img/vectores/list.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size:25px">Usuarios</h5>
                        <p class="card-text">Aqui encontraras el catalogo de los usuarios registrados y el catalogo de roles.</p><br>
                        <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#usuariosModal">Ver</a>
                      </div>
                      @include('dashboard.usuarioModal')
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-center">
                      <img src="{{asset('assets/img/vectores/editar_encuesta.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size:25px">Encuesta</h5>
                        <p class="card-text">Aqui encontrarás el <strong>Catalogo de preguntas y de respuestas</strong>.</p><br>
                        <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#encuestaModal">Ver</a>
                      </div>
                      @include('dashboard.encuestaModal')
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-center">
                      <img src="{{asset('assets/img/vectores/Dashboard.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size:25px">Estadisticas</h5>
                        <p class="card-text">Aquí podras ver las estadisticas de los datos recopilados de los alumnos.</p><br>
                        <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#encuestsssasaModal">Ver</a>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-center">
                      <img src="{{asset('assets/img/vectores/sedes.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size:25px">Carreras y Perfil Profesional</h5>
                        <p class="card-text">Aquí encontraras la información relacionada con la <strong>UTVT</strong>.</p><br>
                        <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#unidadModal">Ver</a>
                      </div>
                      @include('dashboard.unidadModal')
                    </div>
                  </div>
                </div>
                {{-- elementos visibles para el docente --}}
                @elseif(auth()->user()->rol_id == 2)
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <h1>Bienvenido al sistema web de la encuesta inicial para los alumnos de nuevo ingreso de la <strong>Universidad Tecnologica del Valle de Toluca</strong>.</h1>
                </div>                   
                <div class="row row-cols-1 row-cols-md-2 g-4">
                  <div class="col">
                    <div class="card text-center">
                      <img src="{{asset('assets/img/vectores/list.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size:25px">Usuarios</h5>
                        <p class="card-text">Aqui encontraras el catalogo de los usuarios registrados.</p><br>
                        <a href="{{url('usuarios')}}" class="btn btn-outline-primary btn-sm">Ver</a>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-center">
                      <img src="{{asset('assets/img/vectores/editar_encuesta.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size:25px">Encuesta</h5>
                        <p class="card-text">Aqui encontraras el catalogo de preguntas y la encuesta Inicial</p><br>
                        <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#encuestaModal">Ver</a>
                      </div>
                      @include('dashboard.encuestaModal')
                    </div>
                  </div>
                  <div class="col">
                    <div class="card text-center">
                      <img src="{{asset('assets/img/vectores/Dashboard.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title" style="font-size:25px">Estadisticas</h5>
                        <p class="card-text">Aquí podras ver las estadisticas de los datos recopilados de los alumnos.</p><br>
                        <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#encuestsssasaModal">Ver</a>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- elementos visibles para el Estudiante --}}
                @elseif(auth()->user()->rol_id == 3)
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <h1><strong>¡Hola {{ Auth::user()->name }}!</strong></h1>
                  <h2>Se bienvenido a la Encuesta Inicial de la <strong>Universidad Tecnológica del Valle de Toluca</strong>, Por favor, ayudanos a conocerte mejor, contesta la encuesta que se encuentra abajo, esto nos proporcionara información necesaria para poder llevar un control de tus datos personales.</h2>
                </div>  
                <div class="col">
                  <div class="card text-center">
                    <img src="{{asset('assets/img/vectores/editar_encuesta.jpg')}}" class="card-img-top" style="width: 100px align-items: center" alt="...">
                    <div class="card-body">
                      <h5 class="card-title" style="font-size:25px">Encuesta</h5>
                      <p class="card-text">Aqui encontraras la encuesta Inicial</p><br>
                      <a href="#" class="btn btn-outline-primary btn-sm">Contestar</a>
                    </div>
                  </div>
                </div>
                @endif
                
                
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</x-app-layout>
