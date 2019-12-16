<?php

    include_once('../database/db_house.php');
    include_once('../includes/session.php');

    $userId = get_user_id();

    $houseId = $_POST['idplace'];
    $houseName = $_POST['name'];
    $country = $_POST['country'];
    $price = $_POST['price']; 
    $city = $_POST['city'];
    $description = $_POST['description'];
    $street = $_POST['street'];
	$number = $_POST['number'];
	
if (isOwner($houseId,$userId)){
	if ($houseName!=NULL)
		updateHouseField($houseId, $houseName,'name');

	if ($country!=NULL)
		updateHouseField($houseId, $country,'country');

	if ($price!=NULL)
		updateHouseField($houseId, $price,'price');

	if ($city!=NULL)
		updateHouseField($houseId, $city,'city');

	if ($description!=NULL)
		updateHouseField($houseId, $description,'description');

	if ($street!=NULL)
		updateHouseField($houseId, $street,'street');

	if ($number!=NULL)
		updateHouseField($houseId, $number,'number');
	
    header("Location: ../pages/house_area_form.php?idPlace=$houseId");
}
else 
    header("Location: ../pages/house_detail_page.php?idPlace=$houseId");

?>