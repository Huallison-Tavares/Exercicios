
var form = document.querySelectorAll(".form");
form[0].id = "on";
indice = 0;

var botaoAvancar = document.getElementById("avancar");
var botaoVoltar = document.getElementById("voltar");
var botaoEnviar = document.getElementById("enviar");
var formOn = document.getElementById("on");



botaoAvancar.addEventListener("click", ()=>{
    indice += 1;
    if (indice > form.length -1){
        indice = form.length -1;
    }
    checarBotao();
    atribuirId(indice);
    
});

botaoVoltar.addEventListener("click", ()=>{
    indice -= 1;
    if (indice < 0){
        indice = 0;
    }
    checarBotao();
    atribuirId(indice);
});


function checarBotao(){
    console.log(botaoAvancar.parentElement.style.opacity);

    // Design do botão
    if (indice == form.length-1){
        botaoAvancar.parentElement.style.opacity = "0.4";
    } else if (indice == 0){
        botaoVoltar.parentElement.style.opacity = "0.4";
    } else if (botaoAvancar.parentElement.style.opacity == "0.4"){
        botaoAvancar.parentElement.style.opacity = "1";
    } else if (botaoVoltar.parentElement.style.opacity == "0.4"){
        botaoVoltar.parentElement.style.opacity = "1";
    }

    // Botão de enviar formulario
    if (indice == form.length-1){
        botaoEnviar.style.display ="flex";
    } else if (botaoEnviar.style.display == "flex"){
        botaoEnviar.style.display = "none";
    }

    // Correção de design do botao
    if (indice == 1){
        botaoVoltar.parentElement.style.opacity = "1";
    }
}

function atribuirId(indice){
    formOn.id="";
    formOn = form[indice];
    formOn.id ="on";
}