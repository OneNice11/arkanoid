<?php
    session_start();
    require_once 'connect.php';
    $key=$_POST['key'];
    $pass=$_POST['new_pass'];
    $confirm_pass=$_POST['confirm_pass'];
    $check_user = mysqli_query($mysqli, "SELECT login FROM `users` WHERE `change_key`= '$key'");
    $_SESSION['key']=$_POST['key'];
    $_SESSION['pass']=$_POST['pass'];
    $_SESSION['confirm_pass']=$_POST['confirm_pass'];
    if(mysqli_num_rows($check_user)==1){
        if($pass===$confirm_pass && strlen($confirm_pass)>7){
             $confirm_pass=md5($confirm_pass);
             mysqli_query($mysqli, "UPDATE `users`SET `password`='$confirm_pass'  WHERE `change_key`= '$key'");
             unset($_SESSION['key']);
             unset($_SESSION['pass']);
             unset($_SESSION['confirm_pass']);
             header('Location: ../index.php');
             
        }
        else if($pass!==$confirm_pass){
            $_SESSION['message']="Wrong passwords, try again";
            unset($_SESSION['confirm_pass']);
            header('Location: ../newpass.php');
            
        }
        else  {
            $_SESSION['message']="Very small password";
            unset($_SESSION['confirm_pass']);
            header('Location: ../newpass.php');
            
        }
    }
    else {
        $_SESSION['message']="This is the wrong key";
        unset($_SESSION['key']); 
        header('Location: ../newpass.php');
           
    }
