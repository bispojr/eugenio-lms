    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>

          @include($viewName)

        </div><!--/span-->

        @if(isset($sideMenuName))
            @include($sideMenuName)
        @endif

      </div><!--/row-->

      @include('layouts.block.footer')

    </div><!--/.container-->

    @include($scriptName)

  </body>
</html>
