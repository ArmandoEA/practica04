<div class="alert alert-info panel-perfil">
  <!--Vista del usuario-->
  @if (Auth::guest())
      <p>Comprar<p>
  <!--Vista del administrador-->
  @else
      <p> {{ Auth::user()->name }} </p>
      <div>
          <a href="{{ route('home') }}" class="btn btn-info btn-block">
            Perfil
          </a>
      </div>
  @endif
</div>
