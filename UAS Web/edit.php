!DOCTYPE html>
 <html>
<head>
 <title>CRUD Operation </title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body style=" background-image:url(img/walpepar2.png);
 background-size: cover; background-position: 0px -200px; "
 class="text-white bg-opacity-30">


 <?php
include 'koneksi.php';
$data = mysqli_query($koneksi,'SELECT * FROM pesan');
while($d = mysqli_fetch_array($data)){
?>

 <div class="container">
 <h1> Edit Reservation</h1>
 <a href="menuAdmin.php" class="btn btn-primary">Back</a>

 <form method="POST" action="update.php">
 <div class="form-group">
 <strong>Nama_Lengkap:</strong>
 <input type="text" name="Nama_Lengkap" value="<?php echo
$d['Nama_Lengkap'] ?>" required="" class="form-control">
 </div>
 <br>
 <div class="form-group">
 <strong>Nomor_Telephone:</strong>
 <textarea class="form-control" name="Nomor_Telephone"
placeholder="Nomor_Telephone"> <?php echo $d['Nomor_Telephone']; ?></textarea>
<br>

 <div class="form-group">
 <strong>Email:</strong>
 <textarea class="form-control" name="Email"
placeholder="Masukkan Email"> <?php echo $d['Email']; ?></textarea>
</div>
<br>
</div>
 <div class="">
                <label class="visually" for="guests">Guests</label>
                <select class="form-select" id="guests" name="Person" required="">
                  <option value="1">1 person</option>
                  <option value="2" selected="">2 persons</option>
                  <option value="3">3 persons</option>
                  <option value="4">4 persons</option>
                  <option value="5">5 persons</option>
                </select>
              </div>

              <div class="mb-3">
                <label class="visually" for="date">Date</label>
                <input class="form-control" id="date" name="Tanggal" type="date" value="2021-02-12" required="">
              </div>
              <div class="mb-3">
                <label class="visually" for="time">Time</label>
                <input class="form-control" id="time" name="Jam" type="time" value="18:00" required="">
              </div>
              
            </div>
            <div class="form-group">

 </div>

 <button type="submit" name="submit" class="btn btn-success">Submit</button>    
<?php
}
?>