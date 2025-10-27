

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h3>Tambah Maklumat Pelajar</h3>
    <form action="<?php echo e(route('students.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label>Kod Pelajar</label>
            <input type="text" name="student_code" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kursus</label>
            <input type="text" name="course" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="remarks" class="form-control"></textarea>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="<?php echo e(route('students.index')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Laravel student crud\student_crud\resources\views/students/create.blade.php ENDPATH**/ ?>