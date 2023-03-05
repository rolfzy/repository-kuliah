<?php
$isi= file_get_contents('menu.json');
$daftar = json_decode($isi,true);
$daftar = $daftar["menu"];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phd Latihan
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar bg-dark" data-bs-theme="dark">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid mr-2">
    <a class="navbar-brand" href="#"><img src="img/Pizza_Hut_logo.svg.png" alt="pizza " width="120px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">All Menu</a>
      </div>
    </div>
  </div>
</nav>
</nav>

<div class="container">
  <div class="row mt-3">
    <div class="col">
      <h1>Menu</h1>
    </div>
  </div>
  <div class="row">
    <?php foreach($daftar as $row) : ?>
 
    <div class="col-md-4">
    <div class="card mb-3" >
    <img src="img/<?= $row["gambar"];?>"
     class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><?= $row["nama"];?></h5>
    <p class="card-text"><?= $row["deskripsi"];?>.</p>
    <h5 class="card-title">Rp.<?= $row["harga"];?>.-"</h5>
    <a href="#" class="btn btn-success">Add to cart</a>


      </div>
     </div>
    </div>
    <?php endforeach;?>
  </div>

</div>


    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>  </body>
</html>