<?php

include_once("../database/connection.php");

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
    return $result;}

function addHouse($userId, $houseName, $country, $price, $city, $description, $street, $number) {
    
    global $dbh;

    $stmt = $dbh->prepare('insert into PLACE(name,price,street,number,city,country,description,idUser) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute(array($houseName, $price, $street, $number, $city, $country, $description, $userId));

    $auxstmt = $dbh->prepare('select idPlace from place order by idPlace desc limit 1');
    $auxstmt->execute();
    $result = $auxstmt->fetch();

    if($result == false) {
        return -1;
    }

    $idPlace = $result['idPlace'];

    $stmt2 = $dbh->prepare('update place set picture=? where idPlace = ?');
    $stmt2->execute(array("../assets/images/house_picture_$idPlace.jpg", "$idPlace"));

    return $idPlace;
}


function makeReservation($initialDate, $endDate, $idPlace, $idUser) {
    global $dbh;

    if (isAvailable($initialDate, $endDate,$idPlace)){
        $stmt3 = $dbh->prepare('insert into reservation values (NULL, ?, ?, ?, ?)');
        $stmt3->execute(array($idPlace, $idUser, $initialDate, $endDate));
        return 0; }
    else return -1;

}

function isAvailable($beginDate,$endDate,$idPlace){
    global $dbh;

    $stmt = $dbh->prepare('select * from reservation where idPlace = ?');
    $stmt->execute(array($idPlace));
    $result = $stmt->fetchAll();

    if ($result == false) 
        return 1;
    for ($i = 0; $i < count($result); $i++) {
        $tmpBeginDate=new DateTime($result[$i]['beginDate']);
        $tmpEndDate=new DateTime($result[$i]['endDate']);
        $beginDateFormated=new DateTime($beginDate);
        $endDateFormated=new DateTime($endDate);
       if ($tmpEndDate>$beginDateFormated && $beginDateFormated>$tmpBeginDate){
            return 0;
        }
        else if ($tmpEndDate>$endDateFormated && $endDateFormated>$tmpBeginDate){
            return 0;
        }
 
    }
    return 1;
}

function getReviews($idPlace){
    global $dbh;
    $stmt = $dbh->prepare('select REVIEW.* from REVIEW,RESERVATION WHERE RESERVATION.idPlace = ? AND RESERVATION.idReservation=REVIEW.idReservation;');
    $stmt->execute(array($idPlace));
    $result = $stmt->fetchAll();
    return $result;
}

function getReservation($idReservation){
    global $dbh;
    $stmt = $dbh->prepare('select * from RESERVATION WHERE idReservation = ? ;');
    $stmt->execute(array($idReservation));
    $result = $stmt->fetch();
    return $result;
}

function getReservationsHouse($idHouse){
    global $dbh;
    $stmt = $dbh->prepare('select * from RESERVATION WHERE idPlace = ? ;');
    $stmt->execute(array($idHouse));
    $result = $stmt->fetchAll();
    return $result;
}

function updateHouseField($houseId, $value,$atribute){
    global $dbh;
    $stmt = $dbh->prepare("update PLACE set $atribute = ? where idPlace = ? ;"); 
    $stmt->execute(array($value,$houseId));
    return 0;
}

function addReview($idReservation, $rating, $description){
    global $dbh;
    $stmt = $dbh->prepare("insert into REVIEW values (?,?,?);"); 
    $stmt->execute(array($idReservation,$rating,$description));
    return 0;
}

function hasReview($idReservation){
    global $dbh;
    $stmt = $dbh->prepare("select * from review where idReservation= ?;"); 
    $stmt->execute(array($idReservation));
    $result = $stmt->fetchAll();
    return $result!=false;
}

?>