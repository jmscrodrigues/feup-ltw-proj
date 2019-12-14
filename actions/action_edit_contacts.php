<?php
    include_once('../database/db_user.php');
    include_once('../includes/session.php');
    include_once('action_check_injection.php');

    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];

    if (checkInjectionEmail($email) == -1) {
        return -1;
    }

    $username = get_username();

    editContacts($username, $email, $phonenumber);



    header('Location: ../pages/user_area_form.php');
?>