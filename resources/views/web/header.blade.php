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
                <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('template-web/img/logo/logo.png') }}" class="img-responsive" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                <div class="col-md-8 col-xs-12 nav-wrap">
                    <ul class="nav navbar-nav">
                        <li><a href="#owl-hero" class="page-scroll">Inicio</a></li>
                        <li><a href="#services" class="page-scroll">Servicios</a></li>
                        <li><a href="#portfolio" class="page-scroll">Diseños</a></li>
                        <li><a href="#team" class="page-scroll">Nosotros</a></li>
                        <li><a href="#" class="">Blog</a></li>
                        <li><a href="#" class="">Cursos</a></li>
                        <li><a href="#contact" class="page-scroll">Contactanos</a></li>
                    </ul>
                </div>
                <div class="social-media hidden-sm hidden-xs">
                    <ul class="nav navbar-nav">
                        <li><a href="https://www.facebook.com/blogclon/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/ClonBlog"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/b/116802730935776600786/116802730935776600786"><i class="fa fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="owl-hero" class="owl-carousel owl-theme">
        <div class="item" style="background-image: url({{ asset('template-web/img/sliders/blog-clon.jpg') }})">
            <div class="caption">
                <h6>Diseño / Creatividad / Marca</h6>
                <h1>Página <span>Web</span></h1>
                <a class="btn btn-transparent page-scroll" href="#services">Más Información</a><a class="btn btn-light page-scroll" href="#contact">Contratar</a>
            </div>
        </div>
        <div class="item" style="background-image: url({{ asset('template-web/img/sliders/diseno-creativo-blog-clon.jpg') }})">
            <div class="caption">
                <h6>Diseño / Creatividad / Marca</h6>
                <h1>Diseño <span>Creativo</span></h1>
                <a class="btn btn-transparent page-scroll" href="#services">Más Información</a><a class="btn btn-light page-scroll" href="#contact">Contratar</a>
            </div>
        </div>
        <div class="item" style="background-image: url({{ asset('template-web/img/sliders/codigo-limpio-blog-clon.jpg') }})">
            <div class="caption">
                <h6>Diseño / Creatividad / Marca</h6>
                <h1>Código <span>Limpio</span></h1>
                <a class="btn btn-transparent page-scroll" href="#services">Más Información</a><a class="btn btn-light page-scroll" href="#contact">Contratar</a>
            </div>
        </div>
    </div>
</section>
