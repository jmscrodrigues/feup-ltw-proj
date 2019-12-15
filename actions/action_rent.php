<?php
    include_once('../includes/session.php');
    include_once('../database/db_house.php');

    $idPlace = $_POST['idplace'];
    $firstDate = $_POST['first-date'];
    $lastDate = $_POST['last-date'];

    $initialDate = new DateTime($firstDate);
    $endDate = new DateTime($lastDate);

    $initialDate->format('Y-m-d');
    $endDate->format('Y-m-d');

    $reservation = makeReservation($initialDate->format('Y-m-d'), $endDate->format('Y-m-d'), $idPlace);

    if ($reservation == 0) {
        header('Location: ../pages/house_detail_page.php?idPlace='.$idPlace.'');
    }

    else {
        header('Location: ../pages/house_detail_page.php?idPlace='.$idPlace.'');

    }

    

?>