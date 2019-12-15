<?php
session_start();

function set_current_user($userId, $username)
{
    $_SESSION['userId'] = $userId;
    $_SESSION['username'] = $username;
}

function get_user_id()
{
    if (isset($_SESSION['userId'])) {
        return $_SESSION['userId'];
    } else {
        return null;
    }
}

function get_username()
{
    if (isset($_SESSION['username'])) {
        return $_SESSION['username'];
    } else {
        return null;
    }
}

?>