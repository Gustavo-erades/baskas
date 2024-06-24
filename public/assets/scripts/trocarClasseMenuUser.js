const url=window.location.search;
const pagina=url.split("?cod=");
const pagHome=document.querySelector("#linkHome");
const pagAdm=document.querySelector("#linkAdm");
switch(pagina[1]){
    case 'user-0':
        pagHome.classList.toggle("active");
        console.log(pagina[1])
        break;
    case 'user-1':
        pagAdm.classList.toggle("active");
        break;
    default:
        pagHome.classList.toggle("active");
        break;
}