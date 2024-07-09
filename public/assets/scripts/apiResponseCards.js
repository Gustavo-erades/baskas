function apiResponseCards(jogador) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../app/services/apiResponseCards.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 400) {
            var data = JSON.parse(xhr.responseText);
            mostrarDados(data);
        } else {
            console.error('Erro ao carregar dados: ' + xhr.statusText);
        }
    };
    xhr.onerror = function () {
        console.error('Erro de rede ao tentar carregar dados.');
    };
    xhr.send('jogador=' + encodeURIComponent(jogador));
}
function mostrarDados(data) {
    data.forEach(function (item) {
        const dialogResponse = document.querySelector('#responseCard' + item.jogador);
        const ulResponse = document.querySelector('#response' + item.jogador);
        if ('erro' in item) {
            console.log(item.erro);
        } else {
            dia=formatarDataBrasileira(new Date(item.dia))
            console.log('jogador: ' + item.jogador + ', dia: ' + dia + ', historico: ' + item.historico);
            const li=document.createElement('li');
            li.textContent=item.historico+'  '+dia;
            li.style.color="#000";
            ulResponse.appendChild(li);
        }
        dialogResponse.showModal();
    });
}
function formatarDataBrasileira(data) {
    var dia = data.getDate();
    var mes = data.getMonth() + 1; 
    var ano = data.getFullYear();
    if (dia < 10) {
        dia = '0' + dia;
    }
    if (mes < 10) {
        mes = '0' + mes;
    }
    return dia + '/' + mes + '/' + ano;
}