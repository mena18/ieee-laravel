<?php $__env->startSection('content'); ?>


<h1>Volunteers</h1>
<?php if(Auth::user()->admin == 1): ?>
    <a href="<?php echo e(route('volunteer.create')); ?>" class="btn btn-success">+ Add New volunteers</a>
<?php endif; ?>


<div class="box" style="margin-top: 20px">
    <div class="box-header">
        <h3 class="box-title">Volunteers</h3>
    </div>
    <div class="box-body">
        <table id="mega_attendees" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Committee</th>
                <?php if(Auth::user()->admin == 1 || Auth::user()->admin == 2): ?>
                    <th scope="col"></th>
                <?php endif; ?>
            </tr>
            </thead>
            <tbody>
            <?php $counter=1; ?>
            <?php $__currentLoopData = $volunteers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $volunteer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr id='<?php echo e($volunteer->id); ?>'>
                    <td><?php echo e($counter); ?></td><?php $counter++; ?>
                    <td><img src="<?php echo e(URL::to($volunteer->img)); ?>"></td>
                    <td><?php echo e($volunteer->name); ?></td>
                    <td><?php echo e($volunteer->committee); ?></td>
                    <?php if(Auth::user()->admin == 1 || Auth::user()->admin == 2): ?>
                        <td>
                            <a href="<?php echo e(route('volunteer.edit',$volunteer->id)); ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                            <?php $var = 'volunteer.delete' ?>
                            <?php if(Auth::user()->admin == 1): ?>
                                <?php $var = 'volunteer.delete' ?>
                                <button onclick="del('<?php echo e(route($var,$volunteer->id)); ?>')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
                            <?php endif; ?>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Committee</th>
                <?php if(Auth::user()->admin == 1 || Auth::user()->admin == 2): ?>
                    <th scope="col"></th>
                <?php endif; ?>
            </tr>
            </tfoot>
        </table>
    </div>
</div>
<?php if(Auth::user()->admin == 1 || Auth::user()->admin == 3): ?>
    <a href="<?php echo e(route('volunteer.download')); ?>" class="btn btn-success">Download</a>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>