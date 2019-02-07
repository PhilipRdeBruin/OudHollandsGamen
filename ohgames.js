function showxspelers(spelletjes) {
    selected_spel = document.getElementById("spel").value
    spelletjes= JSON.parse(spelletjes);
    i = selected_spel * 1 - 1;
    nsplr = spelletjes[i]['aantalspelers'];

    for (ii = 3; ii <=4; ii++) {
        if (nsplr >= ii) {  
            document.getElementById("spelerlabel" + ii).style.display = "inline";
            document.getElementById("speler" + ii).style.display = "inline";
            document.getElementById("rol" + ii).style.display = "inline";
        } else {
            document.getElementById("spelerlabel" + ii).style.display = "none";
            document.getElementById("speler" + ii).style.display = "none";
            document.getElementById("rol" + ii).style.display = "none";
        }
    }

    arrol = spelletjes[i]['rollen'].split(";");
    if (arrol.length > 1) {
        document.getElementById("rol_hdr").style.display = "inline";
        for (ii = 1; ii <= nsplr; ii++) {
            rollijst = document.getElementById("rol" + ii);
            rollijst.style.display = "inline";
            n = rollijst.childNodes.length - 1;
            for (iii = n; iii > 1; iii--) { 
                rollijst.removeChild(rollijst.childNodes[iii]);
            }
            for (iii = 0; iii < arrol.length; iii++) {
                node = document.createElement("OPTION");
                optnode = document.createTextNode(arrol[iii]);
                node.appendChild(optnode);
                document.getElementById("rol" + ii).appendChild(node);
            }
        }
    } else {
        // alert("hallo...");
        document.getElementById("rol_hdr").style.display = "none";
        for (ii = 1; ii <= 4; ii++) {
            document.getElementById("rol" + ii).style.display = "none";
        }
    }
}

var datumarr = new Array;
var tijdarr = new Array;
var d = new Date();

function zetdatum() {
    datum = document.getElementById("aanvangsdatum").value;
    tijd = document.getElementById("aanvangstijd").value;
    datumtijd = datum + " " + tijd + ":00";
    if (datum.length > 0 && tijd.length > 0) {
        document.getElementById("aanvangstijdstip").value = datumtijd;
        // alert(document.getElementById("aanvangstijdstip").value);
    }
}
