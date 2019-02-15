<!DOCTYPE html>
<!--
MORRONE Flavio, TAYAN Jad, CARVALHO Daniel, ROMANIELLO Corentin,(MARCHAL Elijah)
Horloge tel les Qlock
V1.0
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="CSS/main.css" rel="stylesheet" type="text/css"/>
        <title>Horloge Furieuse</title>
    </head>
    <body>
        <table border="1" cellspacing="5">
            <thead>
                <!-- I L N E S T O D E U X -->
                <tr>
                    <td class="il">I</td>
                    <td class="il">L</td>
                    <td>N</td>
                    <td class="est">E</td>
                    <td class="est">S</td>
                    <td class="est">T</td>
                    <td>O</td>
                    <td class="deux">D</td>
                    <td class="deux">E</td>
                    <td class="deux">U</td>
                    <td class="deux">X</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- Q U A T R E T R O I S -->
                    <td class="quatre">Q</td>
                    <td class="quatre">U</td>
                    <td class="quatre">A</td>
                    <td class="quatre">T</td>
                    <td class="quatre">R</td>
                    <td class="quatre">E</td>
                    <td class="trois">T</td>
                    <td class="trois">R</td>
                    <td class="trois">O</td>
                    <td class="trois">I</td>
                    <td class="trois">S</td>
                </tr>
                <tr>
                    <!-- N E U F U N E S E P T -->
                    <td class="neuf">N</td>
                    <td class="neuf">E</td>
                    <td class="neuf">U</td>
                    <td class="neuf">F</td>
                    <td class="une">U</td>
                    <td class="une">N</td>
                    <td class="une">E</td>
                    <td class="sept">S</td>
                    <td class="sept">E</td>
                    <td class="sept">P</td>
                    <td class="sept">T</td>
                </tr>
                <tr>
                    <!-- H U I T S I X C I N Q -->
                    <td class="huit">H</td>
                    <td class="huit">U</td>
                    <td class="huit">I</td>
                    <td class="huit">T</td>
                    <td class="six">S</td>
                    <td class="six">I</td>
                    <td class="six">X</td>
                    <td class="cinq">C</td>
                    <td class="cinq">I</td>
                    <td class="cinq">N</td>
                    <td class="cinq">Q</td>
                </tr>
                <tr>
                    <!-- M I D I X M I N U I T -->
                    <td class="midi">M</td>
                    <td class="midi">I</td>
                    <td class="midi">D</td>
                    <td class="midi">I</td>
                    <td>X</td>
                    <td class="minuit">M</td>
                    <td class="minuit">I</td>
                    <td class="minuit">N</td>
                    <td class="minuit">U</td>
                    <td class="minuit">I</td>
                    <td class="minuit">T</td>
                </tr>
                <tr>
                    <!-- O N Z E R H E U R E S -->
                    <td class="onze">O</td>
                    <td class="onze">N</td>
                    <td class="onze">Z</td>
                    <td class="onze">E</td>
                    <td>R</td>
                    <td class="heures">H</td>
                    <td class="heures">E</td>
                    <td class="heures">U</td>
                    <td class="heures">R</td>
                    <td class="heures">E</td>
                    <td class="heures">S</td>
                </tr>
                <tr>
                    <!-- M O I N S O L E D I X -->
                    <td class="moins">M</td>
                    <td class="moins">O</td>
                    <td class="moins">I</td>
                    <td class="moins">N</td>
                    <td class="moins">S</td>
                    <td>O</td>
                    <td class="le">L</td>
                    <td class="le">E</td>
                    <td class="dix">D</td>
                    <td class="dix">I</td>
                    <td class="dix">X</td>
                </tr>
                <tr>
                    <!-- E T R Q U A R T P M D -->
                    <td class="et">E</td>
                    <td class=""et>T</td>
                    <td>R</td>
                    <td class="quart">Q</td>
                    <td class="quart">U</td>
                    <td class="quart">A</td>
                    <td class="quart">R</td>
                    <td class="quart">T</td>
                    <td>P</td>
                    <td>M</td>
                    <td>D</td>
                </tr>
                <tr>
                    <!-- V I N G T - C I N Q  -->
                    <td class="vingt">V</td>
                    <td class="vingt">I</td>
                    <td class="vingt">N</td>
                    <td class="vingt">G</td>
                    <td class="vingt">T</td>
                    <td class="-">-</td>
                    <td class="cinq">C</td>
                    <td class="cinq">I</td>
                    <td class="cinq">N</td>
                    <td class="cinq">Q</td>
                    <td>U</td>
                </tr>
                <tr>
                    <!-- E T S D E M I E P A M -->
                    <td class="et">E</td>
                    <td class="et">T</td>
                    <td>S</td>
                    <td class="demie">D</td>
                    <td class="demie">E</td>
                    <td class="demie">M</td>
                    <td class="demie">I</td>
                    <td class="demie">E</td>
                    <td>P</td>
                    <td>A</td>
                    <td>M</td>
                </tr>
            </tbody>
        </table>
        
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
