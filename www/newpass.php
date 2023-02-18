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
    <title>Change Password * Instagram</title>
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
                        <h1>WRITE NEW PASSWORD</h1>
                        <form action="php/change.php" method="post" class="form2">
                            <input type="text" name="key" placeholder="Write key" value="<?= $_SESSION["key"] ?>" required>
                            <input type="password" name="new_pass" placeholder="New password" value="<?= $_SESSION["pass"] ?>" required>
                            <input type="password" name="confirm_pass" placeholder="Confirm new password" value="<?= $_SESSION["confirm_pass"] ?>" required>
                            <button type="submit" class="sub1">Change new password</button>
                        </form>
                    </div>
                    <div class='div1section1'>
                        <?php
                        if (isset($_SESSION['message'])) {
                            echo "<p class='msg'>" . $_SESSION['message'] . "  </p> ";
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