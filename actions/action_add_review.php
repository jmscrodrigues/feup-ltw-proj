<?php

    include_once('../database/db_house.php');
	include_once('../includes/session.php');
	
	$description = $_POST['description'];
    $rating = $_POST['rating'];
	$idReservation = $_POST['idReservation'];
	
	addReview($idReservation,$rating,$description);

    header('Location: ../pages/user_area_rents.php');
?>