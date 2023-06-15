<?php 
/* capturar las rutas de la url */

$routerArray = explode("/",$_SERVER['REQUEST_URI']);
$routerArray = array_filter($routerArray);

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Fixed Sidebar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="views/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/assets/plugins/adminlte/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php
  include "views/modules/navbar.php"
  
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php

  include "views/modules/sidebar.php"
  
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <?php
    
    if(!empty($routerArray[5])){

      if($routerArray[5] == "clinicHistory" ||
        $routerArray[5] == "interviews" ||
        $routerArray[5] == "psychologists" ||
        $routerArray[5] == "treatment" ||
        $routerArray[5] == "users" ){
          include "views/pages/".$routerArray[5]."/".$routerArray[5].".php";
        }else{
          include "views/pages/home/home.php";
        }
    }
    
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php

  include "views/modules/footer.php"
  
  ?>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="views/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="views/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="views/assets/plugins/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="views/assets/plugins/js/demo.js"></script>
</body>
</html>
