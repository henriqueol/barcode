servicos = document.getElementById("servicos");
contatos = document.getElementById("contatos");
login = document.getElementById("login");
mask = document.getElementById("mask");
servicosInfo = document.getElementById("servicosInfo");
contatosInfo = document.getElementById("contatosInfo");

close = document.getElementById("close");

servicos.onclick = function(){
    mask.style.display="block";
    servicosInfo.style.display="block";
}

mask.onclick = function(){
    mask.style.display="none";
    servicosInfo.style.display="none";
    document.getElementById("contatosInfo").style.display="none";
    console.log("closing lightbox");
}
close.onclick = function(){
    mask.click();
}

contatos.onclick = function(){
    mask.style.display="block";
    contatosInfo.style.display="block";
}