function apiResponseTitulo(elemento) {
    const idDoBotao = elemento;
    const modal = document.querySelector("#dialogTitulo")

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../app/services/apiResponseTitulo.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 400) {
            var data = JSON.parse(xhr.responseText);
            if (data.length > 0) {
                modal.showModal();
                const ulResponse = document.querySelector('#responseTitulo');
                ulResponse.innerHTML = '';
                mostrarDadosTitulo(data, ulResponse);
            }
        } else {
            console.error('Erro ao carregar dados: ' + xhr.statusText);
        }
    };
    xhr.onerror = function () {
        console.error('Erro de rede ao tentar carregar dados.');
    };
    xhr.send('responseTitulo=' + encodeURIComponent(idDoBotao));
}

function mostrarDadosTitulo(data, elementoPai) {
    data.forEach(function (item) {
        if ('erro' in item) {
            console.log(item.erro);
        } else {
            const li = document.createElement('tr');
            const td1 = document.createElement('td');
            const td2 = document.createElement('td');
            td1.textContent = item.titulo;
            td2.textContent = item.dia;
            li.appendChild(td1);
            li.appendChild(td2);
            elementoPai.appendChild(li);
        }
    });
}
