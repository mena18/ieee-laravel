<?php $__env->startSection('content'); ?>


    <h1>Messages</h1>
    <div class="box" style="margin-top: 20px">
        <div class="box-header">
            <h3 class="box-title">All Messages</h3>
        </div>
        <div class="box-body">
            <table id="mega_attendees" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">mobile</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sent At (DD/MM/YYYY)</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php $counter=1; ?>
                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id='<?php echo e($message->id); ?>'>
                        <td><?php echo e($counter); ?></td><?php $counter++; ?>
                        <td><?php echo e($message->name); ?></td>
                        <td><?php echo e($message->mobile); ?></td>
                        <td><?php echo e($message->email); ?></td>
                        <td><?php echo e($message->created_at->format('d/m/Y H:i')); ?></td>
                        <td>
                            <a href="<?php echo e(route('messages.show',$message->id)); ?>" class="btn btn-primary"><i class="fa fa-book"></i> Read Message</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">mobile</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sent At (DD/MM/YYYY)</th>
                    <th scope="col"></th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>