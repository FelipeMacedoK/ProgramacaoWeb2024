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
    var cell = document.getElementsByTagName("td");
    var html = '<td><strong>Média</strong></td><td>';
    for (let i = 2; i < 10; i++) {
        var total = 0;
        var media = 0;
        for (let j = i; j < cell.length; j = j+10) {
            total += parseFloat(cell.innerHTML);       
        }
        media = total/6;
        html += media + '</td><td>'
    }
    document.createElement('tr').innerHTML = html;
    tabela.appendChild(row);
    document.getElementById("linha").style.display = "none";
}

function mediaColuna() {
    document.getElementById("coluna").style.display = "none"; 
}