<?php

    include_once('../database/db_house.php');
    include_once('../includes/session.php');

    $userId = get_user_id();

    $houseName = $_POST['name'];
    $country = $_POST['country'];
    $price = $_POST['price'];
    $city = $_POST['city'];
    $description = $_POST['description'];
    $street = $_POST['street'];
    $number = $_POST['number'];

    $idPic = addHouse($userId, $houseName, $country, $price, $city, $description, $street, $number);
    
    move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/house_picture_$idPic.jpg");

    header('Location: ../pages/user_area_houses.php');


?>