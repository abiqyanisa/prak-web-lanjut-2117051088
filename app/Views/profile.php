<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <b><a class="navbar-brand" href="#">Profile</a></b>
        </div>
    </nav>
    <div style="text-align:center;">
        <img src="<?=base_url('assets/img/abiy.jpg') ?>" alt="fotoroy" style="height: 200px; width: 200px; border-radius: 50%; object-fit: cover; object-position: 0 0px;"  border="2px" ><br>
        <b><p><h3>Hi</h3></p></b> 
        <button type="button" class="btn btn-primary" style="width: 300px;"><?= $nama ?></button><br><br>
        <button type="button" class="btn btn-primary" style="width: 300px;"><?= $kelas ?></button><br><br>
        <button type="button" class="btn btn-primary" style="width: 300px;"><?= $npm ?></button><br><br>
    </div>
    
<?= $this->endSection()?>