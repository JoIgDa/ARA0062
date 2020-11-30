function moedaParaFloat (valor){
    let textoLimpo = valor.replace("R$", "").replace(",",".");
    return parseFloat(textoLimpo);
}
function floatParaMoeda(valor){
    let valorFormatado = (valor < 1 ? "0" : "") + Math.floor(valor*100);
    valorFormatado = "R$" + valorFormatado;
    return valorFormatado.substr(0, valorFormatado.length-2) + "," + valorFormatado.substr(-2);
}

function retornaTotal(){
    let valorTotal = document.querySelector("#preco-total");
    return moedaParaFloat(valorTotal.innerHTML);
}

function escreveTotal(valor){
    let valorTotal = document.querySelector("#preco-total")
    valorTotal.innerHTML = floatParaMoeda(valor);
}

function calcularTotalProdutos(){
    let todosProdutos = document.querySelectorAll(".preco-produto");
    let todasQuantidades = document.querySelectorAll(".cQuant");
    let totalProdutos = 0;

    for(let posicao = 0 ; posicao < todosProdutos.length ; posicao++){
        let umPreco = moedaParaFloat(todosProdutos[posicao].innerHTML);
        let umaQuantidade = moedaParaFloat(todasQuantidades[posicao].value);
        let subTotal = umPreco * umaQuantidade;
        totalProdutos += subTotal;
    }    

    return totalProdutos;
}

function quantidadeMudou(){
    escreveTotal(calcularTotalProdutos());
}

function aoCarregarPagina(){
    let camposQuantidade = document.querySelectorAll('.cQuant');
    for(let i=0; i < camposQuantidade.length; i++){
        camposQuantidade[i].onchange = (function(){
            quantidadeMudou();
        });
    }
}

window.onload = (function(){
    aoCarregarPagina();
    quantidadeMudou();
});
