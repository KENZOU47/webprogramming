<?php
    require_once('../classes/account.class.php');

    $productObj = new Account();

    $role = $productObj->getroles();

    header('Content-Type: application/json');
    echo json_encode($role);
