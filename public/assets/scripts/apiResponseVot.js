//api consumida ao carregar a página
document.addEventListener('DOMContentLoaded',function(api){
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../app/services/apiResponseVot.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 400) {
            var data = JSON.parse(xhr.responseText);
            insereDadosVot(data);
        } else {
            console.error('Erro ao carregar dados: ' + xhr.statusText);
        }
    };
    xhr.onerror = function () {
        console.error('Erro de rede ao tentar carregar dados.');
    };
    xhr.send('resultVot=' + encodeURIComponent(api));
});
//insere os dados retornados do bd nos campos
function insereDadosVot(data){
    var totalVotos=document.querySelector("#numVotos");
    var quantVotMvp=document.querySelector("#quantVotMvp");
    var quantVotMip=document.querySelector("#quantVotMip");
    var quantVotBagre=document.querySelector("#quantVotBagre");
    var nomeVotMvp=document.querySelector("#nomeVotMvp");
    var nomeVotMip=document.querySelector("#nomeVotMip");
    var nomeVotBagre=document.querySelector("#nomeVotBagre");

    totalVotos.textContent=data[0]['quantTotal'];;
    quantVotMvp.textContent=data[1]['quantVotMvp'];
    quantVotMip.textContent=data[2]['quantVotMip'];
    quantVotBagre.textContent=data[3]['quantVotBagre'];
    nomeVotMvp.textContent=data[1]['nomeVotMvp'];
    nomeVotMip.textContent=data[2]['nomeVotMip'];
    nomeVotBagre.textContent=data[3]['nomeVotBagre'];
}