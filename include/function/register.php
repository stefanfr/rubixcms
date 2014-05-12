<?php
require_once("../../global.php");

if(isset($_POST['register'])){
    if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])){
        if($_POST['password'] == $_POST['passwordh']){
            function cryptPass($input, $rounds = 9){
                $salt = "";
                $saltChars = array_merge(range("A", "Z"), range("a", "z"), range(0, 9));
                for($i = 0; $i < 22; $i++){
                    $salt .= $saltChars[array_rand($saltChars)];
                }
                return crypt($input, sprintf('$2y$%02d$', $rounds) . $salt);
            }

            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $ip = $_SERVER['REMOTE_ADDR'];
            $birth = $_POST['birth'];
            $hashed_password = cryptPass($password);

            $figure = $_CONFIG['hotel']['figure'];
            $motto = $_CONFIG['hotel']['motto'];

            $db->query("INSERT INTO users (username, password, mail, look, motto, account_created, last_online, ip_last, ip_reg)
                        VALUES ('".$username."', '".$hashed_password."', '".$email."', '".$figure."', '".$motto."', UNIX_TIMESTAMP(), UNIX_TIMESTAMP(), '".$_SERVER['REMOTE_ADDR']."', '".$_SERVER['REMOTE_ADDR']."')")or die($db->error);
            $_SESSION['username'] = $username;
            header("location: ../../me.php");
        }
        else{
            header("location: ../../register.php?error=Password");
            $_SESSION['error']['Password'] = true;
        }
    }else{
        header("location: ../../register.php?error=EmptyFields");
        $_SESSION['error']['EmptyFields'] = true;
    }
}
else{
    header("location: ../../register.php");
}
?>