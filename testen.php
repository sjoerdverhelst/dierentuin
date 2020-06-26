<?php  
    require_once('connection.php');
    $con = DBconnection();
    
    $verblijf = $_POST['verblijf'];

    $query = "SELECT * FROM dieren WHERE verblijf = '$verblijf'";

    //inlezen query
    $stm = $con->prepare($query);
        //statement uitvoeren
        if($stm->execute()){
        //ophalen resultaten
        $resultaat = $stm->fetchALL(PDO::FETCH_OBJ);
        $stm->execute();
        }

    

?>