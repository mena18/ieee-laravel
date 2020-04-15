<?php $__env->startSection('content'); ?>
   

<h1>Gallery</h1>
<?php if(Auth::user()->admin == 1 || Auth::user()->admin == 2): ?>
    <a href="<?php echo e(route('gallery.create')); ?>" class="btn btn-success">Add New Image</a>
<?php endif; ?>


<div class="box" style="margin-top: 20px">
    <div class="box-header">
        <h3 class="box-title">Gallary</h3>
    </div>
    <div class="box-body">
        <table id="mega_attendees" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Event</th>
                <th scope="col">Description</th>
                <?php if(Auth::user()->admin == 1 || Auth::user()->admin == 2): ?>
                    <th scope="col"></th>
                <?php endif; ?>
            </tr>
            </thead>
            <tbody>
            <?php $counter=1; ?>
            <?php $__currentLoopData = $gallerys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr id='<?php echo e($gallery->id); ?>'>
                    <td><?php echo e($counter); ?></td><?php $counter++; ?>
                    <td><img src="<?php echo e(URL::to($gallery->url)); ?>"></td>
                    <td><?php echo e($gallery->event['title']); ?></td>
                    <td><?php echo $gallery->description; ?></td>
                    <?php if(Auth::user()->admin == 1 || Auth::user()->admin == 2): ?>
                        <td>
                            <a href="<?php echo e(route('gallery.edit',$gallery->id)); ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                            <?php $var = 'gallery.delete' ?>
                            <button   onclick="del('<?php echo e(route($var,$gallery->id)); ?>')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Event</th>
                <th scope="col">Description</th>
                <?php if(Auth::user()->admin == 1 || Auth::user()->admin == 2): ?>
                    <th scope="col"></th>
                <?php endif; ?>
            </tr>
            </tfoot>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>