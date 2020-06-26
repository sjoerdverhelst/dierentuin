<?php

function DBconnection()
{
  $host = "ceto"; // De server waar de database staat
  $dbname = "dierentuin"; // De naam van de database
  $user = "sjoerd"; // De gebruikersnaam voor de database (root is default bij XAMPP)
  $password = "Sjoerd@1x11"; // Het wachtwoord voor de gebruiker (leeg is default bij XAMPP)
  try{
      // Proberen verbinding te maken met de database en de verbinding opslaan in de variable con
      $con = new PDO("mysql:host=localhost;dbname=$dbname",$user,$password);
      echo"";
    } catch(PDOException $ex){
      // Als de verbinding maken mislukt
      echo "Verbinding mislukt";
    }
    return $con;
}


?>
