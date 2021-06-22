function adicionar(array) {
    // var ing = document.getElementById("ingrediente").value;
    //console.log(document.getElementById("botao").value);


    var lista = document.getElementById("lista").innerHTML;
    lista = lista + "<li>" + array + "</li>";
    document.getElementById("lista").innerHTML = lista;

}



function adicionarvalor(float) {
    var lista = document.getElementById("lista").innerHTML;

    lista = lista + "<li>" + float + '+' + "</li>";
    document.getElementById("lista").innerHTML = lista;

    Totais = [];
    Totais.push(float);

    var sum = Totais.reduce(function(a, b) {
        return a + b;
    }, 0);

    console.log(sum);
    console.log(Totais);
}