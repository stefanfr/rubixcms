<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 25-4-14
 * Time: 20:03
 */

class Cms {

    //check login
    public static function Checkusername($username = '')
    {
        global $db;
        $user = $db->prepare('SELECT * FROM users WHERE username = ?');
        $user->bind_param('s', $username);
        $user->execute();
        return $result = $user->get_result();
    }









    //errors
    public static function CheckError(){
        if(isset($_SESSION['error'])){
            foreach($_SESSION['error'] as $error){
                if($_SESSION['error']['WrongPassword'] == true){
                    $error_head = "Let op:";
                    $error_body = " Uw password is niet correct";
                    echo"<div class=\"alert alert-danger\"><b>".$error_head."</b>".$error_body."</div>";
                    $_SESSION['error']['WrongPassword'] = false;
                }
                else if($_SESSION['error']['WrongUsername'] == true){
                    $error_head = "Let op:";
                    $error_body = " Uw Gebruikersnaam is niet correct";
                    echo"<div class=\"alert alert-danger\"><b>".$error_head."</b>".$error_body."</div>";
                    $_SESSION['error']['WrongUsername'] = false;
                }
                else if($_SESSION['error']['Password'] == true){
                    $error_head = "Let op:";
                    $error_body = " Uw heeft niet 2 keer het zelfde wachtwoord ingevuld";
                    echo"<div class=\"alert alert-danger\"><b>".$error_head."</b>".$error_body."</div>";
                    $_SESSION['error']['Password'] = false;
                }
                else if($_SESSION['error']['EmptyFields'] == true){
                    $error_head = "Let op:";
                    $error_body = " U heeft een of meer velden niet ingevuld";
                    echo"<div class=\"alert alert-danger\"><b>".$error_head."</b>".$error_body."</div>";
                    $_SESSION['error']['EmptyFields'] = false;
                }
            }
        }
        return;
    }

} 