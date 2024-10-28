<?php
session_start();

if(isset($_SESSION['account'])){
    if(!(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER
    ['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')){
        echo('This page is restricted. You do not have the authority to access the page.');
        exit();
    }
}else {
    header('location: ../account/login.php');
}