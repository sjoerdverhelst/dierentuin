<?php
require_once('connection.php');
$con = DBconnection();

$name = $_POST['txtdier'];
$sex = $_POST['geslacht'];
$soort = $_POST['txtsoort'];
$verblijf = $_POST['txtverblijf'];
$grote = $_POST['grote'];
$aantal = $_POST['txtaantal'];
$feedback = $_POST['feedback'];



    if (isset($_POST['btnupload']))
    {
        $query = "INSERT INTO dieren (naam, sex, soort, verblijf, grote, aantal, feedback)".
                 "VALUES ('$name', '$sex','$soort', '$verblijf', '$grote', '$aantal', '$feedback')";

        $stm = $con->prepare($query);
        if($stm->execute()){
            header("location:dier_toevoegen.php?Succes= Het opslaan is gelukt!!");
        } else {
            header("location:dier_toevoegen.php?Invalid= er is iets mis gegaan");
        }
    }

 ?>
