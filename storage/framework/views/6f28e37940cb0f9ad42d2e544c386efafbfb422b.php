<header id="header" class="header-fullwidth header-transparent">
            <div id="header-wrap">
                <div class="container">

                    <!--LOGO-->
                    <div id="logo">
                        <a href="<?php echo e(route('index')); ?>" class="logo" data-dark-logo="<?php echo e(asset('template-polo/images/logo-dark.png')); ?>">
                            <img src="<?php echo e(asset('template-polo/images/blog-clon-logo.png')); ?>" alt="Polo Logo">
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
                                    <li><a href="<?php echo e(route('index')); ?>"><i class="fa fa-home"></i></a>
                                    </li>
                                    <li class="dropdown"> <a href="#"><i class="fa fa-wrench"></i> Servicios <i class="fa fa-angle-down"></i> </a>
                  										<ul class="dropdown-menu">

                                        <?php foreach($services as $service): ?>

                                          <?php if($service->plans->count()): ?>

                                            <li class="dropdown-submenu"> <a href="#"><?php echo e($service->name); ?></a>
                      												<ul class="dropdown-menu">

                                                  <?php foreach($service->plans as $plan): ?>
                                                    <li><a href="<?php echo e(route('servicio',$plan->id)); ?>"><?php echo e($plan->name); ?></a></li>
                                                  <?php endforeach; ?>

                                            </ul>
                      											</li>

                                          <?php else: ?>

                                            <li><a href="#"><?php echo e($service->name); ?></a></li>

                                          <?php endif; ?>



                                        <?php endforeach; ?>



                  										</ul>
                  									</li>
                                    <li><a href="<?php echo e(route('diseños')); ?>"><i class="fa fa-pencil"></i> Diseños</a></li>

                                    <li > <a href="<?php echo e(route('blog')); ?>"><i class="fa fa-reorder"></i> Blog</a>

                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--END: NAVIGATION-->
                </div>
            </div>
        </header>
