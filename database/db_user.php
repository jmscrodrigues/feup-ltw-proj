<?php

    include_once('../database/connection.php');
    

    function verifyLogin($username, $password) {
        
        global $dbh;

        $hashedPassword=hash('sha256',$password);
        $dbh = new PDO('sqlite:database/database.db'); 
        $stmt = $dbh->prepare('select id from user where username = ? and password = ?'); 
        $stmt->execute(array($username, $hashedPassword));
        $result = $stmt->fetchAll();

        if ($result == false) {
            return false;
        }

        else {
            return $result['id'];
        }
    }

    function createAccount($username, $name, $email, $password, $confirmPassword) {
        
        global $dbh;

        $stmt = $dbh->prepare('insert into User(Username, Name, Email, Password) VALUES (:Username,:Name,:Email,:Password)'); 
        $stmt->bindParam(':Username', $username);
        $stmt->bindParam(':Name', $name);
        $stmt->bindParam(':Email', $email);
        $newPassword=hash('sha256',$password);
        $stmt->bindParam(':Password', $newPassword);
        
        if($stmt->execute()) {
            $stmt2 = $dbh->prepare('select id from user where username = ? and password = ?');
            $stmt->execute(array($username, $newPassword));$result = $stmt->fetchAll();
            $result = $stmt->fetchAll();
            if ($result != false) {
                return $result['id'];
            }
            else return -1;
        }
        else {
        return -1;
        }
    }
       
    
?>
