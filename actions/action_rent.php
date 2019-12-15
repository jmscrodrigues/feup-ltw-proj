<?php
    include_once('../includes/session.php');

    $idPlace = $_POST['idplace'];
    $firstDate = $_POST['first-date'];
    $lastDate = $_POST['last-date'];

    $initialDate = new DateTime($firstDate);
    $endDate = new DateTime($lastDate);

    $initialDate->format('Y-m-d');
    $endDate->format('Y-m-d');

    echo $initialDate;
    echo $endDate;


?>