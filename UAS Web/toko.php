<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- css -->
    <link href="style.css" rel="stylesheet">
    <!-- end css -->
    <title>Martabak Shop</title>

  </head>
  <body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark  bg-black " >
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/Rofzy_logo_Letter_M_with_Food_theme_.png" alt="Bootstrap" width="85" height="70">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pesan.php">Pesan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="About.php" >About Us</a>
                   
                  </li>
                </ul>
              </div>
              <ul class="nav nav-pills justify-content-end">
  <li class="nav-item">
    <a class="nav-link text-danger" aria-current="page" href="AdminL.php">Admin Page</a>
  </li>
            </div>
          </nav>
          
             
<!-- Akhir Navbar -->
    
<!-- Start Hero -->
<section class="jumbotron " >
    <div class="conten">
        <h1 style="margin-top: 50px; color:white;">MARTABAK</h1>
        <p style="color: white;">"Nikmati martabak kami yang lezat dan hangat!
             Kami menyediakan berbagai macam pilihan rasa yang  pasti 
    <br>akan membuat Anda ketagihan. Order Sekarang"
    <br>
    <br><button class="btn btn-danger" type="submit">Pesan Sekarang</button>
        </p>
      </div>
  </section>
  
<!-- Akhir Hero -->

<!-- Menu -->
<div class="container">
    <div class="row text-center">
        <div class="col">
            <h2 id="menu">Menu</h2>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-2 align-self-start fs-3 fw-bold">
            Martabak<br> Bolognese

        </div>
        <div class="col-5">
           <img src="img/Rofzy_martabak_bolognese_0eec9d8a-747a-40fd-9112-c852d82876e0.png " width="300" height="300">
        </div>
        <div class="col-4">
            "Saus Bolognese Ditambah Dengan Irisan Daging Yang Lembut Dan Keju ,Rasakan Kelezatan Martabak Bolognese, Nikmati Keunikan Rasa di Setiap Gigitannya!"
        </div>
    </div>
    <div class="row align-items-center">
        
        <div class="col-7">
            "Daging Yang Bertumpuk  Rasakan Nikmatnya Martabak Daging, Lezat dan Nyoklat di Setiap Gigitannya!
        </div>
        <div class="col-3">
            <img src="img/walpepar2.png " width="250" height="250">
        </div>
        <div class="col-2 align-self-start fs-3 fw-bold">
            Martabak<br> Daging

        </div>
    </div>
    <br>
    <div class="row align-items-center">
        <div class="col-2 align-self-start fs-3 fw-bold">
            Martabak<br> SPECIAL

        </div>
        <br>
        <div class="col-5">
           <img src="img/Rofzy_indonesian_food_martabak_.png" width="300" height="300" style="padding-bottom: 40px; ">
        </div>
        <div class="col-4">
            "Martabak Sehat dengan sayur dan ini special buat kesehatan! "Rasakan Kelezatan Martabak Special Sehat, Nikmati Manfaatnya untuk Kesehatanmu!""
        </div>
    </div>
</div>
<!-- Akhor Menu -->

<!-- Pesan -->
<div class="pesan">
<div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6 text-center">

        <!-- Heading -->
        <h2 class="mb-2">
          Make online reservation
        </h2>

        <!-- Subheading -->
        <p class="mb-6">
Buat pesanan kusi anda disini dengan jadwal ~        </p>

      </div>
    </div>
    <div class="row justify-content-lg-center">
      <div class="col-lg-8">

        <!-- Form -->
        <form id="reservationForm" method="POST" action="tambah_aksi.php">
          <div class="row gx-3">
            <div class="col-md-6">

              <!-- Contact number (hidden) -->
              <input type="hidden" name="contact_number">

              <!-- Full name -->
              <div class="mb-3">
                <label class="visually-hidden" for="user_name">Nama Lengkap</label>
                <input class="form-control" id="user_name" name="Nama_Lengkap" type="text" placeholder="Full name" required="">
              </div>

              <!-- Phone number -->
              <div class="mb-3">
                <label class="visually-hidden" for="user_phone">Nomor Telephone</label>
                <input class="form-control" id="user_phone" name="Nomor_Telephone" type="tel" placeholder="Phone number" required="">
              </div>

              <!-- Email address -->
              <div class="mb-3">
                <label class="visually-hidden" for="user_email">Email </label>
                <input class="form-control" id="user_email" name="Email" type="email" placeholder="Email address" required="">
              </div>

            </div>
            <div class="col-md-6">

              <!-- Guests -->
              <div class="mb-3">
                <label class="visually-hidden" for="guests">Guests</label>
                <select class="form-select" id="guests" name="Person" required="">
                  <option value="1">1 person</option>
                  <option value="2" selected="">2 persons</option>
                  <option value="3">3 persons</option>
                  <option value="4">4 persons</option>
                  <option value="5">5 persons</option>
                </select>
              </div>

              <!-- Date -->
              <div class="mb-3">
                <label class="visually-hidden" for="date">Date</label>
                <input class="form-control" id="date" name="Tanggal" type="date" value="2021-02-12" required="">
              </div>

              <!-- Time -->
              <div class="mb-3">
                <label class="visually-hidden" for="time">Time</label>
                <input class="form-control" id="time" name="Jam" type="time" value="18:00" required="">
              </div>

            </div>
            <div class="col text-center">

              <!-- Button -->
              <button class="btn btn-outline-danger" type="submit" name="add" >
                Reserve a table
              </button>

            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
<!-- Akhir Pesan -->

<!-- footer -->
<div class="footer">
<footer class="py-7 py-md-9 bg-black">
    <div class="container px-4">
      <div class="row gx-7">
        <div class="col-sm-4">
  
          <!-- Heading -->
          <h5 class="text-xs text-white">
            About Us
          </h5>
  
          <!-- Text -->
          <p class="mb-6 text-white">
            Selamat datang di Toko Martabak kami! Kami adalah toko martabak terbesar di kota ini, menyediakan berbagai jenis martabak yang lezat dan berkualitas. Kami menggunakan bahan-bahan berkualitas tinggi untuk memastikan rasa yang lezat dan kesegaran. Kami juga menyediakan berbagai pilihan topping untuk membuat martabak Anda semakin menarik. Kami bertekad untuk memberikan pelayanan terbaik dan memastikan Anda mendapatkan martabak yang lezat dan berkualitas. Kami berharap Anda dapat menikmati martabak kami dan menjadi pelanggan setia kami.

          </p>
  
        </div>
        <div class="col-sm-4">
  
          <!-- Heading -->
          <h5 class="text-xs text-white">
            Contact info
          </h5>
  
          <!-- List -->
          <ul class="list-unstyled mb-6">
            <li class="d-flex mb-2 text-white">
              <svg class="svg-inline--fa fa-map-marker-alt fa-w-12 me-3 mt-2 fs-sm" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg><!-- <div class="fas fa-map-marker-alt me-3 mt-2 fs-sm"></div> Font Awesome fontawesome.com -->
              Cikajang 14 No 35 Bandung Antapani Indonesia 
            </li>
            <li class="d-flex mb-2 text-white">
              <svg class="svg-inline--fa fa-phone fa-w-16 me-3 mt-2 fs-sm" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg><!-- <div class="fas fa-phone me-3 mt-2 fs-sm"></div> Font Awesome fontawesome.com -->
              +1 987 654 3210
            </li>
            <li class="d-flex text-white">
              <svg class="svg-inline--fa fa-envelope fa-w-16 me-3 mt-2 fs-sm" aria-hidden="true" focusable="false" data-prefix="far" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path></svg><!-- <div class="far fa-envelope me-3 mt-2 fs-sm"></div> Font Awesome fontawesome.com --> <a href="mailto:admin@domain.com">admin@domain.com</a>
            </li>
          </ul>
  
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
  
          <!-- Copyright -->
          <div class="d-flex align-items-center ">
            <hr class="hr-sm me-3 text-white" style="height: 1px;"> © 2021 Touché. All rights reserved.
          </div>
  
        </div>
      </div>
    </div>
  </footer>
</div>