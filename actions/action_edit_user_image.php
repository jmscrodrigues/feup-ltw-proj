<?php

	include_once('../database/db_user.php');
	include_once('../includes/session.php');
	$userId=get_user_id();
	$user=getUserInfo($userId);
	
	move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/profile_picture_$userId.jpg");
	addPicture($userId,"/assets/images/profile_picture_$userId.jpg");

	header('Location: ../pages/user_area_form.php');

?>