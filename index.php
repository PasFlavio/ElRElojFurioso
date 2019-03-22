<?php
session_start();
if (!isset($_SESSION['langueHorloge'])) {
    $_SESSION['langueHorloge'] = "francais";
}

if (filter_has_var(INPUT_POST, "ChangerLangue")) {
    if ($_SESSION['langueHorloge'] == "francais") {
        $_SESSION['langueHorloge'] = "anglais";
    } else {
        $_SESSION['langueHorloge'] = "francais";
    }
}
?>

<!DOCTYPE html>
<!--
MORRONE Flavio, TAYAN Jad, MARCHAL Elijah, CARVALHO Daniel, ROMANIELLO Corentin
Horloge tel les Qlock
V1.0
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="./CSS/main.css" rel="stylesheet" type="text/css"/>
        <title>Horloge Furieuse</title>
    </head>
    <body id='body'>
        <header id="topMenu">
            <button id="btnThemeViolet" value="violet" name="btnThemeGris" class="btn" onclick="Bouton(this)">Thème Violet</button>
            <button id="btnThemeRose" value="rose" name="btnThemeRose" class="btn" onclick="Bouton(this)">Thème Rose</button>
            <button id="btnThemeNoir" value="noir" name="btnThemeNoir" class="btn" onclick="Bouton(this)">Thème Noir</button>
            <form action="index.php" method="POST">
                <input class='btn' type="submit" name="ChangerLangue" id='btnChangerLangue' value="Changer la langue"/>
            </form>
            <div id='conteneurMusique'>
                <?php
                include_once 'musique.html';
                ?>
            </div>
            <script>
                document.getElementById("body").style = "background-color: #682AA1";
                var TextOnColor = "#FFF 0px 0px 10px, #FFF 0px 0px 15px, #FFF 0px 0px 20px, #FFF 0px 0px 30px, #FFF 0px 0px 40px, 2px 2px 2px rgba(28,110,164,0)";
                var TextOffColor = 'none';
                var langueEnFrancais = true;

                function changerLangue() {
                    langueEnFrancais = !langueEnFrancais;
                }

                // Script de gestion du menu
                function Bouton(sender) {
                    var theme = sender.value;

                    if (theme === "violet") {
                        document.getElementById("footer").style = "background-color: #3D0E61";
                        document.getElementById("topMenu").style = "background-color: #3D0E61";
                        document.getElementById("body").style = "background-color: #682AA1";
                    }
                    if (theme === "rose") {
                        document.getElementById("footer").style = "background-color: #A30E65";
                        document.getElementById("topMenu").style = "background-color: #A30E65";
                        document.getElementById("body").style = "background-color: #E044A9";
                    }
                    if (theme === "noir") {
                        document.getElementById("footer").style = "background-color: #393938";
                        document.getElementById("topMenu").style = "background-color: #393938";
                        document.getElementById("body").style = "background-color: #1d1d1d";
                    }
                }
            </script>
        </header>
        <div id='conteneurHorloge'>
            <?php
            if ($_SESSION['langueHorloge'] == "francais") {
                include './HorlogeFR.php';
            } else {
                include './HorlogeAng.php';
            }
            ?>
        </div>
        <?php
            include './footer.php';
        ?>
    </body>
</html>
