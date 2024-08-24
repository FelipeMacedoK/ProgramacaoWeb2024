function getValor1() {
    return parseFloat(document.getElementById("valor1").value);
}

function getValor2() {
    return parseFloat(document.getElementById("valor2").value);
}

function somar() {
    informarResultado(getValor1() + getValor2())
}

function subtrair() {
    informarResultado(getValor1() - getValor2())
}

function multiplicar() {
    informarResultado(getValor1() * getValor2())
}

function dividir () {
    informarResultado(getValor1() / getValor2())
}

function informarResultado(valor) {
    var elResultado = document.getElementById("resultado");
    elResultado.value = valor;
    if (valor < 0) {
        elResultado.style = "background-color: red";
    } else if (valor > 0) {
        elResultado.style = "background-color: green";
    } else {
        elResultado.style = "background-color: gray";
    }
}