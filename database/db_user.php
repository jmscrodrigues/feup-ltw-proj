<?php

    include_once('../database/connection.php');
    

    function verifyLogin($username, $password) {
        
        global $dbh;

        $hashedPassword=hash('sha256',$password);
        $stmt = $dbh->prepare('select id from user where username = ? and password = ?'); 
        $stmt->execute(array($username, $hashedPassword));
        $result = $stmt->fetchAll();

        if ($result == false) {
            return 0;
        }

        else {
            return $result[0]['id'];
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
            $stmt2->execute(array($username, $newPassword));
            $result = $stmt2->fetchAll();
            if ($result == false) {
                return 0;
            }
            else return $result[0]['id'];
            
        }
        else {
        return 0;
        }
    }

    function editPassword($username, $password, $newPassword) {
        
        global $dbh;

        $stmt = $dbh->prepare('select * from user where username = ? and password = ?'); 
        $hashPassword=hash('sha256',$password);
        $stmt->execute(array($username, $hashPassword));
        if ($stmt->fetchAll() == false) {
            return -1;
        } 
        else {
            $stmt1 = $dbh->prepare("update user set password = ? where username='$username'");
            $newHashPassword=hash('sha256',$newPassword);
            $stmt1->execute(array($newHashPassword));
            return 0;
        }   
    }

    function editUsername($username, $name, $newUsername) {

        global $dbh; 
  
        $stmt = $dbh->prepare("update user set username = ?, name = ? where username='$username'");
        if ($stmt->execute(array($newUsername, $name))) {
            return 0;

        }
        else return -1;

    }

    function editContacts($username, $newEmail, $phoneNumber) {
        
            global $dbh; 
            
        
            $stmt = $dbh->prepare("update user set email = ?, phonenumber = ? where username='$username'");
            if ($stmt->execute(array($newEmail, $phoneNumber))) {
                return 0;
            }

            else return -1;

        }
        
        
        function getUserInfo($userId) {
            global $dbh;

            $stmt = $dbh->prepare('select * from user where id = ?'); 
            $stmt->execute(array($userId));
            $result = $stmt->fetchAll();
            if($result == false) {
                return 0;
            }
            else return $result;
        }
    
?>
