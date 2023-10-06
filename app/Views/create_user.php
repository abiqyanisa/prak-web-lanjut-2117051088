<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <form action="<?= base_url('/user/store') ?>" method="POST">
    <div class="mb-3">
        <label for="exampleInputNama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="input-nama" name="nama" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
    <label for="exampleInputKelas" class="form-label">Kelas</label>
        <select name="kelas" id="kelas" class="form-select">
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
    
    <div class="mb-3">
        <label for="exampleInputNPM" class="form-label">NPM</label>
        <input type="text" class="form-control" id="input-npm" name="npm" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?= $this->endSection()?>