<html>

    <head>

        <meta charset="UTF-8">
        <link href="./CSS/main.css" rel="stylesheet" type="text/css"/>
        <title>Horloge Furieuse</title>

    </head>

    <body onload="setInterval(RefreshHeure, 10000)">

        <table border="1" cellspacing="5">

            <thead>
                <!-- I T L I S A S A M P M -->
                <tr>
                    <td class="il">I</td>
                    <td class="il">T</td>
                    <td>L</td>
                    <td class="est">I</td>
                    <td class="est">S</td>
                    <td>A</td>
                    <td>S</td>
                    <td class="matin">(A</td>
                    <td class="matin">M)</td>
                    <td class="apresmidi">(P</td>
                    <td class="apresmidi">M)</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- Q U A T R E T R O I S -->
                    <td class="a">A</td>
                    <td>C</td>
                    <td class="quart">Q</td>
                    <td class="quart">U</td>
                    <td class="quart">A</td>
                    <td class="quart">R</td>
                    <td class="quart">T</td>
                    <td class="quart">E</td>
                    <td class="quart">R</td>
                    <td>D</td>
                    <td>C</td>
                </tr>
                <tr>
                    <!-- N E U F U N E S E P T -->
                    <td class="vingt">T</td>
                    <td class="vingt">W</td>
                    <td class="vingt">E</td>
                    <td class="vingt">N</td>
                    <td class="vingt">T</td>
                    <td class="vingt">Y</td>
                    <td>X</td>
                    <td class="cinqMinute">F</td>
                    <td class="cinqMinute">I</td>
                    <td class="cinqMinute">V</td>
                    <td class="cinqMinute">E</td>
                </tr>
                <tr>
                    <!-- H U I T S I X C I N Q -->
                    <td class="demi">H</td>
                    <td class="demi">A</td>
                    <td class="demi">L</td>
                    <td class="demi">F</td>
                    <td>S</td>
                    <td class="dixMinute">T</td>
                    <td class="dixMinute">E</td>
                    <td class="dixMinute">N</td>
                    <td>F</td>
                    <td class="pour">T</td>
                    <td class="pour">O</td>
                </tr>
                <tr>
                    <!-- M I D I X M I N U I T -->
                    <td class="apres">P</td>
                    <td class="apres">A</td>
                    <td class="apres">S</td>
                    <td class="apres">T</td>
                    <td>E</td>
                    <td>R</td>
                    <td>U</td>
                    <td class="neuf">N</td>
                    <td class="neuf">I</td>
                    <td class="neuf">N</td>
                    <td class="neuf">E</td>
                </tr>
                <tr>
                    <!-- O N Z E R H E U R E S -->
                    <td class="un">O</td>
                    <td class="un">N</td>
                    <td class="un">E</td>
                    <td class="six">S</td>
                    <td class="six">I</td>
                    <td class="six">X</td>
                    <td class="trois">T</td>
                    <td class="trois">H</td>
                    <td class="trois">R</td>
                    <td class="trois">E</td>
                    <td class="trois">E</td>
                </tr>
                <tr>
                    <!-- M O I N S O L E D I X -->
                    <td class="quatre">F</td>
                    <td class="quatre">O</td>
                    <td class="quatre">U</td>
                    <td class="quatre">R</td>
                    <td class="cinq">F</td>
                    <td class="cinq">I</td>
                    <td class="cinq">V</td>
                    <td class="cinq">E</td>
                    <td class="deux">T</td>
                    <td class="deux">W</td>
                    <td class="deux">O</td>
                </tr>
                <tr>
                    <!-- E T R Q U A R T P M D -->
                    <td class="huit">E</td>
                    <td class="huit">I</td>
                    <td class="huit">G</td>
                    <td class="huit">H</td>
                    <td class="huit">T</td>
                    <td class="onze">E</td>
                    <td class="onze">L</td>
                    <td class="onze">E</td>
                    <td class="onze">V</td>
                    <td class="onze">E</td>
                    <td class="onze">N</td>
                </tr>
                <tr>
                    <!-- V I N G T - C I N Q  -->
                    <td class="sept">S</td>
                    <td class="sept">E</td>
                    <td class="sept">V</td>
                    <td class="sept">E</td>
                    <td class="sept">N</td>
                    <td class="douze">T</td>
                    <td class="douze">W</td>
                    <td class="douze">E</td>
                    <td class="douze">L</td>
                    <td class="douze">V</td>
                    <td class="douze">E</td>
                </tr>
                <tr>
                    <!-- E T S D E M I E P A M -->
                    <td class="dix">T</td>
                    <td class="dix">E</td>
                    <td class="dix">N</td>
                    <td>S</td>
                    <td>E</td>
                    <td class="pile">O'</td>
                    <td class="pile">C</td>
                    <td class="pile">L</td>
                    <td class="pile">O</td>
                    <td class="pile">C</td>
                    <td class="pile">K</td>
                </tr>

            </tbody>

        </table>

    </body>


    <script>

        var AfficherHeure = setInterval(EclairerHeureActuelle, 1);

        var il = document.getElementsByClassName("il");
        var est = document.getElementsByClassName("est");
        var matin = document.getElementsByClassName("matin");
        var apresmidi = document.getElementsByClassName("apresmidi");
        var a = document.getElementsByClassName("a");
        var quart = document.getElementsByClassName("quart");
        var vingt = document.getElementsByClassName("vingt");
        var cinq = document.getElementsByClassName("cinq");
        var demi = document.getElementsByClassName("demi");
        var dix = document.getElementsByClassName("dix");
        var pour = document.getElementsByClassName("pour");
        var apres = document.getElementsByClassName("apres");
        var neuf = document.getElementsByClassName("neuf");
        var un = document.getElementsByClassName("un");
        var six = document.getElementsByClassName("six");
        var trois = document.getElementsByClassName("trois");
        var quatre = document.getElementsByClassName("quatre");
        var cinqMinute = document.getElementsByClassName("cinqMinute");
        var deux = document.getElementsByClassName("deux");
        var huit = document.getElementsByClassName("huit");
        var onze = document.getElementsByClassName("onze");
        var sept = document.getElementsByClassName("sept");
        var douze = document.getElementsByClassName("douze");
        var dixMinute = document.getElementsByClassName("dixMinute");
        var pile = document.getElementsByClassName("pile");


        function RefreshHeure() {
            clearAll();
        }

        function EclairerHeureActuelle() {

            var now = new Date(Date.now());
            var heure = now.getHours();
            var minute = now.getMinutes();

            for (i = 0; i < il.length; i++) {
                il[i].style.textShadow = TextOnColor;
            }

            for (i = 0; i < est.length; i++) {
                est[i].style.textShadow = TextOnColor;
            }

            if (heure > 12) {
                for (i = 0; i < apresmidi.length; i++) {
                    apresmidi[i].style.textShadow = TextOnColor;
                }
            }

            if (heure < 12) {
                for (i = 0; i < matin.length; i++) {
                    matin[i].style.textShadow = TextOnColor;
                }
            }

            if (minute < 5) {
                for (i = 0; i < pile.length; i++) {
                    pile[i].style.textShadow = TextOnColor;
                }
            }
            if (minute < 10 && minute >= 5) {
                EclairerLettre(cinqMinute);
                EclairerLettre(apres);
            }
            if (minute < 15 && minute >= 10) {
                EclairerLettre(dixMinute);
                EclairerLettre(apres);
            }
            if (minute < 20 && minute >= 15) {
                EclairerLettre(quart);
                EclairerLettre(apres);
            }
            if (minute < 25 && minute >= 20) {
                EclairerLettre(vingt);
                EclairerLettre(apres);
            }
            if (minute < 30 && minute >= 25) {
                EclairerLettre(vingt);
                EclairerLettre(cinqMinute);
                EclairerLettre(apres);
            }
            if (minute < 35 && minute >= 30) {
                EclairerLettre(demi);
                EclairerLettre(apres);
            }
            if (minute < 40 && minute >= 35) {
                heure++;
                Heure();
                EclairerLettre(vingt);
                EclairerLettre(cinqMinute);
                EclairerLettre(pour);
            }
            if (minute < 45 && minute >= 40) {
                heure++;
                Heure();
                EclairerLettre(vingt);
                EclairerLettre(pour);
            }
            if (minute < 50 && minute >= 45) {
                heure++;
                Heure();
                EclairerLettre(quart);
                EclairerLettre(pour);
            }
            if (minute < 55 && minute >= 50) {
                heure++;
                Heure();
                EclairerLettre(dixMinute);
                EclairerLettre(pour);
            }
            if (minute < 60 && minute >= 55) {
                heure++;
                Heure();
                EclairerLettre(cinqMinute);
                EclairerLettre(pour);
            }

            Heure(heure);
        }

        function EclairerLettre(lettre) {
            for (i = 0; i < lettre.length; i++) {
                lettre[i].style.textShadow = TextOnColor;
            }
        }

        function Heure(heure) {
            if (heure === 1) {
                EclairerLettre(un);
            }
            if (heure === 2) {
                EclairerLettre(deux);
            }
            if (heure === 3) {
                EclairerLettre(trois);
            }
            if (heure === 4) {
                EclairerLettre(quatre);
            }
            if (heure === 5) {
                EclairerLettre(cinq);
            }
            if (heure === 6) {
                EclairerLettre(six);
            }
            if (heure === 7) {
                EclairerLettre(sept);
            }
            if (heure === 8) {
                EclairerLettre(huit);
            }
            if (heure === 9) {
                EclairerLettre(neuf);
            }
            if (heure === 10) {
                EclairerLettre(dix);
            }
            if (heure === 11) {
                EclairerLettre(onze);
            }
            if (heure === 12) {
                EclairerLettre(douze);
            }
        }

        function clearAll() {
            for (i = 0; i < deux.length; i++) {
                deux[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < quatre.length; i++) {
                quatre[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < trois.length; i++) {
                trois[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < neuf.length; i++) {
                neuf[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < un.length; i++) {
                un[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < sept.length; i++) {
                sept[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < huit.length; i++) {
                huit[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < six.length; i++) {
                six[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < cinq.length; i++) {
                cinq[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < cinqMinute.length; i++) {
                cinqMinute[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < matin.length; i++) {
                matin[i].style.textShadow = 'matin';
            }
            for (i = 0; i < dix.length; i++) {
                dix[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < dixMinute.length; i++) {
                dixMinute[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < apresmidi.length; i++) {
                apresmidi[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < onze.length; i++) {
                onze[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < il.length; i++) {
                il[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < est.length; i++) {
                est[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < pour.length; i++) {
                pour[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < apres.length; i++) {
                apres[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < pile.length; i++) {
                pile[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < a.length; i++) {
                a[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < quart.length; i++) {
                quart[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < vingt.length; i++) {
                vingt[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < demi.length; i++) {
                demi[i].style.textShadow = TextOffColor;
            }
            for (i = 0; i < douze.length; i++) {
                douze[i].style.textShadow = TextOffColor;
            }
        }

    </script>