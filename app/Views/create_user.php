<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

<div class=" row p-5 justify-content-start">
    <div class="col">
        <h1 class="display-5">Tambah Mahasiswa</h1>
        <form action="<?= base_url('/user/store') ?>" method="POST" enctype="multipart/form-data">
            
            <!-- FOTO -->
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="formFile" name="foto">
            </div>

            <!-- NAMA -->
            <div class="mb-3">
                <label for="exampleInputNama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="input-nama" name="nama" value="<?= old('nama') ?>" aria-describedby="emailHelp">
            </div>

            <!-- KELAS -->
            <div class="mb-3">
            <label for="exampleInputKelas" class="form-label">Kelas</label>
                <select name="kelas" id="kelas" class="form-select" >
                    <?php
                    foreach ($kelas as $item) {
                    ?>
                        <option value="<?= $item['id'] ?>">
                            <?= $item['nama_kelas'] ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <!-- NPM -->
            <div class="mb-3">
                <label for="exampleInputNPM" class="form-label">NPM</label>
                <input type="text" class="form-control" id="input-npm" name="npm" value="<?= old('npm') ?>" aria-describedby="emailHelp">
            </div>
            <?php if (session()->getFlashdata('errors')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('errors') ?>
                </div>
            <?php endif; ?>
            
            <!-- BUTTON -->
            <button type="submit" class="btn btn-primary">Submit</button>
        
        </form>
    </div>
    

<?= $this->endSection()?>