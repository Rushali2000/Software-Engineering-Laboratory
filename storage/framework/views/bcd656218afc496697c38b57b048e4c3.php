

<?php $__env->startSection('title','Admin View Users'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid px-4">

<div class="card mt-4">
    
    <div class="card-header">
        <h4>View users
        </h4>
    </div>
    <div class="card-body">
        <?php if(session('message')): ?>
            <div class="alert alert-success"><?php echo e(session('message')); ?></div>
        <?php endif; ?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Edit</th>
                    
                </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->email); ?></td>
                    <td><?php echo e($item->role_as == '1' ? 'Admin':'Volunteer'); ?></td>
                    <td>
                        <a href="<?php echo e(url('admin/user/'.$item->id)); ?>" class="btn btn-success">Edit</a>
                    </td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp new4\htdocs\VOLUNTEER WEBSITE\volunteer_blog\resources\views/admin/user/index.blade.php ENDPATH**/ ?>