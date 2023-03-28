<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['title'] ?></title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid bg-primary">
    <button class="btn btn-primary m-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Menu</button>
    </div>
</nav>
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="btn-group-vertical m-5" role="group" aria-label="Vertical button group">
            <button type="button" class="btn btn-primary m-3"><a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/homeadmin/index">Home</a></button>
            <button type="button" class="btn btn-primary m-3"><a class="nav-link" href="<?= BASEURL; ?>/datacustomer">Data Customer</a></button>
            <button type="button" class="btn btn-primary m-3"><a class="nav-link" href="<?= BASEURL; ?>/dataprovider">Data Provider</a></button>
            <button type="button" class="btn btn-primary m-3"><a class="nav-link" href="<?= BASEURL; ?>/datamotor">Data Motor</a></button>
            <button type="button" class="btn btn-primary m-3"><a class="nav-link" href="<?= BASEURL; ?>/datapesanan">Data Pesanan</a></button>
            <button type="button" class="btn btn-primary m-3"><a class="nav-link" href="<?= BASEURL; ?>/login">Log out</a></button>
        </div>
    </div>
</div>

