url=window.location.href;
let params = new URLSearchParams(url.split('?')[1]);
let codValue = params.get('cod');
var navCards=document.querySelector("#navCards");
var navTitulos=document.querySelector("#navTitulos");
var navVotacoes=document.querySelector("#navVotacoes");
if(codValue.startsWith('adm-0')){
    navCards.classList.add("active");
    navTitulos.classList.remove("active");
    navVotacoes.classList.remove("active")
}else if(codValue.startsWith('adm-1')){
    navCards.classList.remove("active");
    navTitulos.classList.add("active");
    navVotacoes.classList.remove("active")
}else if(codValue.startsWith('adm-2')){
    navCards.classList.remove("active");
    navTitulos.classList.remove("active");
    navVotacoes.classList.add("active");
}