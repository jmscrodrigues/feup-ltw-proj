<?php

    include_once('../database/db_house.php');
    include_once('../includes/session.php');

	$userId = get_user_id();
	$houseId = $_POST['idplace'];
	$house=getHouse($houseId);

	
if (isOwner($houseId,$userId)){
	if ($house['picture']!='/assets/images/empty_user.jpg')
    	unlink($house['picture']);
	
	move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/house_picture_$houseId.jpg");
	
	updateHouseField($houseId,"/assets/images/house_picture_$houseId.jpg",'picture');

	header("Location: ../pages/house_area_form.php?idPlace=$houseId");
}
else 
    header("Location: ../pages/house_detail_page.php?idPlace=$houseId");

?>
