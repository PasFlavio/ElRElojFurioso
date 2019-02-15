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
    <body>
        <header>
            
        </header>
       
        
        <div id="Test"></div>
        <script>
            
            let timer = setInterval(timer, 10);
            
            function timer(){
                let heureFrance = moment().tz('Europe/Paris').format('H:mm');
                let heureChine = moment().tz('Asie/Chine').format('H:mm');
                let heureEtatsUnis = moment().tz('Amerique/Etats-Unis').format('H:mm');
                
                Test.innerHTML = "<p>Heure en France: "+heureFrance+"</p><p>Heure en Chine: "+heureChine+"</p><p>Heure aux Etats-Unis: "+heureEtatsUnis+"</p>"
            }
            
        </script>
    </body>
</html>
