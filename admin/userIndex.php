<?php

include "../vendor/autoload.php";

use Helpers\Auth;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$table = new UsersTable(new MySQL());
$all = $table->getAll();

$auth = Auth::check();

?>
<?php include "nav/head.php"?>
<?php
// session_start();
// if (!isset($_SESSION['user'])) {
//   header('location: index.php');
//   exit();
// }
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
		<!-- datatable start -->
		 <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title">User
                    <span class="badge bg-danger text-white">
				<?=count($all)?>
			</span>
                  </h4>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Role</th>
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Role</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>
                      <tbody>
                       <?php foreach ($all as $user): ?>
                        <tr>
                          <td><?=$user->id?></td>
                          <td><?=$user->name?></td>
                          <td><?=$user->email?></td>
                         <td><?=$user->phone?></td>
                         <td>
						<?php if ($user->value === '1'): ?>
							<span class="badge bg-secondary">
								<?=$user->role?>
							</span>
						<?php elseif ($user->value === '2'): ?>
							<span class="badge bg-primary">
								<?=$user->role?>
							</span>
						<?php else: ?>
							<span class="badge bg-success">
								<?=$user->role?>
							</span>
						<?php endif?>
					</td>

                          <td class="text-right">
                            <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                            <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                            <!-- <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a> -->
                            <?php if ($user->id !== $auth->id): ?>
									<a href="_actions/delete.php?id=<?=$user->id?>" class="btn btn-link btn-danger btn-just-icon remove" onClick="return confirm('Are you sure?')"><i class="material-icons">close</i></a>
								<?php endif?>

                          </td>
                        </tr>
						<?php endforeach?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
        </div>
		<!-- datatable end -->
      </div>

      <?php include "nav/footer.php"?>
    </div>
  </div>


  <?php include "nav/RightSidebar.php"?>

  <script>
    $(document).ready(function() {
      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search User records",
        }
      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');
        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>