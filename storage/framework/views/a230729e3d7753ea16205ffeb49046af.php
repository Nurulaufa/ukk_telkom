


<?php $__env->startSection('title', 'Home Page'); ?>


<?php $__env->startSection('content'); ?>

<div class="container">

    <h1>Welcome to the Photo Gallery</h1>

    <div class="row">

        <?php $__empty_1 = true; $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <div class="col-md-4">

                <div class="card mb-4 shadow-sm">

                    <!-- Pastikan untuk memperbarui path pada src sesuai dengan lokasi penyimpanan file Anda -->

                    <img src="<?php echo e(Storage::url($photo->lokasi_file)); ?>" class="bd-placeholder-img card-img-top" width="100%" height="225">

                    <div class="card-body">

                        <p class="card-text"><?php echo e($photo->deskripsi_foto); ?></p>

                    </div>

                </div>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <p>No photos to display.</p>

        <?php endif; ?>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\STELLA 02\ukk_telkom\resources\views/home.blade.php ENDPATH**/ ?>