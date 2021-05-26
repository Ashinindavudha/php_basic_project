<?php include "nav/head.php"?>

       <?php include "nav/head.php"?>
  <?php
// session_start();
// if (!isset($_SESSION['user'])) {
//     header('location: index.php');
//     exit();
// }
include "../vendor/autoload.php";

use Helpers\Auth;

$auth = Auth::check();

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
     <?php include "nav/sidebar.php"?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
     <?php include "nav/navbar.php"?>
      <!-- End Navbar -->
      <div class="content">
     <!-- profile page start -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
            <form action="_actions/upload.php" method="post" enctype="multipart/form-data">
              <div class="col-md-3 col-sm-4">
                      <h4 class="title">Avatar</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-circle">
                          <img src="../assets/img/placeholder.jpg" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                        <div>
                          <span class="btn btn-round btn-rose btn-file">
                            <span class="fileinput-new">Add Photo</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="photo" />
                          </span>
                          <br />
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-rose pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                    </div>

                    </form>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                <?php if ($auth->photo): ?>
                  <a href="#pablo">
                    <img class="img" src="_actions/photos/<?=$auth->photo?>" />
                  </a>
                  <?php endif?>
                </div>
                <div class="card-body">
                  <h6 class="btn btn-rose btn-round">User Role : <?=$auth->role?></h6>
                  <h4 class="card-title"><?=$auth->name?></h4>
                  <p class="card-description">
                    <?=$auth->email?>
                  </p>
                  <h4 class="card-title"><?=$auth->phone?></h4>
                  <p class="card-description">
                    <?=$auth->address?>
                  </p>
                  <a href="#pablo" class="btn btn-rose btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
     <!-- profile page end -->
      </div>
      <?php include "nav/footer.php"?>
    </div>
  </div>


  <?php include "nav/RightSidebar.php"?>