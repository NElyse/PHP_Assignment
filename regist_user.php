<?php
    include 'db-connect.php';
    if (isset($_POST['submit'])) 
    session_start();
    {
        //get form input
    
    $f=$_POST['FName'];
    $l=$_POST['LName'];
    $e=$_POST['Email'];
    $p=$_POST['Password'];

    $_SESSION['email']=$ema_ver;
    $_SESSION['name']=$name;

    }

?>
