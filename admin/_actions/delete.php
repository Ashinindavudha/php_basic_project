<?php
include "../../vendor/autoload.php";

use Helpers\Auth;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$auth = Auth::check();

$table = new UsersTable(new MySQL());
$id = $_GET['id'];
$table->delete($id);

//HTTP::redirect("../userIndex.php");
header("location: ../userIndex.php");
