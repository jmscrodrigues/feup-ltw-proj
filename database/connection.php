<?php
$dir = $_SERVER['DOCUMENT_ROOT'];
$dbh = new PDO("sqlite:$dir/database/database.db");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>