<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>
  <?= $title; ?>
  </title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="<?= base_url('assets/'); ?>css/bootstrap.datepicker.min.css" rel="stylesheet"> -->

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/index');?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-camera-retro"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ReKam.id</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider ">
     <!-- Heading -->
      <div class="sidebar-heading">
        Admin
      </div>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/index'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dasbor</span></a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kamera'); ?>">
          <i class="fas fa-fw fa-camera"></i>
          <span>Kamera</span></a>
       </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('penyewaan'); ?>">
          <i class="fas fa-fw fa-book"></i>
          <span>Penyewaan</span></a>
       </li>
      <li class="nav-item">
        <a class="nav-link" href="http://web.whatsapp.com" target="_blank">
          <i class="fas fa-comment"></i>
          <span>Buka Whatsapp</span></a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout');?>">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
        </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Alerts -->

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Halo, <?= $user['nama_user']; ?></span>
                <span class="fas fa-chevron-circle-down"></span>
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
