<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Penghuni Kos</title>
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

<div class="container">
    <div class="title">
        <h1>Modul Data Penghuni</h1>
    </div>

    <?php if(session('success')): ?>
        <div class="alert"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="container2">
        <h2>Daftar Penghuni Kos</h2>
        <a href="<?php echo e(route('penghuni.create')); ?>">+ Tambah Penghuni</a>
    </div>

    <div class="table1">
        <table class="data">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>No. KTP</th>
                    <th>Pekerjaan</th>
                    <th>No. Kamar</th>
                    <th>Kontak Darurat</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $penghuni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($p->nama); ?></td>
                    <td><?php echo e($p->no_ktp); ?></td>
                    <td><?php echo e($p->pekerjaan); ?></td>
                    <td><?php echo e($p->no_kamar); ?></td>
                    <td><?php echo e($p->kontak_darurat); ?></td>
                    <td colspan="2" class="aksi">
                        <a href="<?php echo e(route('penghuni.edit', $p->id)); ?>" class="btn-aksi btn-edit">Edit</a>
                        <form action="<?php echo e(route('penghuni.destroy', $p->id)); ?>" method="POST" style="display:inline;"
                              onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn-aksi btn-hapus" style="border:none;cursor:pointer;">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="7" style="text-align:center;">Belum ada data penghuni.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
<?php /**PATH C:\laragon\www\tubespawdanpraktikum\resources\views/penghuni/index.blade.php ENDPATH**/ ?>