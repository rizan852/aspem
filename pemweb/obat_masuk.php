<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">

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
  <div class="container">
    <div class="row" style="margin-bottom: 50px; margin-top: 50px;">
      <div class="col text-center">
        <h1 class="text-success"><strong>OBAT MASUK</strong></h1>
        <hr>
      </div>
    </div>
    <!-- FORM -->
    <div class="row">
      <div class="col">
        <form action="proses_tambah.php" method="post">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputSupplier">SUPPLIER</label>
            </div>
            <div class="form-group col-md-8">
              <input type="text" class="form-control" id="inputSupplier" name="supplier" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputTanggal">TANGGAL MASUK</label>
            </div>
            <div class="form-group col-md-8">
              <input type="date" class="form-control" id="inputTanggal" name="tanggal" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputNama">NAMA OBAT</label>
            </div>
            <div class="form-group col-md-8">
              <input type="text" class="form-control" id="inputNama" name="nama" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputJumlah">JUMLAH OBAT</label>
            </div>
            <div class="form-group col-md-8">
              <input type="text" class="form-control" id="inputJumlah" name="jumlah" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputHarga">HARGA (RUPIAH)</label>
            </div>
            <div class="form-group col-md-8">
              <input type="text" class="form-control" id="inputHarga" name="harga" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputJumlah">Satuan</label>
            </div>
            <div class="form-group col-md-4">
              <div class="custom-control custom-radio">
                <input type="radio" id="botol" name="satuan" class="custom-control-input" value="Botol">
                <label class="custom-control-label" for="botol">Botol</label>
              </div>
            </div>
            <div class="form-group col-md-4">
              <div class="custom-control custom-radio">
                <input type="radio" id="tablet" name="satuan" class="custom-control-input" value="Tablet">
                <label class="custom-control-label" for="tablet">Tablet</label>
              </div>
            </div>
            <div class="form-row">
              <button type="submit" class="btn btn-tambah">TAMBAH OBAT</button>
            </div>
        </form>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col text-success text-center sukses">
          <h4>
            <?php
            if (isset($_GET['status'])) {
              if ($_GET['status'] == 'sukses') {
                echo "Obat Berhasil Dimasukkan";
              } elseif ($_GET['status'] == 'gagal') {
                echo "Obat Gagal Dimasukkan";
              }
            }
            ?>
          </h4>
        </div>
      </div>
    </div>
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