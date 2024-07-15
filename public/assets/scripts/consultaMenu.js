url=window.location.href;
let params = new URLSearchParams(url.split('?')[1]);
let codValue = params.get('cod');
var navCards=document.querySelector("#navCards");
var navTitulos=document.querySelector("#navTitulos");
if(codValue.startsWith('adm-0')){
    navCards.classList.toggle("active");
    navTitulos.classList.toggle("active");
}else if(codValue.startsWith('adm-1')){
    navCards.classList.toggle("active");
    navTitulos.classList.toggle("active");

}