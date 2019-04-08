<html>
<body>
  <h1> AGREGAR BOLSO </h1>
  <form action="{{url('bolsos')}}" method="post">
    {{csrf_field()}}
    @include('bolsos.form');
    <button type="submit" class="btn btn-secondary">Guardar</button>
  </form>
</body>
</html>
