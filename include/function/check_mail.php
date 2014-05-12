<?php
define('USERNAME_REQUIRED', FALSE);
//check we have username post var
if(isset($_POST["email"]))
{
    include_once('../../global.php');
    //check if its ajax request, exit script if its not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }

    //trim and lowercase username
    $mail =  $_POST['email'];

    //check username in db
    $results = $db->query("SELECT id FROM users WHERE mail='$mail'");

    //return total count
    $mail_exist = $results->num_rows; //total records

    //if value is more than 0, username is not available
    if($mail_exist > 1) {
        die('<img src="include/style/images/not-available.png" />');
    }else{
        die('<img src="include/style/images/available.png" />');
    }
}
?>