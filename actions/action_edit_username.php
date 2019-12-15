<?php
include_once('../database/db_user.php');
include_once('../includes/session.php');

$newName = $_POST['name'];
$newUsername = $_POST['username'];

$actualUsername = get_username();

editUsername($actualUsername, $newName, $newUsername);

set_current_user(get_user_id(), $newUsername);


header('Location: ../pages/user_area_form.php');


?>