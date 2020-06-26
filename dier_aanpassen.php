<?php
include 'connection.php';
include 'process_bekijken.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="staal.css">
    <title>Work in Progress...</title>

<body >

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
                    <h1>Dier aanpassen</h1>
                    <input class="button button1" type="submit" name="button" onClick="location.href='dier_toevoegen.php#second'" value="Dier toevoegen">
                    <input class="button button1" type="submit" name="button" onClick="location.href='dier_bekijken.php#second'" value="Dier bekijken">
                    <input class="button button1" type="submit" name="button" onClick="location.href='dier_aanpassen.php#second'" value="Dier aanpassen">
                </div>   
            </div>
        
    <label>
        <h2>Selecteer hier uw dier!</h2>
        <select>
            <option>-- Select dier --</option>
            <?php foreach ($results as $output) {?>
            <option><?php echo $output["naam"];?></option>
            <?php }?>
        </select>
    </label>

        </center>
        <div class="cardinfo">
            <div class="container">
                <center><h1>Dier eej</h1></center>
                <form action="" method="post">
                     <table>
                        <tr>
                        <th><label for="txtdier">naam:</label></th>
                        <td><input type="text" name="txtdier"</td>
                        </tr>
                        <tr>
                        <th><label for="txtsexx">sex:</label></th>
                        <td><input type="text" name="txtsex" ></td>
                        </tr>
                        <tr>
                        <th><label for="txtsoort">Soort:</label></th>
                        <td><input type="text" name="txtsoort" ></td>
                        </tr>
                     </table>
                </form>
            </div>
        </div>

        <div class="cardinfo2">
            <div class="container">
                <center><h1>verblijf plaats eej</h1></center>
                <form action="" method="post">
                     <table>
                        <tr>
                        <th><label for="txtverblijf">naam verblijf:</label></th>
                        <td><input type="text" name="txtverblijf"</td>
                        </tr>
                        <tr>
                        <th><label for="txtgrote">grote:</label></th>
                        <td><input type="text" name="txtgrote" ></td>
                        </tr>
                        <tr>
                        <th><label for="txtaantal">hoeveel dieren:</label></th>
                        <td><input type="text" name="txtaantal" ></td>
                        </tr>
                     </table>
                </form>
            </div>
        </div>

       

        <div class="cardinfo3">
            <div class="container">
                <center><h1>feedback eej</h1></center>
                <form action="" method="post">
                    <textarea name="feedback" id="feedback" cols="42" rows="7"></textarea>
                </form>
            </div>
        </div>

        <div class="footer">
        <center><button class="button button1"  type="butten" name="btnupload"> Uploaden eej</button></center>

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