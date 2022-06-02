document.addEventListener("DOMContentLoaded", () => {
    console.log("loaded");

    let  btn
    

        btn = document.querySelector(".btn-default")
       

    btn.addEventListener("click", event => {
        event.preventDefault();
        window.location.assign("accueil.html");
    });
   
});