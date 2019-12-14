<?php

    function getHousesCity($city) {
/**
 * Returns the houses from o determinate city
 */

    $dbh = new PDO('sqlite:database/database.db'); 
    $stmt = $dbh->prepare('select * from place where city= ?'); 
    $stmt->execute(array($city));
    $result = $stmt->fetchAll();
    if ($result == false) {
      print("no houses on that city!");
      return -1;
    } 

    else {
      for($z = 0; $z < sizeof($result); $z++) {
        print_r($result[$z]);
        echo "<br>";
      }
     
    }
    }

    function getHousesCountry($country) {
        /**
         * Returns the houses from o determinate country
         */
            ?>
        
            <?php
        
            $dbh = new PDO('sqlite:database/database.db'); 
            $stmt = $dbh->prepare('select * from place where country= ?');
            $stmt->execute(array($country));
            $result = $stmt->fetchAll();
            if ($result == false) {
              print("no houses on that country!");
              return -1;
            } 
        
            else {
              for($z = 0; $z < sizeof($result); $z++) {
                print_r($result[$z]);
                echo "<br>";
        
              }
             
            }
        }

        function getHousesStreet($street) {
            /**
             * Returns the houses from o determinate country
             */
                ?>
            
                <?php
            
                $dbh = new PDO('sqlite:database/database.db'); 
                $stmt = $dbh->prepare('select * from place where street= ?'); 
                $stmt->execute(array($street));
                $result = $stmt->fetchAll();
                if ($result == false) {
                  print("no houses on that street!");
                  return -1;
                } 
            
                else {
                  for($z = 0; $z < sizeof($result); $z++) {
                    print_r($result[$z]);
                    echo "<br>";
            
                  }
                 
                }
            }

?>
