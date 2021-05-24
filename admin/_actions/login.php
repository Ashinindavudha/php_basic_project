<?php
// session_start();
// $email = $_POST['email'];
// $password = $_POST['password'];

// if ($email === 'ashin@gmail.com' and $password === 'ashinvip@') {
//     $_SESSION['user'] = ['username' => 'AshinIndavudha'];
//     header('location: ../profile.php');
// } else {
//     // header('location: ../index.php?incorrect=1');
//     header('location: ../../index.php?incorrect=1');
// }

session_start();

include "../../vendor/autoload.php";

use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$email = $_POST['email'];
$password = md5($_POST['password']);

$table = new UsersTable(new MySQL());

$user = $table->findByEmailAndPassword($email, $password);

if ($user) {

    if ($table->suspended($user->id)) {
        HTTP::redirect("../index.php", "suspended=1");
    }

    $_SESSION['user'] = $user;
    //HTTP::redirect("../profile.php");
    header("location: ../profile.php");
} else {
    HTTP::redirect("/index.php", "incorrect=1");
}
