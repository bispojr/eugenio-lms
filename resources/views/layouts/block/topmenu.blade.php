  <?php
      $menuTopo = array(  'Principal' => '',
                          'Usuários' => '',
                          'Contato' => ''
          );
      $menuTopo[$menuTopoAtivo] = "active";
  ?>

  <body>
    <div class="navbar navbar-fixed-top navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand {{ $menuTopo['Principal'] }}" href="{{ url('/') }}">Eugênio AVA</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              @if(Auth::check() && Auth::user()->isAdmin())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Usuário <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/usuario/criar') }}">Criar</a></li>
                        <li><a href="{{ url('/usuario/listar') }}">Listar</a></li>
                    </ul>
                </li>
              @endif
              <li class="{{ $menuTopo['Contato'] }}" ><a href="{{ url('/contato') }}">Contato</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right" style="color: white;">

                @if( Auth::check() )
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ url('/logout') }}">Sair</a></li>
                    </ul>
                  </li>
                @else
                    <ul class="nav navbar-nav">
                        <li >
                            <a href="{{ url('/login') }}">Entrar</a>
                        </li>
                    </ul>
                @endif

          </ul>
        </div><!--/.navbar-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->
