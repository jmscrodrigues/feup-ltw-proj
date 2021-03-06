<?php
include_once('../includes/session.php');
include_once('../templates/common.php');
include_once('../templates/house.php');

// see if user is NOT logged in
$username = get_username();
// if not, redirect to sign in page
if ($username == null)
    die(header('Location: sign_in.php'));

$houseId = $_GET['idPlace'];
if (isOwner($houseId,get_user_id())){
draw_header_alternative($username);
draw_house_rents($houseId);
draw_footer($username);}
else 
    header("Location: ../pages/house_detail_page.php?idPlace=$houseId");
?>
