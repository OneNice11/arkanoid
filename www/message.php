<?php
session_start();
if(!$_SESSION['id_profile']){
    header("location:javascript://history.go(-1)");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
</head>
<body>
    <?php
        require_once 'header/header.php';
        // require_once 'php/connect.php';
        // $check_user = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `login`= '$login' AND `password`= '$password' ");
    ?>
    <div>   
        <div class="flex2">
        <a href="profile.php">My profile</a>
        <a href="php/logout.php">EXIT</a>
        <form action="" method="post">
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </form>
        </div>
    </div>

</body>
</html>