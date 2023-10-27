<form action="/formulario" method="post">
 @csrf
 <section>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
          <th scope="col">* Indica que la pregunta es obligatoria</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($preguntas as $pregunta)
          @php
          $categoria_id = $pregunta->categoria_id;
          $preguntaB = '';
          if ($categoria_id == 1) {
           $preguntaB = $pregunta->pregunta;
          }
          @endphp

          <tr class="">
            <td>
            <p>{{ $preguntaB }}</p>
            <input type="text" class="form-control" name="respuesta_{{ $pregunta->id }}">
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</section>
<button type="submit" class="btn btn-primary">Enviar respuestas</button>
</form>