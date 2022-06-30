<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="style" href="yet.css">
  <title>DATA OBAT</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg">
    <a class="navbar-brand" href="#">
      <img src="img/logo.svg" width="130" height="130" alt="logo">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
        <li class="nav-item active">
          <a class="nav-link " href="data_obat.php"><strong>DATA OBAT</strong> <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link " href="obat_masuk.php"><strong>OBAT MASUK</strong> <span class="sr-only">(current)</span></a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0" action="data_obat.php" method="get">
        <input class="form-control mr-sm-2 col-auto" type="search" placeholder="Nama Obat" aria-label="Search" name="cari">
        <button class="btn btn-outline-success my-2 my-sm-0 text-white" style="background-color:#BDDFBC" type="submit"><strong>CARI</strong></button>
      </form>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col text-center">
        <h1 class="a"><strong>DATA OBAT</strong></h1>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col text-right">
        <a href="obat_masuk.php"><button type="button" class="btn btn-tambah">TAMBAH OBAT</button></a>
      </div>
    </div>
    <div class="row">
      <table class="table table-bordered">
        <thead class="thead">
          <tr>
            <th scope="col">KODE OBAT</th>
            <th scope="col">NAMA OBAT</th>
            <th scope="col">HARGA BELI</th>
            <th scope="col">HARGA JUAL</th>
            <th scope="col">STOK</th>
            <th scope="col">SATUAN</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>
        <tbody>
          <?php
          require_once("koneksi.php");
          session_start();
          if (!isset($_SESSION['idAdmin'])) {
          }
          if (isset($_GET['cari'])) {
            $cari = ucwords($_GET['cari']);
            if ($cari == "") {
              $sqlObat = "SELECT * FROM data_obat";
            } else {
              $sqlObat = "SELECT * FROM data_obat
                    WHERE nama_obat = '$cari'";
            }
          } else {
            $sqlObat = "SELECT * FROM data_obat";
          }
          $queryObat = mysqli_query($connect, $sqlObat);
          while ($row = mysqli_fetch_assoc($queryObat)) {
          ?>
            <tr>
              <td><?php echo $row['kode_obat']; ?></td>
              <td><?php echo $row['nama_obat']; ?></td>
              <td>Rp<?php echo $row['harga_beli']; ?>,-</td>
              <td>Rp<?php echo $row['harga_jual']; ?>,-</td>
              <td><?php echo $row['stok']; ?></td>
              <td><?php echo $row['satuan']; ?></td>
              <td>
                <a href="form_show.php?kode=<?php echo $row['kode_obat']; ?>"><button type="button" class="btn btn-show">LIHAT</button></a>
                <a href="form_ubah.php?kode=<?php echo $row['kode_obat']; ?>"><button type="button" class="btn btn-ubah">UBAH</button></a>
                <a href="proses_hapus.php?kode=<?php echo $row['kode_obat']; ?>"><button type="button" class="btn btn-hapus">HAPUS</button></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>