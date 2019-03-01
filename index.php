<!DOCTYPE html>
<!--
MORRONE Flavio, TAYAN Jad, CARVALHO Daniel, ROMANIELLO Corentin,(MARCHAL Elijah)
Horloge tel les Qlock
V1.0
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="./CSS/main.css" rel="stylesheet" type="text/css"/>
        <title>Horloge Furieuse</title>
    </head>
    <body onload='GererMusique();'>
        <header>

        </header>

        <p>
            <audio id='lecteurMp3' controls="controls" autoplay="autoplay" >
                <source src="musiques/musique1.mp3" type="audio/mp3"/>
            </audio>
        </p>

        <div id="Test"></div>

        <script>

            var tabMusique = array("<source src='musiques/musique1.mp3' type='audio/mp3'/>", "<source src='musiques/musique2.mp3' type='audio/mp3'/>", "<source src='musiques/musique3.mp3' type='audio/mp3'/>", "<source src='musiques/musique4.mp3' type='audio/mp3'/>")

            var timer = setInterval(timer, 10);

            var lecteurMp3 = document.getElementById('lecteurMp3');

            function timer() {
                var date = new Date(Date.now());
                var minuteLocal = date.getMinute;
                var heureLocal = date.getHours();
            }


            var tmrMusique = setInterval(GererMusique, 1);

            function GererMusique() {
                lecteurMp3.innerHTML = tabMusique[1];
            }

        </script>
    </body>
</html>
