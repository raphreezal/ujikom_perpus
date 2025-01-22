<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/');?>/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/');?>/img/favicon.png">
  <title>
    Registrasi Situs Perpustakaan 
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/7c888281d7.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo base_url('assets/');?>/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); ">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Selamat datang di situs resmi</h1>
            <p class="text-lead text-white">Perpustakaan Nasional Bandung .</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Registrasi Perpustakaan</h5>
            </div>
            <div class="row px-xl-5 px-sm-4 px-3">
            </div>
            <div class="card-body">
              <form class="user">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name"placeholder="Nama lengkap Pengguna">
                  <?= form_error('name');?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" 
                   placeholder="Masukkan alamat email">
                   <?= form_error('email');?>
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" id="password1" name="password1" placeholder="Buat Kata Sandi">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" id="password2" name="password2" placeholder="Ulangi Kata Sandi" >
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Daftar Akun</button>
                </div>
                <p class="text-sm mt-3 mb-0">Sudah punya akun? <a href="<?php echo base_url('Auth/');?>" class="text-dark font-weight-bolder">Masuk Sekarang!</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>