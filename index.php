<?php include("nav/head.php") ?>

<body class="off-canvas-sidebar">
  <?php include("nav/navbar.php") ?>
  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('assets/img/login.jpg'); background-size: cover; background-position: top center;">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="container">
      
        <div class="row">
        
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
           
            <form class="form" method="post" action="admin/_actions/login.php">
              <div class="card card-login card-hidden">
                <div class="card-header card-header-rose text-center">
                  <h4 class="card-title">Login</h4>
                  <div class="social-line">
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body ">
                  <p class="card-description text-center">Or Be Classical</p>
                  <!-- <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">face</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="First Name...">
                    </div>
                  </span> -->
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input type="email" class="form-control" placeholder="Email..." name="email">
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" class="form-control" placeholder="Password..." name="password">
                    </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center">
                  <!-- <a href="#pablo" class="btn btn-rose btn-link btn-lg">Lets Go</a> -->
                  <button type="submit" class="btn btn-rose btn-link btn-lg"> Lets Go</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <?php if (isset($_GET['incorrect'])) : ?> 
        <div class="alert alert-warning text-center">
          Incorrect Email or Password
        </div>
        <?php endif ?>
      </div>
     <?php include("nav/footer.php") ?>