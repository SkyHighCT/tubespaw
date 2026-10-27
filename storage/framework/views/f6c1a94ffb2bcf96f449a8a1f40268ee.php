<?php $edit = isset($penghuni); ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo e($edit ? 'Edit' : 'Tambah'); ?> Penghuni Kos</title>
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <div class="container">
    <h2><?php echo e($edit ? 'Edit Data Penghuni' : 'Tambah Penghuni Kos'); ?></h2>

    <form method="POST"
          action="<?php echo e($edit ? route('penghuni.update', $penghuni->id) : route('penghuni.store')); ?>">
        <?php echo csrf_field(); ?>
        <?php if($edit): ?>
            <?php echo method_field('PUT'); ?>
        <?php endif; ?>

        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" value="<?php echo e(old('nama', $penghuni->nama ?? '')); ?>">
            <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error">* <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
            <label for="no_ktp">Nomor KTP</label>
            <input type="text" id="no_ktp" name="no_ktp" value="<?php echo e(old('no_ktp', $penghuni->no_ktp ?? '')); ?>">
            <?php $__errorArgs = ['no_ktp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error">* <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" id="pekerjaan" name="pekerjaan" value="<?php echo e(old('pekerjaan', $penghuni->pekerjaan ?? '')); ?>">
            <?php $__errorArgs = ['pekerjaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error">* <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
            <label for="no_kamar">No. Kamar</label>
            <select id="no_kamar" name="no_kamar">
                <option value="">-- Pilih --</option>
                <?php $__currentLoopData = $daftarKamar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kamar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($kamar); ?>" <?php echo e(old('no_kamar', $penghuni->no_kamar ?? '') == $kamar ? 'selected' : ''); ?>><?php echo e($kamar); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['no_kamar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error">* <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
            <label for="kontak_darurat">Kontak Darurat</label>
            <input type="text" id="kontak_darurat" name="kontak_darurat" value="<?php echo e(old('kontak_darurat', $penghuni->kontak_darurat ?? '')); ?>">
            <?php $__errorArgs = ['kontak_darurat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error">* <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="btn-group">
            <a href="<?php echo e(route('penghuni.index')); ?>" class="btn btn-batal">Batal</a>
            <button type="submit" class="btn btn-simpan"><?php echo e($edit ? 'Update Data' : 'Simpan Data'); ?></button>
        </div>
    </form>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\tubespawdanpraktikum\resources\views/penghuni/form.blade.php ENDPATH**/ ?>