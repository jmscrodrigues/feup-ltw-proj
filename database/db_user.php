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

    function editPassword($username, $password, $newPassword) {
        
        global $dbh;

        $stmt = $dbh->prepare('select * from user where username = ? and password = ?'); 
        $hashPassword=hash('sha256',$password);
        $stmt->execute(array($username, $hashPassword));
        if ($stmt->fetchAll() == false) {
            print("wrong password!");
            return -1;
        } 
        else {
            $stmt1 = $dbh->prepare("update user set password = ? where username='$username'");
            $newHashPassword=hash('sha256',$newPassword);
            $stmt1->execute(array($newHashPassword));
            print("updated");
            return 0;
        }   
    }

    function editUsername($username, $newUsername, $password) {

        global $dbh; 

        $stmt = $dbh->prepare('select * from user where username = ? and password = ?'); 
        $hashPassword=hash('sha256',$password);
        $stmt->execute(array($username, $hashPassword));
        if ($stmt->fetchAll() == false) {
            print("wrong password!");
            return -3;
        }   
        else {
            $stmt2 = $dbh->prepare("update user set username = ? where username='$username'");
            $stmt2->execute(array($newUsername));
            print("updated");
            return 0;
        }
    }

    function editEmail($username, $newEmail, $password) {
        /**
         * Edits the email of an user
         */
            ?>
        
            <?php
        
            // if(checkInjectionEmail($newEmail) == -1) {
            //   print("dass");
            //   return -1;
            // }
        
            session_start();
            if ($_SESSION['name'] != $username) {
              print("not logged in");
              return -1;
            }
        
            $dbh = new PDO('sqlite:database/database.db'); 
            $stmt = $dbh->prepare('select * from user where username = ? and password = ?'); 
            $hashPassword=hash('sha256',$password);
            $stmt->execute(array($username, $hashPassword));
            if ($stmt->fetchAll() == false) {
              print("wrong password!");
              return -2;
            } 
        
            else {
              $stmt2 = $dbh->prepare("update user set email = ? where username='$username'");
              $stmt2->execute(array($newEmail));
              print("updated");
              return 0;
            } 
        }              
    
?>
