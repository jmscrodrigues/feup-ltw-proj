<?php
include_once('../database/db_user.php');
include_once('../includes/session.php');

$password = $_POST['password'];
$confirmpassword = $_POST['repeatpassword'];
$newpassword = $_POST['newpassword'];

if ($newpassword != $confirmpassword) {
    return -1;
}

$actualUsername = get_username();

editPassword($actualUsername, $password, $newpassword);

header('Location: ../pages/user_area_form.php');

?>