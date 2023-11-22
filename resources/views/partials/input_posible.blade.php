{{-- 
<select class="form-select" aria-label="Default select example" name="respuesta_id[{{ $pregunta->id }}]" id="respuesta_id">
  @foreach($respuestasPosibles as $rp)
  <option value="{{$rp->id}}" required>{{$rp->respuesa}}</option>
  @endforeach
</select> --}}

{{-- <select class="form-select" aria-label="Disabled select example " name="respuesta_id" id="respuesta_id">
  @foreach($preguntas as $pregunta)
    @if($pregunta->respuestasPosibles->pregunta_id = $pregunta->id)
      <option value="{{$pregunta->respuestasPosibles->pregunta_id}}">{{$pregunta->respuestasPosibles->respuesa}}</option>
    @endif
  @endforeach
</select>    --}}
<input type="text" id="respuesta" class="form-control"
    name="respuesta[{{ $pregunta->id }}]" required>