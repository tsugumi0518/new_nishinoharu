<?php 
    // session_start();
    // if (!isset($_SESSION['user'])){
    //     header('Location: top.php');
    //     exit();
    // }
    session_start();
    if (!isset($_SESSION['user'])){
        header('Location: index.php');
        exit();
    }

    
?>