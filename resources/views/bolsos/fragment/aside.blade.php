<div class="alert alert-info panel-perfil">
  <!--Vista del usuario-->
  @if (Auth::guest())
      <p>Comprar<p>
      <i class="fas fa-shopping-cart publicidad_logos"></i>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="EG9Z7R68VTLCQ">
          <input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma rápida y segura de pagar en Internet.">
          <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
        </form>

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
