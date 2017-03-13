<?php $__env->startSection('title','Blog'); ?>
<?php $__env->startSection('meta'); ?>
  <meta name="Subject" content="creamos sitios web económico" />
  <meta name="description" content="Información actual sobre nuesvas tecnologías, tips para tus negocios web, novedades y muchos más" />
  <meta name="Keywords" content="crear pagina web, como crear una pagina web, diseños web, paginas web, servicios web, noticias web" />
  <!-- sample fb meta -->
  <meta property="og:title" content="Blog - blogClon" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo e(route('blog')); ?>" />
  <meta property="og:image" content="<?php echo e(asset('imagen/facebook-share-blog.jpg')); ?>" />
  <meta property="og:description" content="Blog - Creamos sitios web de alta calidad, Diseño web, Aplicaciones Web, Blog Clon ofrece páginas web accesibles, posicionamiento en buscadores, servicios profesionales en sitios web, paginas web dinamicas. Diseño de paginas web económicas."/>
  <meta property="fb:app_id" content="294735130942812" />

  <!-- sample twitter meta -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@ClonBlog">
  <meta name="twitter:creator" content="@ClonBlog">
  <meta name="twitter:title" content="Blog - blogClon">
  <meta name="twitter:description" content="Blog - Creamos sitios web de alta calidad, Diseño web, Aplicaciones Web, Blog Clon ofrece páginas web accesibles, posicionamiento en buscadores, servicios profesionales en sitios web, paginas web dinamicas. Diseño de paginas web económicas.">
  <meta name="twitter:image" content="<?php echo e(asset('imagen/facebook-share-blog.jpg')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content_part'); ?>


  <section id="page-title" style="background: url('/template-polo/images/parallax/blog-blog-clon.jpg')" data-stellar-background-ratio="0.6" class="page-title-center page-title-animate page-title-parallax text-light">
    <div class="background-overlay"></div>
    <div class="container">
      <div class="page-title col-md-8 text-shadow-dark">
        <h1 class="text-uppercase text-medium">BLOG</h1>
        <span>Información actual sobre temas de tecnología, web, programación y más.</span>
      </div>
      <div class="breadcrumb col-md-4">
        <ul>
          <li>
            <a href="<?php echo e(route('index')); ?>"><i class="fa fa-home"></i></a>
          </li>
          <li class="active">
            <a href="#">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </section>

<!-- CONTENT -->
<section class="content">
	<div class="container">
		<div class="row">
			<!-- Blog post-->
			<div class="post-content col-md-9">
				<!-- Blog image post-->
        <?php foreach($posts as $post): ?>
          <div class="post-item">
  					<div class="post-image">
  						<a href="#">
  							<img alt="" src="<?php echo e(asset('post/'.$post->images[0]->name)); ?>">
  						</a>
  					</div>
  					<div class="post-content-details">
  						<div class="post-title">
  							<h3><a href="<?php echo e(route('blog_post', $post->slug)); ?>"><?php echo e($post->title); ?></a></h3>
  						</div>
  						<div class="post-info">
  							<span class="post-autor">Publicado por: <a href="#"><?php echo e($post->user->name); ?></a></span>
  							<span class="post-category">en <a href="#"><?php echo e($post->category->name); ?></a></span>
  						</div>
  						<div class="post-description text-justify">

                <?php echo e(str_limit(strip_tags($post->content), 300, '...')); ?>


  							<div class="post-read-more">
                  <br>
  								<a class="read-more" href="<?php echo e(route('blog_post', $post->slug)); ?>">Leer Más <i class="fa fa-long-arrow-right"></i></a>
  							</div>
  						</div>
  					</div>

  					<div class="post-meta">
  						<div class="post-date">
  							<span class="post-date-day"><?php echo e($post->created_at->format('d')); ?></span>
  							<span class="post-date-month"><?php echo e($post->created_at->format('F')); ?></span>
  							<span class="post-date-year"><?php echo e($post->created_at->format('Y')); ?></span>
  						</div>

  						<div class="post-comments">
  							<a href="#">
  								<i class="fa fa-comments-o"></i>
  								<span class="post-comments-number"><i class="fa fa-check"></i></span>
  							</a>
  						</div>
  						<div class="post-comments">
  							<a href="#">
  								<i class="fa fa-share-alt"></i>
  								<span class="post-comments-number"><i class="fa fa-smile-o"></i></span>
  							</a>
  						</div>
  					</div>
  				</div>
        <?php endforeach; ?>


				<!-- pagination nav -->
				<div class="text-center">
				    <?php echo e($posts->links()); ?>

				</div>
			</div>
			<!-- END: Blog post-->

			<!-- Sidebar-->
			<div class="sidebar sidebar-modern col-md-3">

        <!--widget tweeter-->
        <div class="widget clearfix">

          <a class="twitter-timeline" href="https://twitter.com/ClonBlog" data-tweet-limit="3">Tweets Por ClonBlog</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

        </div>
        <!--end: widget tweeter-->

        <!--widget facebook-->
        <div class="widget clearfix">

          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fblogclon%2F%3Ffref%3Dts&tabs=timeline&width=240&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1778159405806323" width="240" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

        </div>
        <!--end: widget facebook-->

				<!--widget contact us-->
				<div class="widget clearfix widget-contact-us" style="background-image: url('/template-polo/images/world-map.png'); background-position: 50% 55px; background-repeat: no-repeat">
					<h4 class="widget-title">Contactanos</h4>
					<ul class="list-large list-icons">
						<li><i class="fa fa-map-marker"></i>
							<strong>Dirección:</strong>Calle Eulalia Buroz, Cayaurima
							<br>Anzoátegui, Venezuela</li>
						<li><i class="fa fa-phone"></i><strong>Telefono:</strong> (0426) 182-5677 </li>
						<li><i class="fa fa-envelope"></i><strong>Correo:</strong> <a href="mailto:info@blogclon.com.ve">info@blogclon.com.ve</a>
						</li>
						<li><i class="fa fa-clock-o"></i>Lunes - Viernes: <strong>08:00AM - 05:00PM</strong>
							<br>Sabado, Domingo: <strong>Cerrado</strong>
						</li>
					</ul>
				</div>
				<!--end: widget contact us-->

				<!--widget blockquote -->
				<div class="widget clearfix widget-blockquote">
					<h4 class="widget-title">Frase del Día</h4>
					<blockquote class="blockquote-simple">
						<p>La tecnología no es nada. Lo importante es que tengas fe en la gente, que sean básicamente buenas e inteligentes, y si les das herramientas, harán cosas maravillosas con ellas.</p>
						<small>Por <cite>Steve Jobs</cite></small>
					</blockquote>
				</div>
				<!--end: widget blockquote -->

			</div>
			<!-- END: Sidebar-->
		</div>
	</div>
</section>
<!-- END: SECTION -->

<!-- Social -->
<section class="p-b-0">
  <div class="container">
    <div class="row">
      <!-- Buttons start here. Copy this ul to your document. -->
      <ul class="rrssb-buttons clearfix">
        <li class="rrssb-email">
          <!-- Replace subject with your message using URL Encoding: http://meyerweb.com/eric/tools/dencoder/ -->
          <a href="mailto:?Subject=your%20subject">
            <span class="rrssb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M20.11 26.147c-2.335 1.05-4.36 1.4-7.124 1.4C6.524 27.548.84 22.916.84 15.284.84 7.343 6.602.45 15.4.45c6.854 0 11.8 4.7 11.8 11.252 0 5.684-3.193 9.265-7.398 9.3-1.83 0-3.153-.934-3.347-2.997h-.077c-1.208 1.986-2.96 2.997-5.023 2.997-2.532 0-4.36-1.868-4.36-5.062 0-4.75 3.503-9.07 9.11-9.07 1.713 0 3.7.4 4.6.972l-1.17 7.203c-.387 2.298-.115 3.3 1 3.4 1.674 0 3.774-2.102 3.774-6.58 0-5.06-3.27-8.994-9.304-8.994C9.05 2.87 3.83 7.545 3.83 14.97c0 6.5 4.2 10.2 10 10.202 1.987 0 4.09-.43 5.647-1.245l.634 2.22zM16.647 10.1c-.31-.078-.7-.155-1.207-.155-2.572 0-4.596 2.53-4.596 5.53 0 1.5.7 2.4 1.9 2.4 1.44 0 2.96-1.83 3.31-4.088l.592-3.72z"/></svg></span>
            <span class="rrssb-text">email</span>
          </a>
        </li>
        <li class="rrssb-facebook">
          <!--  Replace with your URL. For best results, make sure you page has the proper FB Open Graph tags in header: https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/ -->
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(route('blog')); ?>" class="popup">
            <span class="rrssb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29"><path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"/></svg></span>
            <span class="rrssb-text">facebook</span>
          </a>
        </li>
        <li class="rrssb-twitter">
          <!-- Replace href with your Meta and URL information  -->
          <a href="https://twitter.com/intent/tweet?text=<?php echo e(route('blog')); ?>"
          class="popup">
            <span class="rrssb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z"/></svg></span>
            <span class="rrssb-text">twitter</span>
          </a>
        </li>
        <li class="rrssb-linkedin">
          <!-- Replace href with your meta and URL information -->
          <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo e(route('blog')); ?>&amp;title=Blog%20Clone%20Creamos%20Sitios%20Web&amp;summary=Responsive%20social%20icons%20by%20KNI%20Labs" class="popup">
            <span class="rrssb-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M25.424 15.887v8.447h-4.896v-7.882c0-1.98-.71-3.33-2.48-3.33-1.354 0-2.158.91-2.514 1.802-.13.315-.162.753-.162 1.194v8.216h-4.9s.067-13.35 0-14.73h4.9v2.087c-.01.017-.023.033-.033.05h.032v-.05c.65-1.002 1.812-2.435 4.414-2.435 3.222 0 5.638 2.106 5.638 6.632zM5.348 2.5c-1.676 0-2.772 1.093-2.772 2.54 0 1.42 1.066 2.538 2.717 2.546h.032c1.71 0 2.77-1.132 2.77-2.546C8.056 3.593 7.02 2.5 5.344 2.5h.005zm-2.48 21.834h4.896V9.604H2.867v14.73z"/></svg>
            </span>
            <span class="rrssb-text">linkedin</span>
          </a>
        </li>
        <li class="rrssb-googleplus">
          <!-- Replace href with your meta and URL information.  -->
          <a href="https://plus.google.com/share?url=<?php echo e(route('blog')); ?>" class="popup">
            <span class="rrssb-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 8.29h-1.95v2.6h-2.6v1.82h2.6v2.6H21v-2.6h2.6v-1.885H21V8.29zM7.614 10.306v2.925h3.9c-.26 1.69-1.755 2.925-3.9 2.925-2.34 0-4.29-2.016-4.29-4.354s1.885-4.353 4.29-4.353c1.104 0 2.014.326 2.794 1.105l2.08-2.08c-1.3-1.17-2.924-1.883-4.874-1.883C3.65 4.586.4 7.835.4 11.8s3.25 7.212 7.214 7.212c4.224 0 6.953-2.988 6.953-7.082 0-.52-.065-1.104-.13-1.624H7.614z"/></svg>            </span>
            <span class="rrssb-text">google+</span>
          </a>
        </li>
        <li class="rrssb-pinterest">
          <!-- Replace href with your meta and URL information.  -->
          <a href="http://pinterest.com/pin/create/button/?url=<?php echo e(route('blog')); ?>&amp;media=<?php echo e(asset('imagen/facebook-share-blog.jpg')); ?>&amp;description=Creamos%20Sitios%20Web%20Únicos%20y%20Seguros.">
            <span class="rrssb-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M14.02 1.57c-7.06 0-12.784 5.723-12.784 12.785S6.96 27.14 14.02 27.14c7.062 0 12.786-5.725 12.786-12.785 0-7.06-5.724-12.785-12.785-12.785zm1.24 17.085c-1.16-.09-1.648-.666-2.558-1.22-.5 2.627-1.113 5.146-2.925 6.46-.56-3.972.822-6.952 1.462-10.117-1.094-1.84.13-5.545 2.437-4.632 2.837 1.123-2.458 6.842 1.1 7.557 3.71.744 5.226-6.44 2.924-8.775-3.324-3.374-9.677-.077-8.896 4.754.19 1.178 1.408 1.538.49 3.168-2.13-.472-2.764-2.15-2.683-4.388.132-3.662 3.292-6.227 6.46-6.582 4.008-.448 7.772 1.474 8.29 5.24.58 4.254-1.815 8.864-6.1 8.532v.003z"/></svg>
            </span>
            <span class="rrssb-text">pinterest</span>
          </a>
        </li>
      </ul>
      <!-- Buttons end here -->
      <hr class="space">

    </div>
  </div>
</section>
<!-- END: SOCIAL -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('polo.main.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>