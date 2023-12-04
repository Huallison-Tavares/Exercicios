var divEmoji = document.querySelector(".emoji");
var emojis = Array.from(divEmoji.children);

// console.log(emojis)

emojis.forEach(emoji => {
    emoji.addEventListener("click", () => {
        let id = document.getElementById("on");
        if (id){
            id.id = "";
        }
        emoji.id = "on";
    })
});

var like = document.querySelectorAll(".like");
var likeUser = 0

like.forEach(like => {
    like.addEventListener("click", ()=>{
        let id = document.getElementById("select");
        if (id){
            let idCont = Number(id.children[0].textContent);
            id.children[0].textContent = idCont -1;
            likeUser = 0;
            id.id = "";
        }
        like.id = "select";
        let cont = Number(like.children[0].textContent);
        if (!likeUser){
            like.children[0].textContent = cont + 1;
            likeUser = 1
        }
    })
})