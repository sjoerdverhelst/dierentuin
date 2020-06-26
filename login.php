<?php
include 'connection.php';
include 'process_inloggen.php';
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
    <audio id="logineej">
        <source  autostart="true" autoplay="true" src="audio/inloggen.mp3">
    </audio>

    <div id="myNav" class="overlay">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
        <a href="./home.php">Home</a>
        <a href="./login.php">Login</a>
        <a href="./contact.php">Contact</a>
        </div>
    </div>

    <div class="first"> 
        <img src="wallpaper2.jpg" alt="Nature" style="width:100%;">
            <div class="text-block">
                <h1>Login</h1>
                <button class="button button1" type="button" onclick="smoothScroll(document.getElementById('second'))">Klik hier om in te loggen!!</button> <br>
                <button class="button button1" type="button" onclick="window.location.href = './aanmelden.php';">Nog geen acount? meld je hier aan!! </button>
            </div>
            <div class="text-block2">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span> 
            </div>
    </div>


        <div class="second" id="second">
        &nbsp;
        <center>
            <div class="card">
                <div class="container">
                    <form action="" method="post">
                    <h2>Hier onder kunt u inloggen!!</h2>
                     <table>
                        <tr>
                        <th><label for="txtnaam">Gebruikers naam:</label></th>
                        <td><input type="text" name="txtnaam"</td>
                        </tr>
                        <tr>
                        <th><label for="txtwachtwoord">Wachtwoord:</label></th>
                        <td><input type="password" name="txtwachtwoord" ></td>
                        </tr>
                        <tr>
                        <th></th>
                        <td><button type="butten" name="btnInloggen"> Inloggen</button></td>
                        </tr>
                    </table>
                    <?php
                        if (@$_GET['Empty']==true)
                        {
                            echo $_GET['Empty'];
                        }
                    ?>
                    <?php
                        if (@$_GET['Invalid']==true)
                        {
                            echo $_GET['Invalid'];
                        }
                        ?>
                    </form>
                </div>
            </div>
        </center>
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



  <!-- voor de knop menu -->
    <script>
        function openNav() {
        document.getElementById("myNav").style.height = "100%";
        }

        function closeNav() {
        document.getElementById("myNav").style.height = "0%";
        }
    </script>

    <script>
        var vid = document.getElementById("logineej");
        vid.autoplay = true;
        vid.load();
    </script>
</body>

</html>