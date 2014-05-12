<?php
define('USERNAME_REQUIRED', FALSE);
//check we have username post var
if(isset($_POST["username"]))
{
    include_once('../../global.php');
    //check if its ajax request, exit script if its not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }

    //trim and lowercase username
    $username =  strtolower(trim($_POST["username"]));

    //sanitize username
    $username = filter_var($username, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);

    //check username in db
    $results = $db->query("SELECT id FROM users WHERE username='$username'");

    //return total count
    $username_exist = $results->num_rows; //total records

    //if value is more than 0, username is not available
    if($username_exist) {
        die('<img src="include/style/images/not-available.png" />');
    }else{
        die('<img src="include/style/images/available.png" />');
    }
}
?>