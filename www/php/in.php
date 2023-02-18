<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);
$_SESSION['login'] = $login;
$_SESSION['password'] = $password;
$check_login = mysqli_query($mysqli, "SELECT * FROM users WHERE `login`= '$login' AND `password`= '$password'");
$check_log = mysqli_query($mysqli, "SELECT * FROM users WHERE `login`= '$login' ");

if (mysqli_num_rows($check_login) == 1) {
    $user = mysqli_fetch_assoc($check_login);
    $_SESSION["id_profile"] = $user['id'];
    $_SESSION["phone_profile"] = $user['mobile_phone'];
    $_SESSION["name_profile"] = $user['name'];
    $_SESSION["login_profile"] = $user['login'];
    header('Location: ../profile.php');
} else if (mysqli_num_rows($check_log) == 1) {
    $_SESSION['message'] = "Mistake in password, please, try again write password";
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    header('Location: ../index.php');
} else {
    $_SESSION['message'] = "WE DON'T FOUND LOGIN OR PASSWORD, PLEASE , CHECK YOUR LOGIN OR PASSWORD ONE MORE ";
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    header('Location: ../index.php');
}
