<?php

    include_once('../actions/action_check_injection.php');
    include_once('../database/db_user.php');
    include_once('../includes/session.php');


    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['reppassword'];

    $name = $firstName + ' ' + $lastName;

    if($password != $confirmPassword) {
        header('Location: ../pages/sign_up.php');
    }

    if(checkInjectionSignUp($username, $name, $password) == -1) {
        header('Location: ../pages/sign_up.php');
    }

    $userId = createAccount($username, $name, $email, $password, $confirmPassword);
    if ($userId == -1) {
        header('Location: ../pages/sign_up.php');
    }

    else {
        set_current_user($userId, $username);
        header('Location: ../pages/home.php');
    }

?>