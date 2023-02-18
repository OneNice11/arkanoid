<?php
    $mysqli= mysqli_connect("localhost","root","","instagram");
    $mysqli->query("SET NAMES 'utf8'");
    if (!$mysqli) {
    die('Error connect to DB');
    }
?>
