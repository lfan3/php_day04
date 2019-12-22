<?php
include 'auth.php';

session_start();
if(isset($_GET['login']) && isset($_GET['passwd'])){
    $login = $_GET['login'];
    $passwd = $_GET['passwd'];
    if (auth($login, $passwd)){
        $_SESSION['loggued_on_user'] = $login;
        echo "OK\n";
    }
    else{
        $_SESSION['loggued_on_user'] = "";
        echo "ERROR\n";
    }
}

?>
