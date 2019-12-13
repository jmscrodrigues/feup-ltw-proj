<?php function checkInjectionLogIn($username, $password) {
/**
 * Creates a new account
 */
    ?>
     <?php  
      if(preg_match('/[\'^£$%&*()}{@#~?><>, "|=+¬-]/' ,$username)) {
        return -1;
      }
      else if(preg_match('/[\'^£$%&*()}{@#~?><>, "|=+¬-]/' ,$password)){
        return -1;
      }
      else {
        return 1;
      }

     ?>
    

<?php } ?>


<?php function checkInjectionSignUp($username, $name, $password) { // TODO: EMAIL NAO PORQUE O FORMATO QUE RECEBE É EMAIL, OU ESTOU ENGANADO?
/**
 * Creates a new account
 */
    ?>
     <?php  
      if(preg_match('/[\'^£$%&*()}{@#~?><>, "|=+¬-]/' ,$username)) {
        return -1;
      }
      else if(preg_match('/[\'^£$%&*()}{@#~?><>,"|=+¬-]/' ,$name)) {
        return -1;
      }
      else if(preg_match('/[\'^£$%&*()}{@#~?><>, "|=+¬-]/' ,$password)){
        return -1;
      }
      else {
        return 1;
      }

     ?>
    

<?php } ?>


<?php function getUserAndPass($username, $password) {
/**
 * Retrieves the pass and usernames from the database
 */
    ?>

        <?php  
          $hashedPassword=hash('sha256',$password);
          $dbh = new PDO('sqlite:database/database.db'); 
          $stmt = $dbh->prepare('select * from user where username = ? and password = ?'); 
          $stmt->execute(array($username, $hashedPassword));
          if ($stmt->fetchAll() == false) {
            return -2;
          } 
          else {
            session_start();
            if (!isset($_SESSION['name'])) {
              $_SESSION['name'] = $username;
              return 1;
            }

            //atribuir o username à sessão, verificando antes se nao tem lá nenhum atribuído previamente
          }

          return -3;
          ?>


<?php } ?>


<?php function createAccount($username, $name, $email, $password, $confirmPassword) {
/**
 * Creates a new account
 */
    ?>

        <?php 

          $dbh = new PDO('sqlite:database/database.db'); 
          $stmt = $dbh->prepare('insert into User(Username, Name, Email, Password) VALUES (:Username,:Name,:Email,:Password)'); 
          $stmt->bindParam(':Username', $username);
          $stmt->bindParam(':Name', $name);
          $stmt->bindParam(':Email', $email);
          $newPassword=hash('sha256',$password);
          $stmt->bindParam(':Password', $newPassword);
          
          if($stmt->execute()) {
            session_start();
            if (!isset($_SESSION['name'])) {
              $_SESSION['name'] = $username;
              print("got here");
            }
            //atribuir o username à sessão, verificando antes se nao tem lá nenhum atribuído previamente
          }
          else {
            return -3;
          }
          ?>
<?php } ?>

<?php function editPassword($username, $password, $newPassword) {
/**
 * Edits the password of a user
 */
    ?>
    <?php
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
      return -1;
    } 
    else {
      $stmt2 = $dbh->prepare("update user set password = ? where username='$username'");
      $newHashPassword=hash('sha256',$newPassword);
      $stmt2->execute(array($newHashPassword));
      print("updated");
      return 0;
    }
    ?>

<?php } ?>

<?php function editUsername($username, $newUsername, $password, $confirmPassword) {
/**
 * Edits the username of a user
 */
    ?>
    <?php
    session_start();
    if ($_SESSION['name'] != $username) {
      print("not logged in");
      return -1;
    }

    if($password != $confirmPassword) {
      print("error");
      return -2;
    }

    $dbh = new PDO('sqlite:database/database.db'); 
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

    ?>

<?php } ?>