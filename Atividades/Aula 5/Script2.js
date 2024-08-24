function definirNotas() {
    for (let i = 0; i == 60; i++) {
        var teste = document.getElementsByTagName("td")[i].value ? "" : document.getElementsByTagName("td").value = Math.floor(5 + Math.random() * 5);
        console.log (teste);
        return teste;
    }
}