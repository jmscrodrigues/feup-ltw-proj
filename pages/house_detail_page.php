<?php
	include_once('../includes/session.php');
	include_once('../templates/common.php');
	include_once('../templates/house.php');

	// see if user is logged in
	$username = get_username();

	// TODO verify is house ID exists (if not -> 404 page)
	$houseId = $_GET['idPlace'];

	draw_header_alternative($username);
	draw_house_rent_area($houseId);
	draw_footer($username);
?>
