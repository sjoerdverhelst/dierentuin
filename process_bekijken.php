<?php  
    require_once('connection.php');
    $con = DBconnection();
    {

        $query = "SELECT * FROM dieren ORDER BY naam ASC" ;

        //inlezen query
        $stm = $con->prepare($query);
        //statement uitvoeren
        if($stm->execute()){
            //ophalen resultaten
            $result = $stm->fetchALL(PDO::FETCH_OBJ);
        }

    }


?>