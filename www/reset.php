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
    <title>Reset Password * Instagram</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
</head>

<section class="section1">

        <div class="container">
            <div class="flex1">
                <div></div>
                <div class="block">
                    <div class="div1section1">
                        <h1>Enter your email address, username or phone number and we will send you a link to restore access to your account.</h1>
                        <form action="php/recovery.php" method="post" class="form2">
                            <input type="tel" name="mobile" placeholder="Mobile or Login" value="<?= $_SESSION["account1"] ?>" required>
                            <input type="email" name="mail" placeholder="E-mail" value="<?= $_SESSION["mail"] ?>" required>
                            <button type="submit" class="sub1">Change password</button>
                        </form>
                        <h3>OR</h3>
                        <a href="registration.php">
                            Create a new account?
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
                </div>
            </div>
        </div>

    </section>
    </body>

</html>