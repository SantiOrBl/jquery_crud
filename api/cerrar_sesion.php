<?php 
    session_start();
    session_destroy();
    $_SESSION['sesion_iniciada'] =0;
    header("location:../index.php");
?>