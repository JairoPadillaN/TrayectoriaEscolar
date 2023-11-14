<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Encuesta</h2>
        <div class="row" style="padding-top: 70px">
            <div class="col-md-2"></div> <div class="col-md-8"> <div class="container"> 
                <ul class="nav nav-tabs">
                @foreach($categorias as $categoria) 
                <li class="nav-item"> 
                    <a class="nav-link" href="#tab-{{ $categoria->id }}" data-toggle="tab">{{ $categoria->categoria }}</a> 
                </li>
                @endforeach
                </ul>

                <div class="tab-content"> @foreach($categorias as $categoria) 
                    <div class="tab-pane" id="tab-{{ $categoria->id }}">
                    <h4>{{ $categoria->categoria }}</h4>

                    @foreach($preguntas as $pregunta)
                        @if($pregunta->categoria->id == $categoria->id)
                        <p>{{ $pregunta->pregunta }}</p>
                        @endif
                    @endforeach
                    </div>
                    @endforeach

            </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>