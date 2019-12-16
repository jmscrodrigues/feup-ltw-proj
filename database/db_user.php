<?php
$dir = $_SERVER['DOCUMENT_ROOT'];
include_once("$dir/database/connection.php");

function verifyLogin($username, $password)
{

    global $dbh;

    $stmt = $dbh->prepare('select * from user where username = ?');
    $stmt->execute(array($username));
    $user = $stmt->fetch();

    if($user !== false && password_verify($password, $user['password'])) 
        return $user['id'];
    else return 0;

}

function createAccount($username, $name, $email, $phonenumber, $password)
{

    global $dbh;

    if ($phonenumber == NULL)
        $phonenumber = 'NULL';

    $stmt = $dbh->prepare('insert into User(username,name,email,phonenumber,password) VALUES (?, ?, ?, ?, ?)');
    $options = ['cost' => 12];
    $newPassword= password_hash($password, PASSWORD_DEFAULT, $options);

    if ($stmt->execute(array($username, $name, $email, $phonenumber, $newPassword))) {
        $stmt2 = $dbh->prepare('select id from user where username = ? AND password = ?');
        $stmt2->execute(array($username,$newPassword));
        $result = $stmt2->fetchAll();
        if ($result != false) 
             return $result[0]['id'];
    } 
    
    return 0;
    
}

function editPassword($username, $password, $newPassword)
{

    global $dbh;

    $stmt = $dbh->prepare('select * from user where username = ? and password = ?');
    $hashPassword = hash('sha256', $password);
    $stmt->execute(array($username, $hashPassword));
    if ($stmt->fetchAll() == false) {
        return -1;
    } else {
        $stmt1 = $dbh->prepare("update user set password = ? where username='$username'");
        $newHashPassword = hash('sha256', $newPassword);
        $stmt1->execute(array($newHashPassword));
        return 0;
    }
}

function editUsername($username, $name, $newUsername)
{

    global $dbh;

    $stmt = $dbh->prepare("update user set username = ?, name = ? where username='$username'");
    if ($stmt->execute(array($newUsername, $name))) {
        return 0;

    } else return -1;

}

function editContacts($username, $newEmail, $phoneNumber)
{

    global $dbh;


    $stmt = $dbh->prepare("update user set email = ?, phonenumber = ? where username='$username'");
    if ($stmt->execute(array($newEmail, $phoneNumber))) {
        return 0;
    } else return -1;

}


function getUserInfo($userId)
{
    global $dbh;

    $stmt = $dbh->prepare('select * from user where id = ?');
    $stmt->execute(array($userId));
    $result = $stmt->fetch();
    if ($result == false) {
        return 0;
    } else return $result;
}

function getUserHouses($userId)
{
    global $dbh;

    $stmt = $dbh->prepare('select * from place where idUser = ?');
    $stmt->execute(array($userId));
    $result = $stmt->fetchAll();
    if ($result == false) {
        return 0;
    } else return $result;
}

function getReservationsUser($userId,$time)
{
    global $dbh;
    if ($time=="past")
        $stmt = $dbh->prepare("select * from reservation where idTourist = ? AND (SELECT date('now') >= endDate) order by endDate desc");
    else if ($time=="future")
        $stmt = $dbh->prepare("select * from reservation where idTourist = ? AND (SELECT date('now') < endDate) order by endDate");
    else return 0;
    $stmt->execute(array($userId));
    $result = $stmt->fetchAll();
    if ($result == false) {
        return 0;
    } else return $result;
}

function addPicture($userId,$path)
{
    global $dbh;

    $stmt = $dbh->prepare('update USER set picture = ? where id=?');
    $stmt->execute(array($path,$userId));

}



?>
