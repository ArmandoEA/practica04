<html>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Imagen</th>
            </tr>

            <tbody>
            <tr>
              <tbody>
			@foreach($bolsos as $user)
				<tr>
					<td>{{{ $user->name }}}</td>
          <td>{{{ $user->description }}}</td>
          <td>{{{ $user->price }}}</td>
          <td>{{{ $user->photo }}}</td>
          <td>
            <button class="btn btn-primary btn-sm"
              data-idbolsos="{{$id}}"
              ata-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i>
            </button>
          </td>
				</tr>
			@endforeach
		</tbody>
            </tr>
          </tbody>
        </thead>
</table>
</html>
