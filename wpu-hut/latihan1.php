<?php

$data = file_get_contents("data/pizza.json");


$menus = json_decode($data, true);

$menus = $menus["menu"];

var_dump($menus);


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="container">

      <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home </a>
          </li>
        </ul>
      </div>
  </div>
</nav>
  

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1>All Menu</h1>
            <div class="row">
            <?php  foreach ($menus as $menu) :?>
    <div class="col-md-4">
    <div class="card" style="width: 18rem;">
  <img src="img/american-favourite.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h2 class="card-title"><?= $menu["kategori"]?></h2>
    <h5 class="card-title"><?= $menu["nama"]?></h5>
    <p class="card-text"><?= $menu["deskripsi"]?></p>
    <h5>Rp. <?= number_format($menu["harga"], 0, '.' ,'.')?></h5>
    <a href="#" class="btn btn-primary">Gaskan</a>
  </div>
</div>
    </div>
    <?php endforeach; ?>
</div>
        </div>
    </div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  </body>
</html>