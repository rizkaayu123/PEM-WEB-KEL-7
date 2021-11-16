
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
          <a class="nav-link" href="user/donasisekarang.php">Donasi Sekarang</a>
        </li>

        <li class="navbar nav-item">
          <img src="imgae/in.svg">
        </li>
        </ul>
      </ul>
    </div>
  </div>
</nav>
<br>

<h2 align="center">Camping</h2>

<div class="container">
    <div class="row" id="load_data">
      <?php 
        include_once 'lib/class-db.php';
        include_once 'lib/class-ff.php';
        $q=$odb->select("campaing");
        while ($r=$q->fetch()) {
          $id_cam = $r["id_cam"];
          $foto = $r["foto"];
          $nama_penerima = $r["nama_penerima"];
          $kategori_donasi= $r["kategori_donasi"];
          $kebutuhan_dana = $r["kebutuhan_dana"];
          $terdanai = $r["terdanai"];
          $judul = $r["judul"];
          if (strlen($judul) > 60) {
            $judul = substr($judul, 0, 60) . "...";
          }
          $deskripsi = $r["deskripsi"];
          if (strlen($deskripsi) > 100) {
            $deskripsi = substr($deskripsi, 0, 100) . "...";
          }
        ?>
    
    <div class="flex-container_item col-md-4">    
      <div class="thumbnail">
      <a href="detailcamping.php?id_cam=<?php echo $id_cam?>">
        <div class="card text-white card-has-bg click-col" style="background-image: url('../data-admin/image/<?php echo $foto; ?>');">
              <div class="card-body">
                    <h4 class="card-title"><?php echo $judul; ?></h4>
                    <h5>&nbsp;<span class="card-text">Penerima : <?php echo $nama_penerima ?></span></h5>
                    <h5>&nbsp;<span class="card-text"><?php echo $kategori_donasi; ?></span></h5>
                    <h6>&nbsp;<span class="card-text"><?php echo $deskripsi; ?></span></h6>

                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-6">
                      <p>&nbsp;Terdanai</p>
                      <p><span class="m-card_footer">&nbsp;<?php echo "Rp.".number_format ($terdanai) ?></span></p>
                    </div>
                    <div class="col-md-6">
                      <p>&nbsp;Kebutuhan Dana</p>
                      <p><span class="m-card_footer">&nbsp;<?php echo "Rp.".number_format($kebutuhan_dana); ?></span></p>
                    </div>
                  </div>
              </div>
             </a>
            </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
</div>


<br><br><br><br><br><br><br><br>


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