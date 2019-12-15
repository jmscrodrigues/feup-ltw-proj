<?php

include_once('../actions/action_check_injection.php');
include_once('../database/db_user.php');
include_once('../includes/session.php');


$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$password = $_POST['password'];
$confirmPassword = $_POST['repeatpassword'];


if ($password != $confirmPassword) {
    header('Location: ../pages/sign_up.php');
}

if (checkInjectionSignUp($username, $name, $password) == -1) {
    header('Location: ../pages/sign_up.php');
}

if (checkInjectionEmail($email) == -1) {
    header('Location: ../pages/sign_up.php');
}

$userId = createAccount($username, $name, $phonenumber $email, $password);
    if ($userId == 0) {
        header('Location: ../pages/sign_up.php');
    } else {
        set_current_user($userId, $username);
        header('Location: ../');
    }

?>