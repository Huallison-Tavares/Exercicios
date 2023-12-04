const itens = document.querySelectorAll(".item");
const check = document.querySelectorAll(".checkbox")

itens.forEach(item => {
    item.addEventListener("click", () =>{
        check.forEach(check => {
            if (check.checked){
                check.parentElement.classList.add("on");
            }
            else if (check.parentElement.classList.contains("on")){
                check.parentElement.classList.remove("on");
            }
        })
    })
});
