


<?php $__env->startSection('content'); ?>

<div class="container">

    <h2>Edit Album</h2>

    <form method="POST" action="<?php echo e(route('albums.update', $album->album_id)); ?>">

        <?php echo csrf_field(); ?>

        <?php echo method_field('PUT'); ?>

        <div class="form-group">

            <label for="nama_album">Album Name</label>

            <input type="text" class="form-control" id="nama_album" name="nama_album" value="<?php echo e($album->nama_album); ?>" required>

        </div>

        <div class="form-group">

            <label for="deskripsi">Description</label>

            <textarea class="form-control" id="deskripsi" name="deskripsi" required><?php echo e($album->deskripsi); ?></textarea>

        </div>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\STELLA 02\ukk_telkom\resources\views/albums/edit.blade.php ENDPATH**/ ?>