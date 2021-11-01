
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

  <title>WeTogether</title>
  </head>
  <body id="Page-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-warning text-dark fixed-top" id="mainNav">
  <div class="container">
  <!--<a class="navbar-toggler-icon" href="#">nnn</a>-->
    <img src="image/logo2.png" width="100px">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#BERANDA" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-current="page" aria-expanded="false">
            Beranda
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#Berita">Berita</a></li>
            <li><a class="dropdown-item" href="#Video">Video</a></li>
            <li><a class="dropdown-item" href="#Potret">Potret Kegiatan</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Campaign">Campaign</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Transparasi">Transparasi</a>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#Ruang" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ruang Donatur
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#Daftar">Daftar Donatur</a></li>
            <li><a class="dropdown-item" href="#Tracking">Tracking Donasi</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Donasi">Donasi Sekarang</a>
        </li>

        <li class="navbar nav-item">
          <img src="imgae/in.svg">
        </li>
        </ul>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <h2>Tambah Data Donasi Sekarang</h2>
    <br /><br />

    <form action="add-donasisekarang.php?act=ins" method="post" name="form1" enctype="multipart/form-data" >
    
        <div class="form-group">
            <label>Nama Donatur:</label>
            <input type="text" name="nama_donatur" class="form-control" placeholder="Masukan Nama Donatur" required />

        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <textarea type="text" name="alamat" class="form-control" rows="3" placeholder="Masukan Alamat" required></textarea>

         </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" class="form-control" placeholder="Masukan Email" required />

        </div>
          
        <div class="form-group">
            <label>Nomor Telepon:</label>
            <input type="text" name="notelpn" class="form-control" placeholder="Masukan No Telepon" required />

        </div>
        <div class="form-group">
            <label>Tanggal:</label>
            <input type="date" name="tanggal" class="form-control" placeholder="Masukan Tanggal" required />

        </div>

        <div class="form-group">
            <label>Yayasan :</label>
            <input type="text" name="notelpn" class="form-control" placeholder="Pilih Yayasan" required />
        </div>

        <div class="form-group">
            <label>Kebutuhan:</label>
            <input type="text" name="kebutuhan" class="form-control" placeholder="Masukan Kebutuhan" required />

        </div>

        <div class="form-group">
            <label>Jumlah Donasi:</label>
            <input type="text" name="jumlahdonasi" class="form-control" placeholder="Masukan Jumlah Donasi" required />

        </div>
        <div class="form-group float-right">
          <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
        </div>
</form>
</div>

<!-- Footer -->
<footer class="text-center text-lg-start bg-warning text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Tentang Kami
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->



        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Hubungi Kami
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>