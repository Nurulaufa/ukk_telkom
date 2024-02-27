


<?php $__env->startSection('content'); ?>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="foto-detail">

<img src="<?php echo e(Storage::url($foto->lokasi_file)); ?>" class="img-fluid" alt="<?php echo e($foto->judul_foto); ?>">

<h3 class="mt-3"><?php echo e($foto->judul_foto); ?></h3>

<p><?php echo e($foto->deskripsi_foto); ?></p>

<form action="<?php echo e(route('like.toggle')); ?>" method="POST">

    <?php echo csrf_field(); ?>

    <input type="hidden" name="foto_id" value="<?php echo e($foto->foto_id); ?>">

    <button type="submit" class="btn <?php echo e($foto->likes->contains('user_id', auth()->id()) ? 'btn-success' : 'btn-outline-success'); ?>">

        Like | <?php echo e($foto->likes->count()); ?>


    </button>

</form>                

<div class="badge badge-primary">Uploaded by: <?php echo e($foto->user->name); ?></div>

<div class="badge badge-secondary">Album: <?php echo e($foto->album->nama_album); ?></div>

<!-- Tampilkan jumlah komentar -->

<div class="badge badge-info"><?php echo e($foto->komentars->count()); ?> komentar</div>

</div>
            <?php $__currentLoopData = $foto->komentars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $komentar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="komentar">

                <p><strong><?php echo e($komentar->user->name); ?>:</strong> <?php echo e($komentar->isi_komentar); ?></p>

                <p class="text-muted"><?php echo e($komentar->created_at->diffForHumans()); ?></p>

            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <!-- Formulir untuk menambah komentar baru -->

            <?php if(Auth::check()): ?>

            <form action="<?php echo e(route('komentar.store')); ?>" method="POST">

                <?php echo csrf_field(); ?>

                <input type="hidden" name="foto_id" value="<?php echo e($foto->foto_id); ?>">

                <div class="form-group">

                    <textarea name="isi_komentar" class="form-control" rows="3" placeholder="Tambahkan komentar..." required></textarea>

                </div>

                <button type="submit" class="btn btn-primary">Kirim Komentar</button>

            </form>

            <?php endif; ?>

            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\STELLA 02\ukk_telkom\resources\views/fotos/show.blade.php ENDPATH**/ ?>