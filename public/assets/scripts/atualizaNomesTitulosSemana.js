 /* atualiza nomes a cada 5 segundos */
 const atualizaNomesMvp = () => {
    const endpoint = "../app/services/apiNomesTitulosSemana.php";
    fetch(endpoint)
        .then(res => res.json())
        .then(res => {
            var elementoPai = document.querySelector("#mvp");
            elementoPai.innerText='';
            insereNomesMvp(res)
        })
}
const atualizaNomesMip = () => {
    const endpoint = "../app/services/apiNomesTitulosSemana.php";
    fetch(endpoint)
        .then(res => res.json())
        .then(res => {
            var elementoPai = document.querySelector("#mip");
            elementoPai.innerText='';
            insereNomesMip(res)
        })
}
const atualizaNomesBagre = () => {
    const endpoint = "../app/services/apiNomesTitulosSemana.php";
    fetch(endpoint)
        .then(res => res.json())
        .then(res => {
            var elementoPai = document.querySelector("#bagre");
            elementoPai.innerText='';
            insereNomesBagre(res)
        })
}
setInterval(atualizaNomesMvp, 5000);
setInterval(atualizaNomesMip, 5000);
setInterval(atualizaNomesBagre, 5000);