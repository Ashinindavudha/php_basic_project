<?php include("nav/head.php") ?>
<?php
    session_start();
    if (!isset($_SESSION['user'])) {
      header('location: index.php');
      exit();
    }
  ?>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a></div>
     <?php include("nav/sidebar.php") ?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
     <?php include("nav/navbar.php") ?>
      <!-- End Navbar -->
      <div class="content">
     
      </div>

      <?php include("nav/footer.php") ?>
    </div>
  </div>
  
  
  <?php include("nav/RightSidebar.php") ?>