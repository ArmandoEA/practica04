<!--si existe una variable llamada info-->
@if(Session::has('info'))
  <div class="alert alert-info">
    <!--Boton de JavaScript que tiene Bootstrap para cerrar el panel-->
    <button type="button" class="close" data-dismiss="alert">
      <!--imprime una 'x' en el boton-->
      &times;
    </button>
    <!--Traer e imprimir el contenido de la variable 'info'-->
    {{ Session::get('info') }}
  </div>
@endif
