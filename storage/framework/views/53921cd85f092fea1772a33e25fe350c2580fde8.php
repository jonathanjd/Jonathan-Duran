<section class="p-b-40 background-grey">
            <div class="container">

                <div class="heading heading text-left">
                    <h2>Nuestro Blog</h2>
                    <span class="lead">Información actual sobre temas de tecnología, web, programación y más. </span>
                </div>
            </div>

            <div id="blog">
                <div class="container">
                    <!-- Blog post-->
                    <div class="post-content post-modern post-block post-4-columns">
                        <!-- Blog image post-->
                        <?php foreach($posts as $post): ?>

                          <div class="post-item" data-animation="flipInY" data-animation-delay="0">
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

                                    <?php echo e(str_limit(strip_tags($post->content),200,'...')); ?>


                                      <div class="post-info">
                                          <a class="read-more" href="<?php echo e(route('blog_post', $post->slug)); ?>">Leer Más <i class="fa fa-long-arrow-right"></i></a>
                                      </div>
                                  </div>

                              </div>

                              <div class="post-meta">
                                  <div class="post-date">
                                      <span class="post-date-day"><?php echo e($post->created_at->format('d')); ?></span>
                                      <span class="post-date-month"><?php echo e($post->created_at->formatLocalized('%B')); ?></span>
                                      <span class="post-date-year"></span>
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

                        <!-- Blog slider post-->

                    </div>
                    <!-- END: Blog post-->
                </div>
            </div>
        </section>
