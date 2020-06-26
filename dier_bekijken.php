<?php
include 'connection.php';
include 'process_bekijken.php';
include 'dier_bekijken_alles.php';
// include 'process_ophalen.php';
// include 'testen.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="staal.css">
    <title>Work in Progress...</title>

<body>

    <div id="myNav" class="overlay">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
        <a href="./home.php">Uitloggen</a>
        <a href="./status_dieren.php">Status Dieren</a>
        </div>
    </div> 

    <div class="first"> 
        <img src="wallpaper2.jpg" alt="Nature" style="width:100%;">
            <div class="text-block">
                <h1>Status <br> Dieren</h1> 
                <button class="button button1" type="button" onclick="smoothScroll(document.getElementById('second'))">Bekijk hier de status van de dieren</button> 
            </div>
            </div>
            <div class="text-block2">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span> 
            </div>
    </div>

    <div class="second" id="second">
    &nbsp;
        <center>
            <div class="cardbutton">
                <div class="container">
                    <h1>Dier Bekijken</h1>
                    <input class="button button1" type="submit" name="button" onClick="location.href='dier_toevoegen.php#second'" value="Dier toevoegen">
                    <input class="button button1" type="submit" name="button" onClick="location.href='dier_bekijken.php#second'" value="Dier bekijken">
                </div>
            </div>
        </center>
        &nbsp;
        &nbsp;
        &nbsp;
        <center>
        <form method="POST">
            <input class="button button1" type="submit" name="alles" value="bekijk alle dieren in de database"><br> <br>
            <input placeholder="id" type="text" name="id" value="">
            <input placeholder="naam" type="text" name="naam" value="">
            <input placeholder="verblijf" type="text" name="verblijf" value=""><br><br>

            <input class="button button1" type="submit" name="Zoeken" value="Zoek Dier">
        </form> 
        
        </center>

        <div class="cardinfoBIG">
            <div class="container">
                <center><h3>alle dieren</h3></center>
                <?php 
                {?>
                <table class="dierenwergaven">
                    <tr>
                    <th>ID</th>
                    <th>naam</th>
                    <th>sex</th>
                    <th>soort</th>
                    <th>verblijf</th>
                    <th>grote</th>
                    <th>aantal</th>
                    <th>feedback</th>
                    </tr>

                   <?php  
                   if (isset($_POST["alles"]))
                   foreach($result as $dieren)
                     {
                        ?>
                        <tr>
                            <td><?php echo $dieren->id;?></td>
                            <td><?php echo $dieren->naam;?></td>
                            <td><?php echo $dieren->sex;?></td>
                            <td><?php echo $dieren->soort;?></td>
                            <td><?php echo $dieren->verblijf;?></td>
                            <td><?php echo $dieren->grote;?></td>
                            <td><?php echo $dieren->aantal;?></td>
                            <td><?php echo $dieren->feedback;?></td>
                        </tr>
                        
                    <?php 
                    }
                    ?>

                    <?php
                    
                    $naam = $_POST['naam'];
                    $query = "SELECT * FROM dieren WHERE naam = '$naam' ORDER BY naam ASC";
                    //inlezen query 
                    $stm = $con->prepare($query);
                    //statement uitvoeren
                    if($stm->execute()){
                        //ophalen resultaten
                        $resultaat = $stm->fetchALL(PDO::FETCH_OBJ);
                        $stm->execute();
                    }

                    if (isset($_POST["Zoeken"]))
                    //voor elke query die hij ophaald zet hij dat opject neer als row
                    foreach($stm->fetchALL(PDO::FETCH_OBJ) as $row)
                    // met foreach kan je de waarden van een array doorlopen
                     {
                    ?>

                        <tr>
                            <td><?php echo $row-> id;?></td>
                            <td><?php echo $row-> naam;?></td>
                            <td><?php echo $row-> sex;?></td>
                            <td><?php echo $row-> soort;?></td>
                            <td><?php echo $row-> verblijf;?></td>
                            <td><?php echo $row-> grote;?></td>
                            <td><?php echo $row-> aantal;?></td>
                            <td><?php echo $row-> feedback;?></td>

                        </tr>
                            
                    <?php 
                    }
                    ?>

                    
                    <?php
                    $verblijf = $_POST['verblijf'];
                    $query = "SELECT * FROM dieren WHERE verblijf = '$verblijf' ORDER BY verblijf ASC";
                    //inlezen query
                    $stm = $con->prepare($query);
                        //statement uitvoeren
                        if($stm->execute()){
                        //ophalen resultaten
                        $resultaat = $stm->fetchALL(PDO::FETCH_OBJ);
                         //voor elke query die hij ophaald zet hij dat opject neer als row
                        $stm->execute();
                        }
                

                    if (isset($_POST["Zoeken"]))
                     //voor elke query die hij ophaald zet hij dat opject neer als row
                    foreach($stm->fetchALL(PDO::FETCH_OBJ) as $row)
                    // met foreach kan je de waarden van een array doorlopen
                     {
                    ?>

                        <tr>
                            <td><?php echo $row-> id;?></td>
                            <td><?php echo $row-> naam;?></td>
                            <td><?php echo $row-> sex;?></td>
                            <td><?php echo $row-> soort;?></td>
                            <td><?php echo $row-> verblijf;?></td>
                            <td><?php echo $row-> grote;?></td>
                            <td><?php echo $row-> aantal;?></td>
                            <td><?php echo $row-> feedback;?></td>

                        </tr>
                            
                    <?php 
                    }
                    ?>
                    </table>
                    <?php
                } 
                ?>
               
            </div>
        </div>



    </div>




    <script>
        window.smoothScroll = function(target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);

    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 2);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}
    </script>

    <script>
        function openNav() {
        document.getElementById("myNav").style.height = "100%";
        }

        function closeNav() {
        document.getElementById("myNav").style.height = "0%";
        }
    </script>
</body>
</html>