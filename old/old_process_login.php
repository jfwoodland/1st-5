<?php

include 'db_connect.php';
include 'functions.php';
 
sec_session_start();
 
if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $password = $_POST['p'];
 
    if (login($email, $password, $mysqli) == true) {
         
        header('Location: ./protected_page.php');
    } else {
         
        header('Location: ./login.php');
    }
} else {
    
    echo 'Invalid Request';
}
