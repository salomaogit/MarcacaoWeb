let botaoAcender = document.getElementById("botaoAcender");
console.log(botaoAcender);
let botaoApagar = document.getElementById("botaoApagar");
console.log(botaoApagar);
let lampada = document.querySelector("#lampada");
console.log(lampada);
let status = document.querySelector("#status");
console.log(status);

botaoAcender.onclick = function(){
    lampada.src = "assets/img/lampada/acesa.jpg";
    status.innerText = "Acesa"
}
botaoApagar.onclick = function(){
    lampada.src = "assets/img/lampada/apagada.jpg";
    status.innerText = "Apagada";
}