<!doctype html>
<html lang="en">

<head>
  <title>Iniciar Sesión - UTVT</title>
  <link rel="icon" href="{{ asset('assets/img/cuervo_logo.png') }}">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/LoginPage.css')}}">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://kit.fontawesome.com/6832f025eb.js" crossorigin="anonymous"></script>

</head>

<body>

  <div class="bg-img">
    <div class="content">
      <img src="{{asset('assets/img/cuervo_logo.png')}}">
      <header>Universidad Tecnológica del Valle de Toluca</header>
      <p>Ingresa tus credenciales para iniciar sesión</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="field space form">
          <span><i class="fa-regular fa-user fa-fade"></i></span>
          <input id="email" type="email" class="form @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" placeholder="example@utvtol.edu.mx" required autocomplete="email" autofocus>

          @error('email')
              <span class="invalid-feedback" role="alert">
                <script>alert('Las Credenciales son erronéas o no existen')</script>
              </span>
          @enderror

        </div>

        <div class="field space form">
          <span><i class="fa-regular fa-envelope fa-fade"></i></span>
          <input id="password" type="password" class="password @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="current-password">
          <span class="show"><i class="fa-regular fa-eye"></i></span>
          
          @error('password')
          <span class="invalid-feedback" role="alert">
            <script>alert('Las Credenciales son erronéas o no existen')</script>
          </span>
        @enderror
        </div>

        <div class="rPass">
          @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
          @endif
        </div>

        <div class="space">
          <button class="btn btn-outline-success btn-block" type="submit"><i class="fa-solid fa-arrow-right-to-bracket fa-fade"></i> Iniciar Sesión </button>
        </div>

        <div class="signup">¿Aún no tienes Cuenta?
          <a href="{{route('register')}}">Crear Cuenta</a>
        </div>

      </form>
    </div>
  </div>

  <!-- Script mostrar contraseña -->
<script>
  const pass_field = document.querySelector('.password');
  const show_btn = document.querySelector('.show');
  show_btn.addEventListener('click',function(){
    if(pass_field.type === "password"){
      pass_field.type = "text";
      show_btn.innerHTML = '<i class="fa-regular fa-eye-slash"></i>';
    } else{
      pass_field.type = "password";
      show_btn.innerHTML = '<i class="fa-regular fa-eye"></i>';
    }
  });
</script>
    
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

<script src="sweetalert2.all.min.js"></script>

</body>

</html>