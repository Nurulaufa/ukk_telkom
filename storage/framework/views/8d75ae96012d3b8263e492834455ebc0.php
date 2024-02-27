


<?php $__env->startSection('content'); ?>

<div class="container">

<div class="row">

        <div class="col-md-12">

            <?php if(auth()->guard()->check()): ?>

                <a href="<?php echo e(route('foto.create')); ?>" class="btn btn-primary mb-3">Tambah Foto</a>

            <?php endif; ?>


        </div>

    </div>


    <div class="row">

        <?php $__currentLoopData = $fotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-md-4 mb-4">

                <div class="foto-container">

                    <a href="<?php echo e(Storage::url($foto->lokasi_file)); ?>" data-lightbox="gallery" data-title="<?php echo e($foto->judul_foto); ?>">

                        <img src="<?php echo e(Storage::url($foto->lokasi_file)); ?>" class="img-fluid foto-thumbnail" alt="<?php echo e($foto->judul_foto); ?>">

                    </a>

                    <h5 class="foto-title">

                        <a href="<?php echo e(route('foto.show', $foto->foto_id)); ?>"><?php echo e($foto->judul_foto); ?></a>

                    </h5>

                    <p class="foto-album">Album: <?php echo e($foto->album->nama_album); ?></p> <!-- Tampilkan nama album -->

                    <p class="foto-user">Uploaded by: <?php echo e($foto->user->name); ?></p> <!-- Tampilkan nama user -->

                    <div class="foto-description"><?php echo e($foto->deskripsi_foto); ?></div>

                </div>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


       

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\STELLA 02\ukk_telkom\resources\views/fotos/index.blade.php ENDPATH**/ ?>