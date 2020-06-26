<?php
include 'connection.php';
include 'process_toevoegen.php';
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
                    <h1>Dier toevoegen</h1>
                    <input class="button button1" type="submit" name="button" onClick="location.href='dier_toevoegen.php#second'" value="Dier toevoegen">
                    <input class="button button1" type="submit" name="button" onClick="location.href='dier_bekijken.php#second'" value="Dier bekijken">
                </div>
            </div>
        </center>
        
        <div class="cardinfo">
            <div class="container">
                <center><h1>Dier</h1></center>
                <form action="" method="post">
                     <table name="invullen">
                        <tr>
                        <th><label for="txtdier">naam:</label></th>
                        <td><input type="text" name="txtdier"></td>
                        </tr>
                        <tr>
                        <th><label for="txtsexx">sex:</label></th>
                        <td>
                        <div class="custom-select">
                        <label for="geslacht"></label>
                            <select  name="geslacht" id="geslacht">
                                <option value="Man">Man</option>
                                <option value="Vrouw">Vrouw</option>
                                <option value="Overige">Overige</option>
                            </select>
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <th><label for="txtsoort">Soort:</label></th>
                        <td><input type="text" name="txtsoort" ></td>
                        </tr>
                     </table>

            </div>
        </div>

        <div class="cardinfo2">
            <div class="container">
                <center><h1>verblijf plaats</h1></center>

                     <table>
                        <tr>
                        <th><label for="txtverblijf">naam verblijf:</label></th>
                        <td><input type="text" name="txtverblijf"></td>
                        </tr>
                        <tr>
                        <th><label for="txtgrote">grote:</label></th>
                        <td>                        
                        <div class="custom-select">
                            <select  name="grote" id="geslacht">
                                <option value="klein">Klein</option>
                                <option value="normaal">Normaal</option>
                                <option value="groot">Groot</option>
                            </select>
                        </div>
                        </td>
                        </tr>
                        <tr>
                        <th><label for="txtaantal">hoeveel dieren:</label></th>
                        <td><input type="text" name="txtaantal" ></td>
                        </tr>
                     </table>

            </div>
        </div>

        <div class="cardinfo3">
            <div class="container">
                <center><h1>feedback eej</h1></center>
                    <textarea name="feedback" id="feedback" cols="42" rows="7"></textarea>

            </div>
        </div>

        <div class="footer">

        <center><button class="button button1"  type="butten" name="btnupload"> Uploaden eej</button> <br>
        <?php
            if (@$_GET['Succes']==true)
            {
            echo $_GET['Succes'];
            }
            ?>
            <?php
            if (@$_GET['Invalid']==true)
            {
                echo $_GET['Invalid'];
            }
            ?>
        </div>
        </form>
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
        setTimeout(function(){ scroll(c, a, b, i);Het opslaan is gelukt!!}, 2);
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
        var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
    </script>
</body>
</html>