<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">

      <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo e(route('admin-index')); ?>">Escritorio</a></li>
        </ul>
      </li>

      <li><a><i class="fa fa-bookmark"></i> Category <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo e(route('admin.category.index')); ?>">Inicio</a></li>
          <li><a href="<?php echo e(route('admin.category.create')); ?>">Crear</a></li>
        </ul>
      </li>

      <li><a><i class="fa fa-pencil"></i> Publicaciones <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="index.html">Inicio</a></li>
          <li><a href="index.html">Crear</a></li>
        </ul>
      </li>

      <li><a><i class="fa fa-tag"></i> Tags <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="index.html">Inicio</a></li>
          <li><a href="index.html">Crear</a></li>
        </ul>
      </li>

    </ul>
  </div>
  <div class="menu_section">
    <h3>WEB</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-globe"></i> Páginas <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo e(route('index')); ?>">Blog Clon</a></li>
        </ul>
      </li>

      <li><a><i class="fa fa-paint-brush"></i> Diseño <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo e(route('admin.design.index')); ?>">Inicio</a></li>
          <li><a href="<?php echo e(route('admin.design.create')); ?>">Crear</a></li>
        </ul>
      </li>

      <li><a><i class="fa fa-briefcase"></i> Servicios <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo e(route('admin.service.index')); ?>">Inicio</a></li>
          <li><a href="<?php echo e(route('admin.service.create')); ?>">Crear</a></li>
        </ul>
      </li>

      <li><a><i class="fa fa-cubes"></i> Cursos <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo e(route('admin.course.index')); ?>">Inicio</a></li>
          <li><a href="<?php echo e(route('admin.course.create')); ?>">Crear</a></li>
        </ul>
      </li>

      <li><a><i class="fa fa-youtube-play"></i> Videos <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo e(route('admin.video.index')); ?>">Inicio</a></li>
          <li><a href="<?php echo e(route('admin.video.create')); ?>">Crear</a></li>
        </ul>
      </li>

    </ul>

  </div>

</div>
