<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="<?= base_url('/user/store') ?>" method="POST">
    <div class="mb-3">
        <label for="exampleInputNama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="input-nama" name="nama" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputKelas" class="form-label">Kelas</label>
        <input type="text" class="form-control" id="input-kelas" name="kelas" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputNPM" class="form-label">NPM</label>
        <input type="text" class="form-control" id="input-npm" name="npm" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>