document.addEventListener('DOMContentLoaded',function(api){
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../app/services/apiResponseVotNomes.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 400) {
            var data = JSON.parse(xhr.responseText);
            criaOptionsMvp(data)
            criaOptionsMip(data)
            criaOptionsBagre(data)
        } else {
            console.error('Erro ao carregar dados: ' + xhr.statusText);
        }
    };
    xhr.onerror = function () {
        console.error('Erro de rede ao tentar carregar dados.');
    };
    xhr.send('teste=' + encodeURIComponent(api));
});
function criaOptionsMvp(data){
    const selectMvp=document.querySelector("#selectVotMvp");
    data.forEach(element => {
        if('erro' in element){
            console.log(element.erro);
        }else{
            var option=document.createElement("option");
            option.textContent=element.nome;
            option.value=element.nome;
            selectMvp.appendChild(option);
        }
    });
}
function criaOptionsMip(data){
    const selectMip=document.querySelector("#selectVotMip");
    data.forEach(element => {
        if('erro' in element){
            console.log(element.erro);
        }else{
            var option=document.createElement("option");
            option.textContent=element.nome;
            option.value=element.nome;
            selectMip.appendChild(option);
        }
    });
}
function criaOptionsBagre(data){
    const selectBagre=document.querySelector("#selectVotBagre");
    data.forEach(element => {
        if('erro' in element){
            console.log(element.erro);
        }else{
            var option=document.createElement("option");
            option.textContent=element.nome;
            option.value=element.nome;
            selectBagre.appendChild(option);
        }
    });
}