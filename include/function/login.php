<?php
define('USERNAME_REQUIRED', FALSE);
if(isset($_POST['login'])){
    require_once("../../global.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = $cms->Checkusername($username);
    if ($row = $result->fetch_assoc()) {
        if(crypt($password, $row['password']) == $row['password']){
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            header("location: ../../me.php");
        }
        else{
            $_SESSION['error']['WrongPassword'] = true;
            header("location: ../../index.php?error=WrongPassword");
        }
    }
    else{
        $_SESSION['error']['WrongUsername'] = true;
        header("location: ../../index.php?error=WrongUsername");
    }
}else{
    header("location: ../../index.php");
}

?>