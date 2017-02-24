<?php $__env->startSection('title','Index'); ?>

<?php $__env->startSection('title-content-1','Inicio Admin'); ?>

<?php $__env->startSection('main_content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="x_content">
            <div class="row">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                        </div>
                        <div class="count">179</div>

                        <h3>New Sign ups</h3>
                        <p>Lorem ipsum psdea itgum rixt.</p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-comments-o"></i>
                        </div>
                        <div class="count">179</div>

                        <h3>New Sign ups</h3>
                        <p>Lorem ipsum psdea itgum rixt.</p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                        </div>
                        <div class="count">179</div>

                        <h3>New Sign ups</h3>
                        <p>Lorem ipsum psdea itgum rixt.</p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-check-square-o"></i>
                        </div>
                        <div class="count">179</div>

                        <h3>New Sign ups</h3>
                        <p>Lorem ipsum psdea itgum rixt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <!-- Start to do list -->
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>To Do List <small>Sample tasks</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div class="">
                    <ul class="to_do">
                        <li>
                            <p>
                                <input type="checkbox" class="flat"> Schedule meeting with new client </p>
                        </li>
                        <li>
                            <p>
                                <input type="checkbox" class="flat"> Create email address for new intern</p>
                        </li>
                        <li>
                            <p>
                                <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                        </li>
                        <li>
                            <p>
                                <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                        </li>
                        <li>
                            <p>
                                <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                        </li>
                        <li>
                            <p>
                                <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                        </li>
                        <li>
                            <p>
                                <input type="checkbox" class="flat"> Create email address for new intern</p>
                        </li>
                        <li>
                            <p>
                                <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                        </li>
                        <li>
                            <p>
                                <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End to do list -->

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>