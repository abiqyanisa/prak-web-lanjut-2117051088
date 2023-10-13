<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class=" row p-5 justify-content-center">
    <div class="col-sm-10">
        <!-- TITLE -->
        <h1 class="display-5">Data Mahasiswa</h1>
        
        <!-- ADD DATA -->
        <a type="button" class="btn btn-success" href="<?= base_url('user/create') ?>" >Tambah Data</a><br>
        
        <!-- SESSION SUCCESS -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <!-- TABLE -->
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($users as $user) {
                ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td>
                            <img src="<?= $user['foto'] ?? '<default-foto>' ?>" class="rounded-circle" width="50" height="50">
                            <?= $user['nama'] ?>
                        </td>
                        <td><?= $user['npm'] ?></td>
                        <td><?= $user['nama_kelas'] ?></td>
                        <td>
                            <a type="button" class="btn btn-primary" href="<?= base_url('user/' . $user['id']) ?>">Detail</a>
                            <button type="button" class="btn btn-warning">Edit</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>