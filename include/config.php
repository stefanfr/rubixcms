<?php
    $_CONFIG['db']['hostname'] = "localhost";
    $_CONFIG['db']['username'] = "root";
    $_CONFIG['db']['password'] = "230894";
    $_CONFIG['db']['database'] = "cms";
    $_CONFIG['db']['poort'] = "3306";

    $db = new mysqli($_CONFIG['db']['hostname'], $_CONFIG['db']['username'], $_CONFIG['db']['password'], $_CONFIG['db']['database'], $_CONFIG['db']['poort']);
    if(mysqli_connect_errno()){
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $_CONFIG['hotel']['hotelname'] = 'Rubix'; //Default figure users will register with.
    $_CONFIG['hotel']['hotelnameshort'] = 'Rubix'; //Default figure users will register with.
    $_CONFIG['hotel']['figure'] = 'hr-100.hd-190-7.ch-210-66.lg-270-82.sh-290-80'; //Default figure users will register with.
    $_CONFIG['hotel']['motto'] = 'I <3 '.$_CONFIG['hotel']['hotelname']; //Default figure users will register with.

?>