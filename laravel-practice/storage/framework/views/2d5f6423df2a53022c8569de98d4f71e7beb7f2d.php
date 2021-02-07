<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    
                    <?php if(session()->has('message')): ?>
                    <div class="alert alert-success"><?php echo e(session()->get('message')); ?></div>
                    <?php elseif(session()->has('error')): ?>
                    <div class="alert alert-danger"><?php echo e(session()->get('error')); ?></div>
                    <?php endif; ?>
                    <form action="/upload" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="file" name="image"/>
                    <input type="submit" value="upload"/>
                    </form>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sunny\laravel\sun\resources\views/home.blade.php ENDPATH**/ ?>