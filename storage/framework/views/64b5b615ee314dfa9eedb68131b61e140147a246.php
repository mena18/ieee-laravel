<?php $__env->startSection('title'); ?>
	IEEE MAGAZINE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('caption'); ?>
	<h2>IEEE MAGAZINE</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <section class="magazines">
    <div class="container">
      <div class="magazine-preview">
        <iframe sandbox="allow-scripts" width="800px" height="700px" src="<?php echo e($magazine->url); ?>" frameborder="0" allowfullscreen allowtransparency></iframe>
      </div>

    </div>
  </section >


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.body',['headerClass'=>'events-hero','active'=>'magazine','script'=>'magazine'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>