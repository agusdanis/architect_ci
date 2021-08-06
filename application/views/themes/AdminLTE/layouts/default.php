<!DOCTYPE html>
<html>
<head>
  <?php echo $head; ?>
</head>
<!--<body class="hold-transition sidebar-mini">--> <!-- type1 -->
<!--<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">-->
<?php //if(!isset($no_visible_elements) || !$no_visible_elements)   
{ ?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<!-- Site wrapper -->


<!--
<?php //if(isset($no_visible_elements) || $no_visible_elements)   
{ ?>
  <body class="hold-transition login-page">
  <?php //echo $content; ?>
<?php } ?>
-->

<div class="wrapper">
  <!-- Navbar -->
  
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <?php echo $navbar; ?>
  </nav>
  <!-- /.navbar -->
  

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?php echo $sidebar; ?>
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php echo $content; ?>
  </div>
  <!-- /.content-wrapper -->

  

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">      
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019 <a href="#">ADS</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  
</div>
<?php } ?>


<!-- ./wrapper -->
<?php echo $script;?>

</body>
</html>
