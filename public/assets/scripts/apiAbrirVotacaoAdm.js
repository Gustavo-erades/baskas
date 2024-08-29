function apiAbrirVotacaoAdm(){
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../app/services/apiVotacaoAdm.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 400) {
            var data = JSON.parse(xhr.responseText);
            votacaoAberta(data);
        } else {
            console.error('Erro ao carregar dados: ' + xhr.statusText);
        }
    };
    xhr.onerror = function () {
        console.error('Erro de rede ao tentar carregar dados.');
    };
    $enviarDado='data_inicio';
    xhr.send('votacaoAdm=' + encodeURIComponent($enviarDado));
}
function apiFecharVotacaoAdm(){
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../app/services/apiVotacaoAdm.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 400) {
            var data = JSON.parse(xhr.responseText);
            votacaoFechadaAdm(data);
        } else {
            console.error('Erro ao carregar dados: ' + xhr.statusText);
        }
    };
    xhr.onerror = function () {
        console.error('Erro de rede ao tentar carregar dados.');
    };
    $enviarDado='data_fim';
    xhr.send('votacaoAdm=' + encodeURIComponent($enviarDado));
}
function votacaoAberta(data){
    if(data[0]['status']==true){
        linkAbrir=document.querySelector(".abrirVot");
        linkAbrir.style.pointerEvents = 'none';
        linkAbrir.style.backgroundColor = 'gray';
        linkAbrir.style.cursor='not-allowed';

        linkFechar=document.querySelector(".fecharVot");
        linkFechar.style.display='inline-block';
    }
}
function votacaoFechadaAdm(data){
    if(data[0]['status']==true){
        linkAbrir=document.querySelector(".abrirVot");
        linkAbrir.style.pointerEvents = 'auto';
        linkAbrir.style.backgroundColor = '#ff2f00';
        linkAbrir.style.cursor='pointer';

        linkFechar=document.querySelector(".fecharVot");
        linkFechar.style.display='none';
    }
}