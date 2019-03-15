<style>
    .il, .est{
        color: white;
        text-shadow: #FFF 0px 0px 10px, #FFF 0px 0px 15px, #FFF 0px 0px 20px, #FFF 0px 0px 30px, #FFF 0px 0px 40px, 2px 2px 2px rgba(28,110,164,0);
    }
</style>
<div id="Horloge">

</div>
<link href="CSS/main.css" rel="stylesheet" type="text/css"/>
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
            <td class="midi dixHeure">D</td>
            <td class="midi dixHeure">I</td>
            <td class="dixHeure">X</td>
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
            <td class="dixMinute">D</td>
            <td class="dixMinute">I</td>
            <td class="dixMinute">X</td>
        </tr>
        <tr>
            <!-- E T R Q U A R T P M D -->
            <td class="et">E</td>
            <td class="et">T</td>
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
            <td class="cinqMinute">C</td>
            <td class="cinqMinute">I</td>
            <td class="cinqMinute">N</td>
            <td class="cinqMinute">Q</td>
            <td>U</td>
        </tr>
        <tr>
            <!-- E T S D E M I E P A M -->
            <td>E</td>
            <td>T</td>
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
<script>
    var refresh = setInterval(Refresh, 1000);
    function Refresh() {
        var date = new Date(Date.now());
        var heureLocal = date.getHours();
        var minuteLocal = date.getMinutes();

        clearAll();
        //MINUTES
        if (minuteLocal >= 5 && minuteLocal < 10) {
            AllumerText("cinqMinute");
        }
        if (minuteLocal >= 10 && minuteLocal < 15) {
            AllumerText("dixMinute");
        }
        if (minuteLocal >= 15 && minuteLocal < 20) {
            AllumerText("et");
            AllumerText("quart");
        }
        if (minuteLocal >= 20 && minuteLocal < 25) {
            AllumerText("vingt");
        }
        if (minuteLocal >= 25 && minuteLocal < 30) {
            AllumerText("vingt");
            AllumerText("-");
            AllumerText("cinqMinute");
        }
        if (minuteLocal >= 30 && minuteLocal < 35) {
            AllumerText("et");
            AllumerText("demie");
        }
        if (minuteLocal >= 35 && minuteLocal <= 40) {
            AllumerText("moins");
            AllumerText("vingt");
            AllumerText("-");
            AllumerText("cinqMinute");
            if (heureLocal !== 12) {
                heureLocal++;
            } else {
                heureLocal = 0;
            }
        }
        if (minuteLocal >= 40 && minuteLocal < 45) {
            AllumerText("moins");
            AllumerText("vingt");
            if (heureLocal !== 12) {
                heureLocal++;
            } else {
                heureLocal = 0;
            }
        }
        if (minuteLocal >= 45 && minuteLocal < 50) {
            AllumerText("moins");
            AllumerText("le");
            AllumerText("quart");
            if (heureLocal !== 12) {
                heureLocal++;
            } else {
                heureLocal = 0;
            }
        }
        if (minuteLocal >= 50 && minuteLocal < 55) {
            AllumerText("moins");
            AllumerText("dixMinute");
            if (heureLocal !== 12) {
                heureLocal++;
            } else {
                heureLocal = 0;
            }
        }
        if (minuteLocal >= 55 && minuteLocal < 60) {
            AllumerText("cinqMinute");
            AllumerText("moins");
            if (heureLocal !== 12) {
                heureLocal++;
            } else {
                heureLocal = 0;
            }
        }




        //HEURES
        AllumerText("heures");
        if (heureLocal === 0) {
            AllumerText("minuit");
            EteindreText("heures");
        }
        if (heureLocal === 1) {
            AllumerText('une');
        }
        if (heureLocal === 2)
            AllumerText('deux');
        if (heureLocal === 3)
            AllumerText('trois');
        if (heureLocal === 4)
            AllumerText('4');
        if (heureLocal === 5)
            AllumerText('cinqHeure');
        if (heureLocal === 6)
            AllumerText('six');
        if (heureLocal === 7)
            AllumerText('sept');
        if (heureLocal === 8)
            AllumerText('huit');
        if (heureLocal === 9)
            AllumerText('neuf');
        if (heureLocal === 10)
            AllumerText('dixHeure');
        if (heureLocal === 11)
            AllumerText("onze");
        if (heureLocal === 12) {
            EteindreText("heures");
            AllumerText("midi");
        }

    }

    function AllumerText(classname) {
        var list = document.getElementsByClassName(classname);
        for (i = 0; i < list.length; i++) {
            list[i].style.textShadow = TextOnColor;
        }
    }
    function EteindreText(classname) {
        var list = document.getElementsByClassName(classname);
        for (i = 0; i < list.length; i++) {
            list[i].style.color = TextOffColor;
        }
    }       
    function clearAll(color) {
        var deux = document.getElementsByClassName("deux");
        for (i = 0; i < deux.length; i++) {
            deux[i].style.color = TextOffColor;
        }
        var quatre = document.getElementsByClassName("quatre");
        for (i = 0; i < quatre.length; i++) {
            quatre[i].style.color = TextOffColor;
        }
        var trois = document.getElementsByClassName("trois");
        for (i = 0; i < trois.length; i++) {
            trois[i].style.color = TextOffColor;
        }
        var neuf = document.getElementsByClassName("neuf");
        for (i = 0; i < neuf.length; i++) {
            neuf[i].style.color = TextOffColor;
        }
        var une = document.getElementsByClassName("une");
        for (i = 0; i < une.length; i++) {
            une[i].style.color = TextOffColor;
        }
        var sept = document.getElementsByClassName("sept");
        for (i = 0; i < sept.length; i++) {
            sept[i].style.color = TextOffColor;
        }
        var huit = document.getElementsByClassName("huit");
        for (i = 0; i < huit.length; i++) {
            huit[i].style.color = TextOffColor;
        }
        var six = document.getElementsByClassName("six");
        for (i = 0; i < six.length; i++) {
            six[i].style.color = TextOffColor;
        }
        var cinq = document.getElementsByClassName("cinq");
        for (i = 0; i < cinq.length; i++) {
            cinq[i].style.color = TextOffColor;
        }
        var midi = document.getElementsByClassName("midi");
        for (i = 0; i < midi.length; i++) {
            midi[i].style.color = TextOffColor;
        }
        var dix = document.getElementsByClassName("dixHeure");
        for (i = 0; i < dix.length; i++) {
            dix[i].style.color = TextOffColor;
        }
        var minuit = document.getElementsByClassName("minuit");
        for (i = 0; i < minuit.length; i++) {
            minuit[i].style.color = TextOffColor;
        }
        var onze = document.getElementsByClassName("onze")
        for (i = 0; i < onze.length; i++) {
            onze[i].style.color = TextOffColor;
        }
        var heures = document.getElementsByClassName("heures");
        for (i = 0; i < heures.length; i++) {
            heures[i].style.color = TextOffColor;
        }
        var moins = document.getElementsByClassName("moins");
        for (i = 0; i < moins.length; i++) {
            moins[i].style.color = TextOffColor;
        }
        var le = document.getElementsByClassName("le");
        for (i = 0; i < le.length; i++) {
            le[i].style.color = TextOffColor;
        }
        var dixMinute = document.getElementsByClassName("dixMinute");
        for (i = 0; i < dixMinute.length; i++) {
            dixMinute[i].style.color = TextOffColor;
        }
        var et = document.getElementsByClassName("et");
        for (i = 0; i < et.length; i++) {
            et[i].style.color = TextOffColor;
        }
        var quart = document.getElementsByClassName("quart");
        for (i = 0; i < quart.length; i++) {
            quart[i].style.color = TextOffColor;
        }
        var vingt = document.getElementsByClassName("vingt");
        for (i = 0; i < vingt.length; i++) {
            vingt[i].style.color = TextOffColor;
        }
        var tiret = document.getElementsByClassName("-");
        for (i = 0; i < tiret.length; i++) {
            tiret[i].style.color = TextOffColor;
        }
        var cinqMinute = document.getElementsByClassName("cinqMinute");
        for (i = 0; i < cinqMinute.length; i++) {
            cinqMinute[i].style.color = TextOffColor;
        }
        var demie = document.getElementsByClassName("demie");
        for (i = 0; i < demie.length; i++) {
            demie[i].style.color = TextOffColor;
        }
    }
</script>