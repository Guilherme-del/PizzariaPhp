function adicionar(array) {
    // var ing = document.getElementById("ingrediente").value;
    //console.log(document.getElementById("botao").value);


    var lista = document.getElementById("lista").innerHTML;
    lista = lista + "<li>" + array + "</li>";
    document.getElementById("lista").innerHTML = lista;

}

Totais = [];

function adicionarvalor(float) {
    var lista = document.getElementById("lista").innerHTML;

    lista = lista + "<li>" + 'Valor   ' + float + "</li>";
    document.getElementById("lista").innerHTML = lista;

    Totais.push(float);
    var sum = Totais.reduce(function(a, b) {
        return a + b;
    }, 0);

    lista = lista + "<li>" + "   Total: " + sum + '  reais   ' + "</li>";
    document.getElementById("lista").innerHTML = lista;

    //console.log(sum);
    //console.log(Totais);
}