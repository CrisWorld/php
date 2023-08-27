<?php 
    session_start();
    if (session_destroy()) header('location: login.php');
    else {
        echo "<script>alert('Logout không thành công !')</script>";
        header('location: ../index.php');
    }
?>