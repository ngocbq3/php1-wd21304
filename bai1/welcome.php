<?php
session_start();

if ( !isset($_SESSION['user']) ){
    header("location: login.php");
    die;
}
?>
<div>Chào mứng <b><?=  $_SESSION['user'] ?></b> đến với website</div>