


<?php $__env->startSection('content'); ?>

<div class="container">

    <h2>Add New Foto</h2>

    <form method="POST" action="<?php echo e(route('foto.store')); ?>" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <div class="form-group">

            <label for="judul_foto">Judul Foto</label>

            <input type="text" class="form-control" id="judul_foto" name="judul_foto" required>

        </div>

        <div class="form-group">

            <label for="deskripsi_foto">Deskripsi</label>

            <textarea class="form-control" id="deskripsi_foto" name="deskripsi_foto"></textarea>

        </div>

        <div class="form-group">

            <label for="lokasi_file">File Foto</label>

            <input type="file" class="form-control-file" id="lokasi_file" name="lokasi_file" required>

        </div>

        <div class="form-group">

            <label for="album_id">Album</label>

            <select class="form-control" id="album_id" name="album_id">

                <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <option value="<?php echo e($album->album_id); ?>"><?php echo e($album->nama_album); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\STELLA 02\ukk_telkom\resources\views/fotos/create.blade.php ENDPATH**/ ?>