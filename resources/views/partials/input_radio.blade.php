{{-- <select class="form-select" aria-label="Default select example" name="respuesta[{{ $pregunta->id }}]" id="respuesta">
 
    <option value="Si" required>Si</option>
    <option value="No" required>No</option>

  </select>
 --}}
  <div class="form-check">
    <input class="form-check-input" type="radio" name="respuesta[{{ $pregunta->id }}]" id="flexRadioDefault1" value="Si">
    <label class="form-check-label" for="flexRadioDefault1">
      Si
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="respuesta[{{ $pregunta->id }}]" id="flexRadioDefault2" value="No" checked>
    <label class="form-check-label" for="flexRadioDefault2">
      No
    </label>
  </div>