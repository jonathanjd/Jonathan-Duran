<header id="header" class="header-fullwidth header-transparent">
            <div id="header-wrap">
                <div class="container">

                    <!--LOGO-->
                    <div id="logo">
                        <a href="{{ route('index') }}" class="logo" data-dark-logo="{{ asset('template-polo/images/logo-dark.png') }}">
                            <img src="{{ asset('template-polo/images/blog-clon-logo.png') }}" alt="Polo Logo">
                        </a>
                    </div>
                    <!--END: LOGO-->

                    <!--MOBILE MENU -->
                    <div class="nav-main-menu-responsive">
                        <button class="lines-button x" type="button" data-toggle="collapse" data-target=".main-menu-collapse">
                            <span class="lines"></span>
                        </button>
                    </div>
                    <!--END: MOBILE MENU -->

                    <!--TOP SEARCH -->
                    <div id="top-search"> <a id="top-search-trigger"><i class="fa fa-search"></i><i class="fa fa-close"></i></a>
                        <form action="search-results-page.html" method="get" data-toggle="validator">
                            <input type="text" name="q" id="q" class="form-control" value="" placeholder="Buscar" required>
                        </form>
                    </div>
                    <!--END: TOP SEARCH -->

                    <!--NAVIGATION-->
                    <div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
                        <div class="container">
                            <nav id="mainMenu" class="main-menu mega-menu">
                                <ul class="main-menu nav nav-pills">
                                    <li><a href="{{ route('index') }}"><i class="fa fa-home"></i></a>
                                    </li>
                                    <li class="dropdown"> <a href="#"><i class="fa fa-wrench"></i> Servicios <i class="fa fa-angle-down"></i> </a>
                  										<ul class="dropdown-menu">

                                        @foreach ($services as $service)

                                          @if ($service->plans->count())

                                            <li class="dropdown-submenu"> <a href="#">{{ $service->name }}</a>
                      												<ul class="dropdown-menu">

                                                  @foreach ($service->plans as $plan)
                                                    <li><a href="{{ route('servicio',$plan->slug) }}">{{ $plan->name }}</a></li>
                                                  @endforeach

                                            </ul>
                      											</li>

                                          @else

                                            <li><a href="#">{{ $service->name }}</a></li>

                                          @endif



                                        @endforeach



                  										</ul>
                  									</li>
                                    <li><a href="{{ route('diseños') }}"><i class="fa fa-pencil"></i> Diseños</a></li>

                                    <li > <a href="{{ route('blog') }}"><i class="fa fa-reorder"></i> Blog</a>

                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--END: NAVIGATION-->
                </div>
            </div>
        </header>
