<?php
    include_once('../includes/session.php');
    include_once('../database/db_house.php');

    $idUser = get_user_id();
    $idPlace = $_POST['idplace'];
    $firstDate = $_POST['first-date'];
    $lastDate = $_POST['last-date'];

    $initialDate = new DateTime($firstDate);
    $endDate = new DateTime($lastDate);

    $initialDate->format('Y-m-d');
    $endDate->format('Y-m-d');

    $reservation = makeReservation($initialDate->format('Y-m-d'), $endDate->format('Y-m-d'), $idPlace, $idUser);

    if ($reservation == 0) {
        header('Location: ../');
    }

    else {
        header('Location: ../pages/house_detail_page.php?idPlace='.$idPlace.'');

    }

    

?>