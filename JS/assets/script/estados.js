let am = document.getElementById("am");
console.log(am);
let mg = document.getElementById("mg");
console.log(mg);
let pe = document.getElementById("pe");
console.log(pe);
let pr = document.getElementById("pr");
console.log(pr);
let rs = document.getElementById("rs");
console.log(rs);
let estado = document.querySelector("#estado");
console.log(estado);
let status = document.querySelector("#status");
console.log(status);

am.onclick = function(){
    estado.src = "assets/img/ESTADOS/AM.jpg";
    status.innerText = "Estado do Amazonas";
}

mg.onclick = function(){
    estado.src = "assets/img/ESTADOS/MG.jpg";
    status.innerText = "Estado de Minas Gerais";
}

pe.onclick = function(){
    estado.src = "assets/img/ESTADOS/PE.jpg";
    status.innerText = "Estado de Pernambuco";
}

pr.onclick = function(){
    estado.src = "assets/img/ESTADOS/PR.jpg";
    status.innerText = "Estado do Paraná";
}

rs.onclick = function(){
    estado.src = "assets/img/ESTADOS/RS.jpg";
    status.innerText = "Estado do Rio Grande do Sul";
}


