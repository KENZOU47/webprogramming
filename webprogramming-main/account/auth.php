<?php
session_start();

if(isset($_SESSION['account'])){
    if (!(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')) {
        echo('<h1>this is a restricted page</h1>');
        exit;
    }
}else{
    header('location: ../account/login.php');
} 

