<?php
session_start();
require_once 'connect.php';
$account = $_POST['mobile'];
$mail = $_POST['mail'];
$_SESSION['account1'] = $_POST['account'];
$_SESSION['mail'] = $_POST['mail'];
$check_user = mysqli_query($mysqli, "SELECT login FROM `users` WHERE `login`= '$account'");
$check_mobile = mysqli_query($mysqli, "SELECT login FROM `users` WHERE `mobile_phone` = '$account'");
if (mysqli_num_rows($check_user) == 1 || mysqli_num_rows($check_mobile) == 1) {
    $key = md5($log) . rand(1000, 9999);
    mysqli_query($mysqli, "UPDATE `users` SET `change_key`='$key' WHERE `login`= '$account'");
    mysqli_query($mysqli, "UPDATE `users` SET `change_key`='$key' WHERE `mobile_phone` = '$account'");
    $url = "key= " . $key;
    $mess = "Do you want to change your password?\n\n Please, write this key in special field if you want change password " . $url;
    mail($mail, 'Confirm that you want to change your email', $mess);
    unset($_SESSION['account1']);
    unset($_SESSION['mail']);
    header('Location: ../newpass.php');
} else {
    $_SESSION['message'] = "We don't found this account";
    unset($_SESSION['account1']);
    header('Location: ../reset.php');
}
unset($_SESSION['account1']);
unset($_SESSION['mail']);
