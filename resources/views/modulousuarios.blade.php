<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script

<h1>Modulo Usuarios</h1>

<table class="table">
  <thead>
    <tr>
      
    <th>Matricula </th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Correo</th>
      <th>Rol </th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    
  @foreach ($data as $user)

    <tr>
      <td>{{$user->matricula}}</td>
      <td>{{$user->nombre}}</td>
      <td>{{$user->ap_paterno}}</td>
      <td>{{$user->correo}}</td>
      <td>{{$user->rol->rol}}</td>
      <td></td>
    </tr>
@endforeach
    
  </tbody>
</table>
