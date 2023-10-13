<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

<div class="position-relative">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Profile</a>
        </div>
    </nav>
    <div class="p-5 d-flex justify-content-center">
        <div class="card text-center" style="width: 20rem;">
            <img src="<?= $user['foto'] ?? '<default-foto>' ?>" class="card-img-top">
            <div class="p-3 card-body">
                <h5 class="card-title"><?= $user['nama'] ?></h5>
                <p class="card-text"><?= $user['npm'] ?></p>
                <p class="card-text"><?= $user['nama_kelas'] ?></p>
            </div>
            
        </div>
    </div>
    
</div>

<?= $this->endSection()?>