

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h3>Kemaskini Maklumat Pelajar</h3>
    <form action="<?php echo e(route('students.update', $student->id)); ?>" method="POST">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label>Kod Pelajar</label>
            <input type="text" name="student_code" class="form-control" value="<?php echo e($student->student_code); ?>" readonly>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="<?php echo e($student->name); ?>" required>
        </div>
        <div class="mb-3">
            <label>Kursus</label>
            <input type="text" name="course" class="form-control" value="<?php echo e($student->course); ?>" required>
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="remarks" class="form-control"><?php echo e($student->remarks); ?></textarea>
        </div>
        <button class="btn btn-primary">Kemaskini</button>
        <a href="<?php echo e(route('students.index')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Laravel student crud\student_crud\resources\views/students/edit.blade.php ENDPATH**/ ?>