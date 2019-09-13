@include('layouts.block.header')
@include('layouts.block.topmenu')

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>

          @yield("conteudo")

        </div><!--/span-->

        @if(isset($sideMenuName))
            @include($sideMenuName)
        @endif

      </div><!--/row-->

      @include('layouts.block.footer')

    </div><!--/.container-->

    <script src="{{ url('assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ url('assets/bs/js/bootstrap.min.js') }}"></script>
    @if(isset($scriptName))
        @include($scriptName)
    @endif

  </body>
</html>
