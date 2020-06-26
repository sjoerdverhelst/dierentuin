<?php
session_start();
require_once('connection.php');
$con = DBconnection();
$name = $_POST['txtnaam'];
$wachtwoord = $_POST['txtwachtwoord'];


if(isset($_POST['btnInloggen']))
  {
    if (empty($_POST['txtnaam']) || empty($_POST['txtwachtwoord']))
      {
        header("location:login.php?Empty= je hebt nog niks in gevuld");
      }
      else
      {
        if ($_POST["txtnaam"] == $name && $_POST["txtwachtwoord"] == $wachtwoord)
        {
          $query = "SELECT * FROM medewerker WHERE naam = '$name' AND wachtwoord ='$wachtwoord' LIMIT 1";
          $stm = $con->prepare($query);
          if ($stm->execute())
            {
              $result = $stm->fetch(PDO::FETCH_OBJ);
              if($result){
                header("location:status_dieren.php");
            }
            else
            {
              header("location:login.php?Invalid= Verkeerde combinatie");
            }
            }
          }
        }
      }
 ?>
