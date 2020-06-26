<?php
require_once('connection.php');
$con = DBconnection();

$name = $_POST['txtnaam'];
$email = $_POST['txtemail'];
$wachtwoord = $_POST['txtwachtwoord'];

    if (isset($_POST['btnAanmelden']))
    {
        $query = "INSERT INTO medewerker (naam, email, wachtwoord)".
                 "VALUES ('$name', '$email','$wachtwoord')";

        $stm = $con->prepare($query);
        if($stm->execute()){
            header("location:aanmelden.php?Succes= Het acount is opgeslagen");
        } else {
            header("location:aanmelden.php?Invalid= niet opgeslagen");
        }
    }

 ?>
