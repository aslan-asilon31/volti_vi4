


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product List</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/jqvmap/jqvmap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('adminlte/dist/css/adminlte.min.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/daterangepicker/daterangepicker.css'); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/summernote/summernote-bs4.min.css'); ?>">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/ekko-lightbox/ekko-lightbox.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/select2/css/select2.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'); ?>">

  <style>
    .sidebar-color{
      color:white !important;
    }
    .nav-link.active {
      font-weight: bold; /* Example styling */
      color: white !important; /* Example styling */
      background-color:#6f42c1;
      border-radius:3px;
      /* Add your desired active state styles here */
    }
    .active{
      background-color:#6f42c1 !important;
      color:white !important;
    }
    .background-image {
        width: 800px;
        height: 400px;
        background-image: url('<?= base_url('adminlte/dist/img/nerp-sales.png'); ?>'); /* Replace with your image path */
        background-size: cover; /* Ensures the image covers the entire div */
        background-position: center; /* Centers the image within the div */
        margin: auto; /* Center the div horizontally */
        margin-top: 50px; /* Example: Adds some top margin */
    }
    .modal {
      margin-top:30px;
    }
  </style>
  <style>
    .no-outline {
      outline: none !important;
    }
  </style>
  </head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../welcome/welcome.html" class="nav-link " id="module-employee">Welcome</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./sales.html" class="nav-link " id="module-sales">Sales</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../marketing/marketing.html" class="nav-link " id="module-marketing">Marketing</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../human-resource/humanresource.html" class="nav-link " id="module-human-resource">HR</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../manufacturing/manufacturing.html" class="nav-link " id="module-manufacturing">Manufacturing</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./inventory.html" class="nav-link " id="module-inventory">Inventory</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./accounting.html" class="nav-link " id="module-accounting">Accounting</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../services/services.html" class="nav-link " id="module-services">Services</a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= base_url('adminlte/dist/img/user1-128x128.jpg'); ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= base_url('adminlte/dist/img/user8-128x128.jpg'); ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= base_url('adminlte/dist/img/user3-128x128.jpg'); ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " data-widget="control-sidebar" data-control sidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  elevation-4" style="background-color:indigo;color:white !important;font-weight:bolder;">
    <!-- Brand Logo -->
    <a href="javascript::void(0)" class="brand-link" style="height:60px;">
      <img src="<?= base_url('volti_assets/images/logo.png'); ?>" alt="Volti Logo" class="brand-image img-circle elevation-3 text-white" style="opacity: .8;width:60px;height:60px;">
      <span class="brand-text font-weight-bold text-white">Volti</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
            <select class="form-control select2 " style="width: 100%;">
              <option selected="selected" style="text-align:center;color:green !important;">Toko Aslan</option>
              <option value="">Toko IndoApril</option>
              <option value="">Minimarket AlfaMaret</option>
              <option value="">Warung Makan Gahari Baru</option>
	            <option value="">Swalayan Sehari hari</option>
            </select>
 
      <hr class="bg-white">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search Menu" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw text-white"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" style="overflow-x: auto;overflow-y: auto;">
        <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="./sales.html" class="nav-link text-white ">
              <i class="nav-icon fa fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">
              <i class="fa fa-utensils  nav-icon"></i>
              <p>
                Dwelling Report
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <li class="nav-item">
                <a href="<?= base_url('adminlte/attributes/product_attributes.html'); ?>" class="nav-link text-white">
                  <i class="fa fa-stopwatch  nav-icon"></i>
                  <p>Order Processing Time Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link text-white">
                  <i class="fa fa-hourglass  nav-icon"></i>
                  <p>Product Processing Time Report</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link text-white">
              <i class="fa fa-shopping-cart nav-icon"></i>
              <p>Product Sales</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="product_reviews.html" class="nav-link text-white">
              <i class="fa fa-cubes nav-icon"></i>
              <p>Product Combos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="product_reviews.html" class="nav-link text-white">
              <i class="fa fa-dollar-sign nav-icon"></i>
              <p>Product Prices </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../../attributes/product_attributes.html" class="nav-link text-white">
              <i class="fa fa-users  nav-icon"></i>
              <p>Suppliers</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../../attributes/product_attributes.html" class="nav-link text-white">
              <i class="fa fa-shopping-cart nav-icon"></i>
              <p>Purchases</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="products.html" class="nav-link text-white">
              <i class="fa fa-book nav-icon"></i>
              <p>Ingredient Recipe</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="products.html" class="nav-link text-white">
              <i class="fa fa-book nav-icon"></i>
              <p>Menu Book</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="manufactures.html" class="nav-link text-white">
              <i class="fa fa-cube  nav-icon"></i>
              <p>Category </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="product_reviews.html" class="nav-link text-white">
              <i class="fa fa-concierge-bell nav-icon"></i>
              <p>Service Product</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="product_reviews.html" class="nav-link text-white">
              <i class="fa fa-plus-square nav-icon"></i>
              <p>Extra Product</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="product_reviews.html" class="nav-link text-white">
              <i class="fa fa-box-open nav-icon"></i>
              <p>Product Bundling</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="product_reviews.html" class="nav-link text-white">
              <i class="fa fa-coins  nav-icon"></i>
              <p>Deposit</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="product_reviews.html" class="nav-link text-white">
              <i class="fa fa-motorcycle  nav-icon"></i>
              <p>Online Vehicle Price List</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="product_reviews.html" class="nav-link text-white">
              <i class="fa fa-barcode nav-icon"></i>
              <p>Print Barcode</p>
            </a>
          </li>
          <li class="nav-item mb-5">
          </li>
          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper kanban">
    <?= $this->renderSection('content') ?>
  </div>
    <!-- /.content-wrapper -->

  <div class="modal fade" id="modal-lg" >
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="background-color:#43114d">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body background-image">

        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <footer class="main-footer">
    NERP 2024
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('adminlte/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>



<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('adminlte/plugins/chart.js/Chart.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?= base_url('adminlte/plugins/sparklines/sparkline.js'); ?>"></script>
<!-- JQVMap -->
<script src="<?= base_url('adminlte/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
<script src="<?= base_url('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('adminlte/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('adminlte/plugins/moment/moment.min.js'); ?>"></script>
<script src="<?= base_url('adminlte/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
<!-- Summernote -->
<script src="<?= base_url('adminlte/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('adminlte/dist/js/adminlte.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('adminlte/dist/js/pages/dashboard.js'); ?>"></script>
<!-- Ekko Lightbox -->
<script src="<?= base_url('adminlte/plugins/ekko-lightbox/ekko-lightbox.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- Filterizr-->
<script src="<?= base_url('adminlte/plugins/filterizr/jquery.filterizr.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('adminlte/plugins/moment/moment.min.js'); ?>"></script>
<script src="<?= base_url('adminlte/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('adminlte/dist/js/pages/dashboard.js'); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= base_url('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?= base_url('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('adminlte/plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?= base_url('adminlte/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?= base_url('adminlte/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?= base_url('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?= base_url('adminlte/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?= base_url('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
<!-- Select2 -->
<script src="<?= base_url('adminlte/plugins/select2/js/select2.full.min.js'); ?>"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  // Example condition, replace this with your actual logic
  var inventoryModuleActive = true;

  // Find the inventoryActive link element by its ID
  var inventoryActiveLink = document.getElementById('module-inventory');

  // Check if inventoryActiveActive is true, then add the active class
  if (inventoryModuleActive) {
    inventoryActiveLink.classList.add('active');
  }
</script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('adminlte/dist/js/pages/dashboard3.js'); ?>"></script>

  <script type="text/javascript">
      $(window).on('load', function() {
          $('#modal-lg').modal('hidden');
      });
  </script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script>
  $(document).ready(function() {

    $('.select2').select2()

    $("#card-kanban").hide();

    $("#btn-card-table").click(function() {
        $("#card-kanban").hide();
        $("#card-table").show();
    });

    $("#btn-card-kanban").click(function() {
        $("#card-table").hide();
        $("#card-kanban").show();
    });

    $("#btn-all-tampil-menu").click(function() {
        $("#tidak-tampil-menu").show();
        $("#tidak-tampil-menu-kanban").show();
        $("#tampil-menu").show();
        $("#tampil-menu-kanban").show();
    });

    $("#btn-tampil-menu").click(function() {
        $("#tidak-tampil-menu").hide();
        $("#tidak-tampil-menu-kanban").hide();
        $("#tampil-menu").show();
        $("#tampil-menu-kanban").show();
    });

    $("#btn-tidak-tampil-menu").click(function() {
        $("#tidak-tampil-menu").show();
        $("#tidak-tampil-menu-kanban").show();
        $("#tampil-menu").hide();
        $("#tampil-menu-kanban").hide();
    });


  });
</script>


<script>

</script>

</body>
</html>


