<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SIAP</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/halaman_utama/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/halaman_utama/vendor/fontawesome-free/css/fontgoogle.css') ?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/halaman_utama/css/sb-admin-2.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/halaman_utama/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

</head>

<?php

              if ($_SESSION['status'] != "Active") {
                redirect('');
              }
?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php if ($this->session->userdata("role_id") == 2) { ?>
      <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
      <?php } else { ?>
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
        <?php } ?>
        <!-- Sidebar - Brand -->
        <?php if ($this->session->userdata("role_id") == 2) { ?>
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('Pengguna/halaman_dosen') ?>">
            <div class="sidebar-brand-icon">
              <i class="fas fa-book-reader"></i>
            </div>
            <div class="sidebar-brand-text mx-2">SIAP - Koor. Dosen</div>
          </a>
        <?php } else { ?>
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('Pengguna/halaman_mhs') ?>">
            <div class="sidebar-brand-icon">
              <i class="fas fa-book-reader"></i>
            </div>
            <div class="sidebar-brand-text mx-2">SIAP - Koor. Mahasiswa</div>
          </a>
        <?php } ?>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Data Borang
        </div>

        <?php if ($this->session->userdata("role_id") == 2) { ?>
          <!-- Nav Item - Dosen Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
              <span>Standar 4</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">List Data Dosen:</h6>
                <a class="collapse-item" href="<?= site_url('C_DosenTetap/dosenTetap') ?>">Dosen Tetap</a>
                <a class="collapse-item" href="<?= site_url('C_DosenTdkTetap/dosenTdkTetap') ?>">Dosen Tidak Tetap</a>
                <a class="collapse-item" href="<?= site_url('C_AktivitasDT/aktivitasdosentetap') ?>">Aktvts Dosen Tetap</a>
                <a class="collapse-item" href="<?= site_url('C_AktivitasDTT/aktivitasdosentdktetap') ?>">Aktvts Dosen Tidak Tetap</a>
                <a class="collapse-item" href="<?= site_url('C_Kemampuan/kemampuan') ?>">Kemampuan Dosen</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
              <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
              <span>Standar 7</span>
            </a>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">List Data Dosen:</h6>
                <a class="collapse-item" href="<?= site_url('C_Penelitian/penelitian') ?>">Penelitian</a>
                <a class="collapse-item" href="<?= site_url('C_KaryaIlmiahDosen/karyailmiah') ?>">Karya Ilmiah</a>
                <a class="collapse-item" href="<?= site_url('C_Pengabdian/pengabdian') ?>">Pengabdian Masyarakat</a>
              </div>
            </div>
          </li>
        <?php } else { ?>
          <!-- Nav Item - Mahasiswa Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
              <span>Standar 3</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">List Data Mahasiswa:</h6>
                <a class="collapse-item" href="<?= site_url('C_MhsLulusan/mhs_lulusan') ?>">Mahasiswa dan Lulusan</a>
                <a class="collapse-item" href="<?= site_url('C_KaryaIlmiahMhs/aktivitasMhs') ?>">Karya Mahasiswa</a>
                <a class="collapse-item" href="<?= site_url('C_MhsReguler/jumreg') ?>">Jumlah Mhs. Reguler</span></a>
                <a class="collapse-item" href="<?= site_url('C_Evaluasi/evaluasi') ?>">Evaluasi Lulusan</a>
              </div>
            </div>
          </li>
        <?php } ?>

        <!-- Divider -->
        <hr class="sidebar-divider">

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

              <!-- Topbar SIAP -->
              <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="sidebar-brand-text mx-3">Sistem Informasi Akreditasi Prodi</div>
              </form>

              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                  <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                  </a>
                  <!-- Dropdown - Messages -->
                  <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                      <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Halo, <?= $this->session->userdata("name"); ?></span>
                    <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profil/profil.png') ?>">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?= site_url('Pengguna/profile') ?>">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Profil
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Keluar
                    </a>
                  </div>
                </li>

              </ul>

            </nav>
            <!-- End of Topbar -->