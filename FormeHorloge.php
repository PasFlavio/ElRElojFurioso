<meta charset="UTF-8">
<link href="./CSS/main.css" rel="stylesheet" type="text/css"/>
<div id="Carre">

    <?php
    include 'HorlogeFR.php';
    ?>
    <a id="Triangle" value="Triangle" onclick="changementForme(this)">Triangle</a>
    <a id="Carre" value="Carre" onclick="changementForme(this)">Carre</a>
    <a id="Rond" value="Rond" onclick="changementForme(this)">Rond</a>

    <script>
        FormeActu = "";
        FormeActu = "Carre";

        function changementForme(obj) {
            console.log(obj.innerHTML);
            console.log(FormeActu);

            if (obj.innerHTML == "Triangle") {
                document.getElementById(FormeActu).id = "Triangle";
                FormeActu = "Triangle";
            }
            if (obj.innerHTML == "Carre") {
                document.getElementById(FormeActu).id = "Carre";
                FormeActu = "Carre";
            }
            if (obj.innerHTML == "Rond") {
                document.getElementById(FormeActu).id = "Rond";
                FormeActu = "Rond";
            }
        }
    </script>
</div>