function Commande() {
    var nbr = document.getElementById('NBR').value;
    var nbre = parseFloat(nbr, 10);

    var pre = document.getElementById('1V').value;
    var prem = parseFloat(pre, 10);

    var deu = document.getElementById('2V').value;
    var deux = parseFloat(deu, 10);

    var tro = document.getElementById('3V').value;
    var troi = parseFloat(tro, 10);

    var gar = document.getElementById('GAR').value;
    var garn = parseFloat(gar, 10);
    var tir = document.getElementById('TIR').checked;
    if (tir == true) {
        tir = 2.50;
    }
    else {
        tir = 0.00;
    }
    var gla = document.getElementById('GLA').checked;
    if (gla == true) {
        gla = 2.50;
    }
    else {
        gla = 0.00;
    }
    var tar = document.getElementById('TAR').checked;
    if (tar == true) {
        tar = 2.50;
    }
    else {
        tar = 0.00;
    }

    var PrixTT = prem + deux + troi + garn;
    var Suple = tar + gla + tir;
    var nbre = nbre * 2
    var PrixTTC = PrixTT * nbre + Suple;

    document.getElementById('PRI').value = PrixTTC;
}