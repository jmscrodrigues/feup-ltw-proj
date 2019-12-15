<?php

$dir = $_SERVER['DOCUMENT_ROOT'];
include_once("$dir/database/connection.php");

function getHousesFilteredSortByPopularity($minPrice, $maxPrice, $city, $country, $name)
{
    /**
     * Returns the houses filtered and sorted by popularity
     */
    global $dbh;
    $stmt = $dbh->prepare('select  PLACE.* from PLACE,RESERVATION WHERE (PLACE.price between ? AND ?) AND PLACE.city like "%?%" AND PLACE.country like "%?%" AND PLACE.name like "%?%" AND PLACE.idPlace=RESERVATION.idPlace GROUP BY PLACE.name ORDER BY count(*) DESC;');
    $stmt->execute(array($minPrice, $maxPrice, $city, $country, $name));
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


function getHousesFilteredSortByRecent($minPrice, $maxPrice, $city, $country, $name)
{
    /**
     * Returns the houses filtered and sorted by recent
     */
    global $dbh;
    $stmt = $dbh->prepare('select * from PLACE WHERE (PLACE.price between ? AND ?) AND PLACE.city like "%?%" AND PLACE.country like "%?%" AND PLACE.name like "%?%" ORDER BY idPlace DESC;');
    $stmt->execute(array($minPrice, $maxPrice, $city, $country, $name));
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
}

?>