<?php 
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === 'ashin@gmail.com' and $password === 'ashinvip@') {
        $_SESSION['user'] = ['username' => 'AshinIndavudha'];
        header('location: ../profile.php');
    } else {
        // header('location: ../index.php?incorrect=1');
        header('location: ../../index.php?incorrect=1');
    }
?>

