<?php 
include_once("../database/db_house.php");
include_once("../templates/house.php");

header('Content-Type: application/json');
$name = $_POST['Name'];
$country = $_POST['Country'];
$city = $_POST['City'];
$minPrice = $_POST['Minprice'];
$maxPrice = $_POST['Maxprice'];
$minRating = $_POST['Minrating'];
$maxRating = $_POST['Maxrating'];
$beginDate = $_POST['BeginDate'];
if ($beginDate==""){$beginDate="2050-01-01";}
$endDate = $_POST['EndDate'];
if ($endDate==""){$endDate="2000-01-01";}
$result = getHousesFilteredSortByRecent($minPrice, $maxPrice, $minRating, $maxRating, $city, $country, $name);
$html="";
if ($result!=-1){
for ($i = 0; $i < count($result); $i++) {
	if (isAvailable($beginDate,$endDate,$result[$i]['idPlace'])==1){
	$html .= draw_house_card($result[$i]['idPlace']);}
}}
echo $html;
?>