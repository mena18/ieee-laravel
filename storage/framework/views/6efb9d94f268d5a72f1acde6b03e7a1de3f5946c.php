<?php $__env->startSection('content'); ?>
   

<h1>Mega Events </h1>
<?php if(Auth::user()->admin == 1): ?>
    <a href="<?php echo e(route('mega.create')); ?>" class="btn btn-success">Create New Mega Event</a>
<?php endif; ?>


<div class="box" style="margin-top: 20px">
    <div class="box-header">
        <h3 class="box-title">Mega Events</h3>
    </div>

    <div class="box-body">
        <table id="mega_attendees" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Registration</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php $counter=1; ?>
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr id='<?php echo e($event->id); ?>'>
                    <td><?php echo e($counter); ?></td><?php $counter++; ?>
                    <td><img src="<?php echo e(URL::to($event->image)); ?>"></td>
                    <td><?php echo e($event->title); ?></td>
                    <td>
                        <?php if(Auth::user()->admin == 1 || Auth::user()->admin == 3): ?>
                            <?php if($event->event_open == 1): ?>
                                <a href="<?php echo e(route('mega.toggle',$event->id)); ?>" class="btn btn-success">Close Registration</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('mega.toggle',$event->id)); ?>" class="btn btn-danger">Open Registration</a>
                            <?php endif; ?>
                        <?php endif; ?>

                        <a href="<?php echo e(route('attendee.mega_2',$event->id)); ?>" class="btn btn-primary">Attendees</a>

                    </td>
                    <td>
                        <?php if(Auth::user()->admin == 1 || Auth::user()->admin == 2): ?>
                            <a href="<?php echo e(route('mega.edit',$event->id)); ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                        <?php endif; ?>
                        <?php if(Auth::user()->admin == 1): ?>
                            <?php $var = 'mega.delete' ?>
                            <button onclick="del('<?php echo e(route($var,$event->id)); ?>')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Registration</th>
                <th scope="col"></th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>













<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>