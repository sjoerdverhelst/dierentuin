<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="staal.css">
    <title>Work in Progress...</title>

<body >

    <audio id="contacteej">  
        <source  autostart="true" autoplay="true" src="audio/contact.mp3">
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
                <h1>Contact</h1>
                <button class="button button1" type="button" onclick="smoothScroll(document.getElementById('second'))">Voor contact gegevens klik hier</button> 
            </div>
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
                    <h2>Hier mijn contact gegevens</h2>
                    <h4>Als er iets mis is met de pagina kunt u hier mij contacteren</h4>
                    <table>
                    <tr>
                        <th><pre>Naam:</pre></th>
                        <td><pre>Sjoerd Verhelst</pre></td>
                    </tr>
                    <tr>
                        <th><pre>E-mail:</pre></th>
                        <td><pre>sjoerd42471@live.nl</pre></td>
                    </tr>
                    </table>
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

    <script>
        function openNav() {
        document.getElementById("myNav").style.height = "100%";
        }

        function closeNav() {
        document.getElementById("myNav").style.height = "0%";
        }
    </script>

    <script>
        var vid = document.getElementById("contacteej");
        vid.autoplay = true;
        vid.load();
    </script>
</body>
</html>