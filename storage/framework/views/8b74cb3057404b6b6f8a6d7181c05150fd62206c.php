<?php $__env->startSection('content'); ?>

    <div class="box" style="margin-top: 20px; padding: 15px">
        <h3>From: <?php echo e($message->name); ?></h3>
        <h3>Mobile: <?php echo e($message->mobile); ?></h3>
        <h3>Email: <?php echo e($message->email); ?></h3>
        <br><br>
        <h4>Message: </h4>
        <p><?php echo e($message->message); ?></p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>