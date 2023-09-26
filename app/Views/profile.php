<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <b><a class="navbar-brand" href="#">Profile</a></b>
     </div>
</nav>
    <div style="text-align:center;">
        <img src="<?php echo base_url('img\abiy.jpg'); ?>" alt="fotoroy" style="height: 200px; width: 200px; border-radius: 50%; object-fit: cover; object-position: 0 0px;"  border="2px" ><br>
        <b><p><h3>Hi</h3></p></b> 
        <button type="button" class="btn btn-primary" style="width: 300px;"><?= $nama ?></button><br><br>
        <button type="button" class="btn btn-primary" style="width: 300px;"><?= $kelas ?></button><br><br>
        <button type="button" class="btn btn-primary" style="width: 300px;"><?= $npm ?></button><br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>