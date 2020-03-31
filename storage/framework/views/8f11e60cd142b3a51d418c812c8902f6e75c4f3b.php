<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo e(URL::to('design/adminlte')); ?>/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>IEEE <?php echo e(ucfirst(Auth::user()->name)); ?></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN CONTENT</li>
        <?php if(Auth::user()->admin == 1 || Auth::user()->admin == 2): ?>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span> Add New </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">

              <li ><a href="<?php echo e(route('event.create')); ?>"><i class="fa fa-circle-o"></i> Events </a></li>
              <?php if(Auth::user()->admin == 1): ?>
                <li ><a href="<?php echo e(route('mega.create')); ?>"><i class="fa fa-circle-o"></i> Mega </a></li>
              <?php endif; ?>
              <li ><a href="<?php echo e(route('gallery.create')); ?>"><i class="fa fa-circle-o"></i> Photo in Gallery </a></li>
              <?php if(Auth::user()->admin == 1): ?>
                <li ><a href="<?php echo e(route('volunteer.create')); ?>"><i class="fa fa-circle-o"></i> Volunteers </a></li>
              <?php endif; ?>
              <li ><a href="<?php echo e(route('news.create')); ?>"><i class="fa fa-circle-o"></i> News </a></li>
              <?php if(Auth::user()->admin == 1): ?>
                <li ><a href="<?php echo e(route('course.create')); ?>"><i class="fa fa-circle-o"></i> Course </a></li>
              <?php endif; ?>


            </ul>
          </li>
        <?php endif; ?>
        <li><a href="<?php echo e(route('messages.home')); ?>"><i class="fa fa-commenting" aria-hidden="true"></i> Messages</a></li>
        <li>
          <a href="<?php echo e(route('event.home')); ?>"><i class="fa fa-table"></i> <span>Events</span></a>
        </li>

        <li>
          <a href="<?php echo e(route('mega.home')); ?>"><i class="fa fa-table"></i> <span>Mega</span></a>
        </li>

        <li>
          <a href="<?php echo e(route('gallery.home')); ?>"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Gallery</span></a>
        </li>

        <li>
          <a href="<?php echo e(route('volunteer.home')); ?>"><i class="fa fa-users" aria-hidden="true"></i> <span>Volunteers</span></a>
        </li>

        <li>
          <a href="<?php echo e(route('news.home')); ?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>News</span></a>
        </li>

        <li>
          <a href="<?php echo e(route('courses.home')); ?>"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Courses</span></a>
        </li>



        <li class="header">IMPORTANT CONTENT</li>
        <li><a href="<?php echo e(route('attendee.event')); ?>"><i class="fa fa-circle-o text-aqua"></i> <span>Event Attendees</span></a></li>
        <li><a href="<?php echo e(route('attendee.mega')); ?>"><i class="fa fa-circle-o text-yellow"></i> <span>Mega Event Attendees</span></a></li>
        <li><a href="<?php echo e(route('certificate.home')); ?>"><i class="fa fa-circle-o text-red"></i> <span>Certificates</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>