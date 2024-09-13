function definirNotas() {
    var cell = document.getElementsByTagName("td")
    for (let i = 0; i < cell.length; i++) {
        cell[i].innerText == "" ? cell[i].innerText = parseFloat(5 + Math.random() * 5).toFixed(1) : "";
    }
    document.getElementById("definir").style.display = "none"; 
    document.getElementById("linha").style.display = "inline"; 
    document.getElementById("coluna").style.display = "inline";
    console.log (cell);
}

function mediaLinha() {
    var table = document.getElementById("tabela");
    var rows = table.getElementsByTagName('tbody')[0].rows;
    var numColunas = rows[0].cells.length;
    var totaisColunas = Array(numColunas).fill(0);
    var numNotas = Array(numColunas).fill(0);
    for (let i = 0; i < rows.length; i++) {
        var cells = rows[i].cells;
        for (let j = 1; j < cells.length; j++) {
            var nota = parseFloat(cells[j].innerText.replace(',', '.'));
                totaisColunas[j] += nota;
                numNotas[j]++;
        }
    }
    var novaLinha = table.getElementsByTagName('tbody')[0].insertRow();
    novaLinha.insertCell(0).innerText = "Média";
    for (let j = 1; j < numColunas; j++) {
        var media = (totaisColunas[j] / numNotas[j]).toFixed(1);
        novaLinha.insertCell(j).innerText = media;
    }
    document.getElementById("linha").style.display = "none";
}

function mediaColuna() {
    var table = document.getElementById("tabela");
    var rows = table.rows;
    for (let i = 2; i < rows.length; i++) { 
        var row = rows[i];
        var total = 0;
        var numNotas = 0;
        for (let j = 1; j < row.cells.length; j++) { 
            var valorNota = parseFloat(row.cells[j].innerText.replace(',', '.'));
            total += valorNota;
            numNotas++;
        }
        var media = (total/numNotas).toFixed(1);
        var cell = row.insertCell(-1);
        cell.innerText = media;
    }
    document.getElementById("coluna").style.display = "none";
}