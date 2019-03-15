/* 
 *  Fonctionnement du programme en javascript
 *  MORRONE Flavio
 *  15.02.2019
 * 
 */
function StartRefresh() {

    var timer = setInterval(refresh, 100);
}

function refresh() {
    let HeureAAfficher = "";
    var date = new Date();
    var heure = date.getHours();
    var minutes = date.getMinutes();
    
    
    
    switch (minutes) {
        case 1:
            HeureAAfficher = "une";
            break;
        case 2:
            HeureAAfficher = "deux";
            break;
        case 3:
            HeureAAfficher = "trois";
            break;
        case 4:
            HeureAAfficher = "quatre";
            break;
        case 5:
            HeureAAfficher = "cinq";
            break;
        case 6:
            HeureAAfficher = "six";
            break;
        case 7:
            HeureAAfficher = "sept";
            break;
        case 8:
            HeureAAfficher = "huit";
            break;
        case 9:
            HeureAAfficher = "neuf";
            break;
        case 10:
            HeureAAfficher = "dix";
            break;
        case 11:
           HeureAAfficher = "onze";
           break;
       case 12:
           HeureAAfficher = "midi";
           break;
       case 0:
           HeureAAfficher = "minuit";
           break;
    }
    
    
   let AffichageHeure = document.getElementsByClassName(HeureAAfficher); 
}


