<?php
session_start();
if (!$_SESSION['id_profile']) {
    header("location:javascript://history.go(-1)");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkanoid Game</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">

</head>

<body>
    <?php

    // require_once 'php/connect.php';
    // $check_user = mysqli_query($mysqli, "SELECT * FROM `users` WHERE `login`= '$login' AND `password`= '$password' ");
    ?>
    <section>
        <div class="container1">
            <div class="div1profile">
                <div class="div2profile">
                    <div>

                        <h2 class="h21">Hello,<?= $_SESSION["name_profile"]  ?> </h2>
                        <a href="php/logout.php">EXIT</a>

                    </div>
                    <div>
                        <div id="field">
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>
                            <div class="brick"></div>

                            <div id="paddle"></div>
                            <div id="ball" style="left: 154px; top: 258px;"></div>
                            <div id="lifesNode" name="lifesNode">3</div>
                            <div id="scoreNode" name="score">0</div>

                        </div>
                    </div>
                    <button onclick="ark_game()">start game</button>
                </div>
            </div>
        </div>
    </section>
    
    <script src="js/arkanoid.js"></script>
    <?php
    require_once 'php/connect.php';
    ?>
</body>

</html>