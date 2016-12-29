<section class="main-header">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="<?php echo e(asset('template-web/img/logo/logo.png')); ?>" class="img-responsive" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                <div class="col-md-8 col-xs-12 nav-wrap">
                    <ul class="nav navbar-nav">
                        <li><a href="#owl-hero" class="page-scroll">Inicio</a></li>
                        <li><a href="#services" class="page-scroll">Servicios</a></li>
                        <li><a href="#portfolio" class="page-scroll">Diseños</a></li>
                        <li><a href="#team" class="page-scroll">Nosotros</a></li>
                        <li><a href="#contact" class="page-scroll">Contactanos</a></li>
                    </ul>
                </div>
                <div class="social-media hidden-sm hidden-xs">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="owl-hero" class="owl-carousel owl-theme">
        <div class="item" style="background-image: url(<?php echo e(asset('template-web/img/sliders/Slide.jpg')); ?>)">
            <div class="caption">
                <h6>Branding / Design / Creativty</h6>
                <h1>We Are <span>Rise</span></h1>
                <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
            </div>
        </div>
        <div class="item" style="background-image: url(<?php echo e(asset('template-web/img/sliders/Slide2.jpg')); ?>)">
            <div class="caption">
                <h6>Branding / Design / Creativty</h6>
                <h1>Creative <span>Design</span></h1>
                <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
            </div>
        </div>
        <div class="item" style="background-image: url(<?php echo e(asset('template-web/img/sliders/Slide3.jpg')); ?>)">
            <div class="caption">
                <h6>Branding / Design / Creativty</h6>
                <h1>Clean <span>Code</span></h1>
                <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
            </div>
        </div>
    </div>
</section>
