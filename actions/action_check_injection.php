<?php
function checkInjectionSignIn($username, $password)
{
    if (preg_match('/[\'^£$%&*()}{@#~?><>, "|=+¬-]/', $username)) {
        return -1;
    } else if (preg_match('/[\'^£$%&*()}{@#~?><>, "|=+¬-]/', $password)) {
        return -1;
    } else {
        return 1;
    }
}

function checkInjectionSignUp($username, $name, $password)
{
    if (preg_match('/[\'^£$%&*()}{@#~?><>, "|=+¬-]/', $username)) {
        return -1;
    } else if (preg_match('/[\'^£$%&*()}{@#~?><>,"|=+¬-]/', $name)) {
        return -1;
    } else if (preg_match('/[\'^£$%&*()}{@#~?><>, "|=+¬-]/', $password)) {
        return -1;
    } else {
        return 1;
    }

}

function checkInjectionEmail($email)
{


    if (!preg_match("/^[a-z0-9_@\-.]+$/i", $email)) {
        return -1;
    } else {
        return 1;
    }

}


?>

