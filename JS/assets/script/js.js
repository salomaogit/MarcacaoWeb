let hello = "Hello";
let world = "World";

console.log(`${hello} ${world}`);

console.log(typeof hello);

function mostrarNome(){
    let campoValue = document.getElementById("nome").value;
    let conteudo = document.querySelector("#conteudo");
    conteudo.innerHTML = campoValue;
    console.log(campoValue);
}




