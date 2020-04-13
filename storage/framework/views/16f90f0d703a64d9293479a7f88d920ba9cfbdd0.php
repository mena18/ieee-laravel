<?php $__env->startSection('content'); ?>

    <?php if(count($errors)>0): ?>
      <?php if(!is_array($errors)){$errors = $errors->all();}?>
      <?php echo $__env->make('inc.errors',['errors'=>$errors], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo e($numberOfAttendees); ?></h3>

              <p>Event Attendees</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-contact"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo e($numberOfEvents); ?></h3>

              <p>Event</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo e($numberOfVolunteers); ?></h3>

              <p>Volunteer</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo e($numberOfMegaAttendees); ?></h3>

              <p>Mega Events Attendee</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>