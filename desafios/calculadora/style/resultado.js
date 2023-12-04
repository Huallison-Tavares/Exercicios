
var receita = document.getElementById("TRreceita");
var gastos = document.getElementById("TRgastos");
var listaReceita = document.getElementById("detalhes-receita");
var listaGastos = document.getElementById("detalhes-gastos");

var buttonClose = document.querySelectorAll(".button-close")

receita.addEventListener("click", function(){
    listaReceita.style.display = "flex";
})

gastos.addEventListener("click", function(){
    listaGastos.style.display = "flex";
})

buttonClose.forEach(button => {
    button.addEventListener("click", () =>{
        button.parentElement.style.display = "none";
    })
})