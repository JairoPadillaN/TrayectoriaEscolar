<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trayectoria - UTVT</title>
        <link rel="icon" href="{{ asset('assets/img/cuervo.png') }}">
        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('assets/css/bienvenida.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/6832f025eb.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
           
        </style>
    </head>

    <body>
        <div>
            <!-- Image and text -->
            <nav class="navbar navbar-dark bg-dark" style="padding: 2ch">
                <a class="navbar-brand" href="https://utvt.edomex.gob.mx" target="_blank" rel="noopener">
                <img src="{{asset('assets/img/cuervo.png')}}" width="35" height="35" class="d-inline-block align-top" alt="">
                Universidad Tecnológica del Valle de Toluca
                </a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{url('/home')}}">Inicio</a>
                    @else
                        <a href="{{route('login')}}" class="btn btn-outline-success my-2 my-sm-0">
                            <i class="fa-solid fa-arrow-right-to-bracket fa-fade"></i> Iniciar Sesión</a>
                    @endauth
                @endif
            </nav>
        </div>

        <div >
            <h1 class="title">Trayectoria Académica</h1>
            <h3 class="typed">#EstáDeModaSerCuervo </h3>
        </div>

        <section class="redesSociales">
            <a href="https://utvt.edomex.gob.mx" target="_blank" rel="noopener"><i class="fa-solid fa-house fa-beat"></i></a>
            <a href="https://www.facebook.com/utvtol" target="_blank" rel="noopener"><i class="fa-brands fa-facebook fa-beat"></i></a>
            <a href="https://twitter.com/UTVToluca" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter fa-beat"></i></a>
            <a href="https://www.instagram.com/utvtoficial/" target="_blank" rel="noopener"><i class="fa-brands fa-instagram fa-beat"></i></a>
            <a href="https://www.youtube.com/@universidadtecnologicadelv7639" target="_blank" rel="noopener"><i class="fa-brands fa-youtube fa-beat"></i></a>
            <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.google.com%2Fmaps%2Fdir%2F%3Fapi%3D1%26destination%3D19.340424203617%252C-99.475114312404%26fbclid%3DIwAR0ZUyjcLwXhwgHT-ssMgYWhWy5pWwm0lpTUc7eVUOVSzbuqlY3hGGl1Piw&h=AT2xC9MGyHfDkV4uh8b64nuTimT3Sbx1W83-aR_VzF1NPevq8l-OuE0SJqcWpIOabGgoAOOmS3IagG3BKRVdzA97FzatwiTOoiUASlTYUMTT8mnG_ULa_m3DwISHX_pyH_sEpVpd44r2GY02DSilzQ" target="_blank" rel="noopener"><i class="fa-solid fa-map-location-dot fa-beat"></i></a>
        </section>

        <div>
            <p class="foot"><i class="fa-regular fa-copyright" style="color: #ffffff;"></i> UTVT</p>
        </div>

          <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
    </body>
           
</html>

