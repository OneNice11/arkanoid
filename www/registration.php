<?php
session_start();
if($_SESSION['id_profile']){
    header("location:javascript://history.go(-1)");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration * Game</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
</head>

<body>


    <section class="section1">

        <div class="container">
            <div class="flex1">
                <div></div>
                <div class="block">
                    <div class="div1section1">
                        <h1>ARKANOID</h1>
                        <form action="php/regist.php" method="post" class="form2">
                            <input type="tel" name="mobile" placeholder="Mobile" value="<?= $_SESSION["mobile"] ?>" required>
                            <input type="text" name="full_name" placeholder="Full name" value="<?= $_SESSION["full_name"] ?>" required>
                            <input type="text" name="login" placeholder="Login" value="<?= $_SESSION["login"] ?>" required>
                            <input type="password" name="password" placeholder="Password" value="<?= $_SESSION["password"] ?>" required>
                            <button type="submit" class="sub1">Registration</button>
                        </form>
                        <h3>OR</h3>
                        <a href="reset.php">
                            Forgot your password?
                        </a>
                    </div>
                    <div class="div1section1">
                        <?php
                        if (isset($_SESSION['message'])) {
                            echo "<p class='msg'>" . $_SESSION['message'] . "  </p>";
                        }

                        unset($_SESSION['message']);
                        ?>
                        <p>Do you have account? <a href="index.php">Input</a> </p>
                    </div>
                    <div class="div2section1">
                        <h2>Install application</h2>
                        <div class="flex1">
                            <a href=""><img class="img1" src="https://www.instagram.com/static/images/appstore-install-badges/badge_ios_russian-ru.png/bfba6d0fd6bd.png" alt="appstore"></a>
                            <a href=""><img class="img2" src="https://www.instagram.com/static/images/appstore-install-badges/badge_android_russian-ru.png/4c70948c09f3.png" alt="google_market"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</body>

</html>