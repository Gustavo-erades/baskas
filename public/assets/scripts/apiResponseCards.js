function apiResponseCards(jogador) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../app/services/apiResponseCards.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 400) {
            var data = JSON.parse(xhr.responseText);
            const ulResponse = document.querySelector('#response'+data[0]['jogador']);
            ulResponse.innerHTML='';
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
    const dialogResponse = document.querySelector('#responseCard'+data[0]['jogador']);
    data.forEach(function (item) {
        const ulResponse=document.querySelector('#response'+item.jogador);
        if ('erro' in item) {
            console.log(item.erro);
        } else {
            dia=formatarDataBrasileira(new Date(item.dia))
            console.log('jogador: ' + item.jogador + ', dia: ' + dia + ', historico: ' + item.historico);
            const li=document.createElement('tr');
            const td1=document.createElement('td');
            const td2=document.createElement('td');
            td1.textContent=item.historico;
            td2.textContent=dia;
            li.appendChild(td1);
            li.appendChild(td2);
            ulResponse.appendChild(li);
        }
    });
    dialogResponse.showModal();
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
