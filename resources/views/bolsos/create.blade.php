<html>
<body>
  <h1> AGREGAR BOLSO </h1>
  <form action="{{url('bolsos')}}" method="post">
    {{csrf_field()}}
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="form-group col-md-6">
      <label for="description">description</label>
      <input type="text" class="form-control" name="description" id="description">
    </div>
    <div class="form-group col-md-6">
      <label for="price">Precio</label>
      <input type="number" class="form-control" name="price" id="price">
    </div>
    <div class="form-group col-md-6">
      <label for="photo">Fotografía</label>
      <input type="text" class="form-control" name="photo" id="photo">
    </div>
  <br>
  <button type="submit" class="btn btn-secondary">Guardar</button>
</form>
</body>
</html>
