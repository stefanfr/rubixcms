<?php
    require_once("include/config.php");
    require_once("include/class/Cms.class.php");
    require_once("include/class/Users.class.php");

    $users = new Users();
    $cms = new Cms();

    session_start();

    if(USERNAME_REQUIRED == TRUE && !isset($_SESSION["username"]))
    header("Location: /index.php");
?>