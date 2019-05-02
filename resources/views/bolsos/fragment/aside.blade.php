<div class="alert alert-info panel-perfil">
  <p> {{ Auth::user()->name }} </p>

  <div>
      <a href="{{ route('home') }}" class="btn btn-info btn-block">
        Perfil
      </a>
  </div>
</div>
