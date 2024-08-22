document.addEventListener('DOMContentLoaded',(api)=>{
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../app/services/apiCarregaTitulosSemana.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 400) {
            var data = JSON.parse(xhr.responseText);
            insereTitulosSemanaHome(data);
        } else {
            console.error('Erro ao carregar dados: ' + xhr.statusText);
        }
    };
    xhr.onerror = function () {
        console.error('Erro de rede ao tentar carregar dados.');
    };
    xhr.send('titulosHome=' + encodeURIComponent(api));
});
async function insereTitulosSemanaHome(data){
    var nomeMvp=document.querySelector("#nomeMvpSemana");
    var nomeMip=document.querySelector("#nomeMipSemana");
    var nomeBagre=document.querySelector("#nomeBagreSemana");
    var diaMvp=document.querySelector("#diaMvpSemana");
    var diaMip=document.querySelector("#diaMipSemana");
    var diaBagre=document.querySelector("#diaBagreSemana");
    data.forEach(function (item) {
        if ('erro' in item) {
            console.log(item.erro);
        } else {
            nomeMvp.textContent=item.mvp;
            nomeMip.textContent=item.mip;
            nomeBagre.textContent=item.bagre;
            diaMvp.textContent=item.dia;
            diaMip.textContent=item.dia;
            diaBagre.textContent=item.dia;
        }
    });
}