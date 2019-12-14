<?php

  include_once('../database/connection.php');
    
  function getHousesFilteredSortByPopularity($minPrice,$maxPrice,$city,$country,$name) {
  /**
  * Returns the houses filtered and sorted by popularity
  */
    global $dbh;
    $stmt = $dbh->prepare('select  PLACE.* from PLACE,RESERVATION WHERE (PLACE.price between ? AND ?) AND PLACE.city like "%?%" AND PLACE.country like "%?%" AND PLACE.name like "%?%" AND PLACE.idPlace=RESERVATION.idPlace GROUP BY PLACE.name ORDER BY count(*) DESC;'); 
    $stmt->execute(array($minPrice,$maxPrice,$city,$country,$name));
    $result = $stmt->fetchAll();
    if ($result == false) {
      print("There are no houses with those parameters.");
      return -1;
    } 

    else {
      for($z = 0; $z < sizeof($result); $z++) {
        print_r($result[$z]);
        echo "<br>";
      }
     
    }

    function getHousesFilteredSortByClassification($minPrice,$maxPrice,$city,$country,$name) {
  /**
  * Returns the houses filtered and sorted by classification
  */
    global $dbh;
    $stmt = $dbh->prepare('select * from PLACE WHERE (PLACE.price between ? AND ?) AND PLACE.city like "%?%" AND PLACE.country like "%?%" AND PLACE.name like "%?%" ORDER BY classification DESC;'); 
    $stmt->execute(array($minPrice,$maxPrice,$city,$country,$name));
    $result = $stmt->fetchAll();
    if ($result == false) {
      print("There are no houses with those parameters.");
      return -1;
    } 

    else {
      for($z = 0; $z < sizeof($result); $z++) {
        print_r($result[$z]);
        echo "<br>";
      }
     
    }


    function getHousesFilteredSortByRecent($minPrice,$maxPrice,$city,$country,$name) {
  /**
  * Returns the houses filtered and sorted by recent
  */
    global $dbh;
    $stmt = $dbh->prepare('select * from PLACE WHERE (PLACE.price between ? AND ?) AND PLACE.city like "%?%" AND PLACE.country like "%?%" AND PLACE.name like "%?%" ORDER BY idPlace DESC;'); 
    $stmt->execute(array($minPrice,$maxPrice,$city,$country,$name));
    $result = $stmt->fetchAll();
    if ($result == false) {
      print("There are no houses with those parameters.");
      return -1;
    } 

    else {
      for($z = 0; $z < sizeof($result); $z++) {
        print_r($result[$z]);
        echo "<br>";
      }
     
    }

    function getHousesFilteredSortByPrice($minPrice,$maxPrice,$city,$country,$name) {
  /**
  * Returns the houses filtered and sorted by price
  */
    global $dbh;
    $stmt = $dbh->prepare('select * from PLACE WHERE (PLACE.price between ? AND ?) AND PLACE.city like "%?%" AND PLACE.country like "%?%" AND PLACE.name like "%?%" ORDER BY price DESC;'); 
    $stmt->execute(array($minPrice,$maxPrice,$city,$country,$name));
    $result = $stmt->fetchAll();
    if ($result == false) {
      print("There are no houses with those parameters.");
      return -1;
    } 

    else {
      for($z = 0; $z < sizeof($result); $z++) {
        print_r($result[$z]);
        echo "<br>";
      }
     
    }

    function isOwner($idHouse,$idUser) {
  /**
  * Checks if house is owned by user
  */
    global $dbh;
    $stmt = $dbh->prepare('select * from PLACE WHERE idPlace = ? AND idUser = ?;'); 
    $stmt->execute(array($idHouse,$idUser));
    $result = $stmt->fetchAll();
    return $result != false;
    }
  }

    