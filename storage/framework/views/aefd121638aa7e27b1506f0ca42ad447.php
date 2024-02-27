


<?php $__env->startSection('title', 'Albums'); ?>


<?php $__env->startSection('content'); ?>

<div class="container">

    <h1>Albums</h1>

    <?php if(session('success')): ?>

    <div class="alert alert-success">

        <?php echo e(session('success')); ?>


    </div>

<?php endif; ?>

<div class="row">

        <div class="col-md-12">

            <?php if(auth()->guard()->check()): ?>

                <a href="<?php echo e(route('albums.create')); ?>" class="btn btn-primary mb-3">Tambah Album</a>

            <?php endif; ?>


        </div>

    </div>
   

    <div class="row">

    </div>

    <div class="row">

        <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-md-4">

                <div class="card mb-4 shadow-sm">

                    <div class="card-body">

                        <h5 class="card-title"><?php echo e($album->nama_album); ?></h5>

                        <p class="card-text"><?php echo e($album->deskripsi); ?></p>

                        <div class="d-flex justify-content-between align-items-center">

                            <small class="text-muted">By <?php echo e($album->user->name); ?></small>

                        </div>

                        <a href="<?php echo e(route('albums.edit', $album->album_id)); ?>" class="btn btn-info">Edit</a>


<form action="<?php echo e(route('albums.destroy', $album->album_id)); ?>" method="POST" style="display:inline">

    <?php echo csrf_field(); ?>

    <?php echo method_field('DELETE'); ?>

    <button type="submit" class="btn btn-danger">Delete</button>

</form>

                    </div>

                </div>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\STELLA 02\ukk_telkom\resources\views/albums/index.blade.php ENDPATH**/ ?>