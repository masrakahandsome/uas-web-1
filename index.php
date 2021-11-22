<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">


    <title>INDEX</title>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
  <a class="navbar-brand mr-auto" href="#">Selamat Datang Bro | <b> Pendataan Hewan Peliharaan Desa Antap<b></a>
 
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 text-white bg-dark" type="submit">Search</button>
    </form>
    <div class="icon ml-4">
      <h5>
        <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
        <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
       <a class="text-dark" href="logout.php"> <i class="fas fa-sign-out-alt mr-3 " data-toggle="tooltip" title="Sign Out"></i></a>

      </h5>
  </div>
</nav>

<div class="row no-gutters mt-5 ">
  <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
      <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
        <a class="nav-link active text-white mt-5" href="index.php"><i class="fas fa-tachometer-alt mr-2"></i>
        Dashboard</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white"  href="anjing.php"><i class="fas fa-dog"></i>
        Daftar Pemilik Anjing</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="kucing.php"><i class="fas fa-cat"></i>
        Daftar Pemilik Kucing</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="burung.php"><i class="fas fa-dove"></i>
        Daftar Pemilik Burung</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><i class="far fa-calendar-alt mr-2"></i>
        Jadwal Pemberian Vitamin</a><hr class="bg-secondary">
      </li>
    </ul>

  </div>
  <div class="col-md-10 p-5 pt-2 ">
    <h3><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD</h3><hr>

    <div class="row text-white">
      <div class="card bg-info ml-5" style="width: 18rem;">
     <div class="card-body">
      <div class="card-body-icon">
        <i class="fas fa-dog"></i>
      </div>
      <h5 class="card-title" >JUMLAH PEMILIK ANJING</h5>
      <div class="display-4">200</div>
      <a href="anjing.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
    </div>
  </div>

  <div class="card bg-success ml-5" style="width: 18rem;">
     <div class="card-body">
      <div class="card-body-icon">
        <i class="fas fa-cat"></i>
      </div>
      <h5 class="card-title">JUMLAH PEMILIK KUCING</h5>
      <div class="display-4">100</div>
      <a href="kucing.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
    </div>
  </div>

  <div class="card bg-danger ml-5" style="width: 18rem;">
     <div class="card-body">
      <div class="card-body-icon">
        <i class="fas fa-dove"></i>
      </div>
      <h5 class="card-title">JUMLAH PEMILIK BURUNG</h5>
      <div class="display-4">100</div>
      <a href="burung.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
    </div>
  </div>

    </div>

   


  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>