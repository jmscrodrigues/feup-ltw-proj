<?php
    $dbh = new PDO('sqlite:../database/database.db');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_DEFAUL_FETCH_MODE, PDO::FETCH_ASSOC);
?>