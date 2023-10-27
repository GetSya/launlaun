<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kumpulan Hijau || Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url()?>template/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>template/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url()?>template/assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>template/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url()?>template/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url()?>template/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:<?php echo base_url()?>partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <img src="<?php echo base_url()?>assets/img/kumjauh.png" width="190px" alt="logo" />
          <a class="sidebar-brand brand-logo-mini" href="<?php echo base_url()?>index.html"><img src="<?php echo base_url()?>template/assets/images/user.png" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="<?php echo base_url()?>template/assets/images/user.png" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">User</h5>
                  <span>Pengguna Kumpulan Hijau</span>
                </div>
              </div>
            </div>
          </li>
          
          
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo base_url()?>user/dashboarduser">
              <span class="menu-icon">
                <i class="mdi mdi-script"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo base_url()?>user/tulislapor">
              <span class="menu-icon">
                <i class="mdi mdi-grease-pencil "></i>
              </span>
              <span class="menu-title">Tulis Sampah</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo base_url()?>user/tutorial">
              <span class="menu-icon">
                <i class="mdi mdi-arrow-down-drop-circle-outline "></i>
              </span>
              <span class="menu-title">Tutorial Input</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo base_url()?>user/lihatberita">
              <span class="menu-icon">
                <i class="mdi mdi-newspaper "></i>
              </span>
              <span class="menu-title">Lihat Berita</span>
            </a>
          </li>
          
          
          <!--<li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo base_url()?>pages/forms/basic_elements.html">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Form Elements</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo base_url()?>pages/tables/basic-table.html">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo base_url()?>pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo base_url()?>pages/icons/mdi.html">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>pages/samples/error-500.html"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Documentation</span>
            </a>
          </li>-->
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:<?php echo base_url()?>partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="<?php echo base_url()?>index.html"><img src="<?php echo base_url()?>template/assets/images/user.png" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-account-key text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Tambah Admin</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="<?php echo base_url()?>template/assets/images/user.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Admin</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Pilihan</h6>
                  <div class="dropdown-divider"></div>
                  <div class="dropdown-divider"></div>
                  <a href="<?php echo base_url()?>admin/logout" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Kumpulan Hijau Input Sampah</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tutorial</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Kumpulan Hijau</li>
                </ol>
              </nav>
            </div>
           
            
            <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">TUTORIAL INPUT SAMPAH  </h4>
                        <p class="card-description">Tutoriakl Cara Menginput Sampah</p>
                        <p>1. Pertama, pilih opsi "Tulis Laporan" pada aplikasi atau platform yang Anda gunakan.</p>

<p>2. Setelah itu, masukkan nama lengkap Anda, termasuk nama belakang, untuk identifikasi yang lebih akurat.</p>

<p>3. Selanjutnya, masukkan alamat lengkap di mana Anda menemukan sampah tersebut. Pastikan untuk mencantumkan rincian seperti nama jalan, nomor rumah, kelurahan, kecamatan, dan kota agar pihak yang bertanggung jawab dapat menemukan lokasinya dengan mudah.</p>

<p>4. Terakhir, masukkan jenis sampah atau limbah yang Anda temui. Ini bisa berupa informasi tentang apakah itu sampah plastik, sampah organik, kaca, logam, atau jenis sampah lainnya. Informasi ini akan membantu dalam pengelolaan dan pemrosesan sampah yang tepat.</p>

<p>Dengan mengikuti langkah-langkah ini, Anda dapat membantu meningkatkan kesadaran dan tindakan yang lebih baik dalam pengelolaan sampah di lingkungan Anda.</p>

                      </div>
                    </div>
                  </div>
              <!--
              <div class="col-md-6 grid-margin stretch-card">
              </div>
              <div class="col-md-6 grid-margin stretch-card">
              </div>
              <div class="col-12 grid-margin stretch-card">
              </div>
              <div class="col-md-6 grid-margin stretch-card">
              </div>
              <div class="col-md-6 grid-margin stretch-card">
              </div>
              <div class="col-md-6 grid-margin stretch-card">
              </div>
              <div class="col-md-6 grid-margin stretch-card">
              </div>
              <div class="col-12 grid-margin stretch-card">
              </div>
              <div class="col-12 grid-margin">
              </div>
              <div class="col-md-6 grid-margin stretch-card">
              </div>
              <div class="col-md-6 grid-margin stretch-card">-->
              
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:<?php echo base_url()?>partials/_footer.html -->
  
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url()?>template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url()?>template/assets/vendors/select2/select2.min.js"></script>
    <script src="<?php echo base_url()?>template/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url()?>template/assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url()?>template/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url()?>template/assets/js/misc.js"></script>
    <script src="<?php echo base_url()?>template/assets/js/settings.js"></script>
    <script src="<?php echo base_url()?>template/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url()?>template/assets/js/file-upload.js"></script>
    <script src="<?php echo base_url()?>template/assets/js/typeahead.js"></script>
    <script src="<?php echo base_url()?>template/assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>