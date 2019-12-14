<?php

    include_once('../actions/action_check_injection.php');
    include_once('../database/db_user.php');
    include_once('../includes/session.php');


    $username = $_POST['username'];
    $password = $_POST['password'];

    if (checkInjectionSignIn($username, $password) == -1) {
        header('Location: ../pages/sign_in.php');
    }

    $userId = verifyLogin($username, $password);

    if ($userId == 0) {
        header('Location: ../pages/sign_in.php');
    }

    else {
        set_current_user($userId, $username);
        header('Location: ../');
    }



?>