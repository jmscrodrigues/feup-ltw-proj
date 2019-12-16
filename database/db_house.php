<?php

$dir = $_SERVER['DOCUMENT_ROOT'];
include_once("$dir/database/connection.php");

function getHousesFilteredSortByPopularity($minPrice, $maxPrice, $minRating, $maxRating, $city, $country, $name)
{
    /**
     * Returns the houses filtered and sorted by popularity
     */
    global $dbh;
    $stmt = $dbh->prepare('select  PLACE.* from PLACE,RESERVATION WHERE (PLACE.price between ? AND ?) AND (Place.classification between ? AND ?) AND PLACE.city like ? AND PLACE.country like ? AND PLACE.name like ? AND PLACE.idPlace=RESERVATION.idPlace GROUP BY PLACE.name ORDER BY count(*) DESC;');
    $stmt->execute(array($minPrice, $maxPrice, $minRating, $maxRating, "%$city%", "%$country%", "%$name%"));
    $result = $stmt->fetchAll();
    if ($result == false) {
        print("There are no houses with those parameters.");
        return -1;
    } else return $result;
}

function getHousesFilteredSortByClassification($minPrice, $maxPrice, $city, $country, $name)
{
    /**
     * Returns the houses filtered and sorted by classification
     */
    global $dbh;
    $stmt = $dbh->prepare('select * from PLACE WHERE (PLACE.price between ? AND ?) AND PLACE.city like "%?%" AND PLACE.country like "%?%" AND PLACE.name like "%?%" ORDER BY classification DESC;');
    $stmt->execute(array($minPrice, $maxPrice, $city, $country, $name));
    $result = $stmt->fetchAll();
    if ($result == false) {
        print("There are no houses with those parameters.");
        return -1;
    } else return $result;
}


function getHousesFilteredSortByRecent($minPrice, $maxPrice, $minRating, $maxRating, $city, $country, $name)
{
    /**
     * Returns the houses filtered and sorted by recent
     */
    global $dbh;
    $stmt = $dbh->prepare('select * from PLACE WHERE (PLACE.price between ? AND ?) AND (Place.classification between ? AND ?) AND PLACE.city like ? AND PLACE.country like ? AND PLACE.name like ? ORDER BY idPlace DESC;');
    $stmt->execute(array($minPrice, $maxPrice, $minRating, $maxRating, "%$city%", "%$country%", "%$name%"));
    $result = $stmt->fetchAll();
    if ($result == false) {
        print("There are no houses with those parameters.");
        return -1;
    } else return $result;
}

function getHousesFilteredSortByPrice($minPrice, $maxPrice, $city, $country, $name)
{
    /**
     * Returns the houses filtered and sorted by price
     */
    global $dbh;
    $stmt = $dbh->prepare('select * from PLACE WHERE (PLACE.price between ? AND ?) AND PLACE.city like "%?%" AND PLACE.country like "%?%" AND PLACE.name like "%?%" ORDER BY price DESC;');
    $stmt->execute(array($minPrice, $maxPrice, $city, $country, $name));
    $result = $stmt->fetchAll();
    if ($result == false) {
        print("There are no houses with those parameters.");
        return -1;
    } else return $result;
}

function isOwner($idHouse, $idUser)
{
    /**
     * Checks if house is owned by user
     */
    global $dbh;
    $stmt = $dbh->prepare('select * from PLACE WHERE idPlace = ? AND idUser = ?;');
    $stmt->execute(array($idHouse, $idUser));
    $result = $stmt->fetchAll();
    return $result != false;
}

function getHouse($idHouse)
{

    global $dbh;
    $stmt = $dbh->prepare('select * from PLACE WHERE idPlace = ?;');
    $stmt->execute(array($idHouse));
    $result = $stmt->fetch();
    return $result;
}

function getPicture($idHouse)
{
    global $dbh;
    $stmt = $dbh->prepare("SELECT picturePath FROM PICTURES WHERE idPlace = ?");
    $stmt->execute(array($idHouse));
    $image = $stmt->fetchColumn();
    return $image;
}

function getPopularHouses() {
    global $dbh;

    $stmt = $dbh->prepare('SELECT * FROM PLACE');
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function getNewHouses() {
    global $dbh;

    $stmt = $dbh->prepare('select * from PLACE ORDER BY idPlace DESC LIMIT 4');
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function getTopHouses() {
    global $dbh;

    $stmt = $dbh->prepare('select * from PLACE ORDER BY classification DESC LIMIT 4');
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function getAllCountries() {
    global $dbh;

    $stmt = $dbh->prepare('select distinct country from PLACE ORDER BY country');
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function getAllCities() {
    global $dbh;

    $stmt = $dbh->prepare('select distinct city from PLACE ORDER BY city');
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;

function addHouse($userId, $houseName, $country, $price, $city, $description, $street, $number) {
    
    global $dbh;

    $stmt = $dbh->prepare('insert into PLACE(name,price,street,number,city,country,description,idUser) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute(array($houseName, $price, $street, $number, $city, $country, $description, $userId));

    $auxstmt = $dbh->prepare('select idPlace from place order by idPlace desc limit 1');
    $auxstmt->execute();
    $result = $auxstmt->fetchAll();

    if($result == false) {
        return -1;
    }

    $auximage = $dbh->prepare('select idPicture from pictures order by idPicture desc limit 1');
    $auximage->execute();
    $result1 = $auximage->fetchAll();

    $idPic = $result1[0]['idPicture'] +1;

    $stmt2 = $dbh->prepare('insert into pictures values (NULL, ?, ?, 1)');
    $stmt2->execute(array("../assets/images/house_picture_$idPic.jpg", $result[0]['idPlace']));

    return $idPic;
}


function makeReservation($initialDate, $endDate, $idPlace, $idUser) {
    global $dbh;

    $stmt = $dbh->prepare('select * from reservation where idPlace = ?');
    $stmt->execute();
    $result = $stmt->fetchAll();

    if ($result == false) {
        $stmt2 = $dbh->prepare('insert into reservation values (NULL, ?, ?, ?, ?)');
        $stmt2->execute(array($idUser, $idPlace, $initialDate, $endDate));
        return 0;
    }

    else {

        for ($i = 0; $i < count($result); $i++) {
            if ( ((date_create_from_format('Y-m-d', $result[$i]['beginDate']) > $initialDate) && (date_create_from_format('Y-m-d', $result[$i]['beginDate']) < $endDate)) ||  ( (date_create_from_format('Y-m-d',$result[$i]['endDate']) > $initialDate) && (date_create_from_format('Y-m-d', $result[$i]['endDate']) < $endDate) )) {
                return -1;
            }
        }
    
        
        $stmt3 = $dbh->prepare('insert into reservation values (NULL, ?, ?, ?, ?)');
        $stmt3->execute(array($idUser, $idPlace, $initialDate, $endDate));
        return 0; 


    }

}

?>