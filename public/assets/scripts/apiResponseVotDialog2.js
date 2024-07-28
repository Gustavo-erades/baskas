function apiResponseVotDialog(elemento){
    const idDoBotao = elemento.id;
    console.log(idDoBotao)
    const modal=document.querySelector("#dialogVot"+idDoBotao+"")
    modal.showModal();
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../app/services/apiResponseVotDialog.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 400) {
            var data = JSON.parse(xhr.responseText);
            const ulResponse = document.querySelector('#responseVot'+idDoBotao);
            ulResponse.innerHTML='';
            mostrarDados(data,ulResponse);
        } else {
            console.error('Erro ao carregar dados: ' + xhr.statusText);
        }
    };
    xhr.onerror = function () {
        console.error('Erro de rede ao tentar carregar dados.');
    };
    const teste='votTitulo=' + encodeURIComponent(idDoBotao)
    console.log(teste)
    xhr.send(teste);
}
function mostrarDados(data,elementoPai) {
    data.forEach(function (item) {
        if ('erro' in item) {
            console.log(item.erro);
        } else {
            const li=document.createElement('tr');
            const td1=document.createElement('td');
            const td2=document.createElement('td');
            td1.textContent=item.nomeVotMvp;
            td2.textContent=item.quantVotMvp;
            li.appendChild(td1);
            li.appendChild(td2);
            elementoPai.appendChild(li);
        }
    });
}
