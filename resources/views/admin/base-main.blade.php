<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="token"name="token" value="{{ csrf_token() }}">
    <title>Administrador | @yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('template-web/img/logo/favicon.png') }}" />
    <!-- Bootstrap -->
    <link href="{{ asset('template-admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('template-admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('template-admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- PNotify -->
    <link href="{{ asset('template-admin/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
    <link href="{{ asset('template-admin/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('template-admin/vendors/pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset('template-admin/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('template-admin/build/css/custom.min.css') }}" rel="stylesheet">
    @yield('stylesheet')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('admin-index') }}" class="site_title"><i class="fa fa-paw"></i> <span>Admin Blog Clon!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            @include('admin.menu_profile_quick')
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('admin.side_menu')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('admin.menu_footer_button')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('admin.top_navigation')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="page-title">
              <div class="title_left">
                <h3>@yield('title-content-1')</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><i class="fa fa-check-square"></i></button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

              @yield('main_content')

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('admin.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('template-admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('template-admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('template-admin/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('template-admin/vendors/nprogress/nprogress.js') }} "></script>
    <!-- Select2 -->
    <script src="{{ asset('template-admin/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('template-admin/build/js/custom.min.js') }}"></script>

    <script src="{{ asset('js/vendor.js') }}"></script>

    @yield('script')

  </body>
</html>
