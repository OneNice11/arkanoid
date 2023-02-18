<?php
    session_start();
    require_once 'connect.php';
    $mobile=$_POST['mobile'];
    $full_name=$_POST['full_name'];
    $login=$_POST['login'];
    $password=$_POST['password'];
    $_SESSION['mobile']=$_POST['mobile'];
    $_SESSION['full_name']=$_POST['full_name'];
    $_SESSION['login']=$_POST['login'];
    $_SESSION['password']=$_POST['password'];
    $check_user = mysqli_query($mysqli, "SELECT login FROM `users` WHERE `login`= '$login'");
    $check_mobile=mysqli_query($mysqli, "SELECT login FROM `users` WHERE `mobile_phone` = '$mobile'");
    if(mysqli_num_rows($check_user)==1 && mysqli_num_rows($check_mobile)==1){
        $_SESSION['message']="WE HAVE THIS LOGIN AND MOBILE NUMBER";
        header('Location: ../registration.php');
        unset($_SESSION['mobile']);
        unset($_SESSION['login']);
    }
    else if(mysqli_num_rows($check_mobile)==1 && mysqli_num_rows($check_user)!=1){
            $_SESSION['message']="WE HAVE THIS MOBILE";
            header('Location: ../registration.php');
            unset($_SESSION['mobile']);
        }
    else if(mysqli_num_rows($check_mobile)!=1 && mysqli_num_rows($check_user)==1){
            $_SESSION['message']="WE HAVE THIS LOGIN";
            header('Location: ../registration.php');
            unset($_SESSION['login']);
        }
    else {
        if(strlen($password)<8){
            $_SESSION['message']="WRITE MORE BIG PASSWORD";
            header('Location: ../registration.php');
            unset($_SESSION['password']);
        }
        else{
        $password= md5($password);
        mysqli_query($mysqli,"INSERT INTO `users`(`id`, `mobile_phone`, `name`, `login`, `password`) 
        VALUES (NULL,'$mobile','$full_name','$login','$password')");
        unset($_SESSION['mobile']);
        unset($_SESSION['full_name']);
        unset($_SESSION['login']);
        unset($_SESSION['password']);
        $_SESSION['message'] = "WELCOME TO OUR CLUB";
        header('Location: ../index.php');
        }
    }
    
    
