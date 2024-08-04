document.addEventListener("DOMContentLoaded", (api) => {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../app/services/apiNomesTitulosSemana.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 400) {
            var data = JSON.parse(xhr.responseText);
            console.log(data)
            insereNomesMvp(data);
            insereNomesMip(data);
            insereNomesBagre(data);
        } else {
            console.error('Erro ao carregar dados:' + xhr.statusText);
        }
    };
    xhr.onerror = function () {
        console.error('Erro de rede ao tentar carregar dados.');
    };
    xhr.send('votNomes=' + encodeURIComponent(api));
});
function insereNomesMvp(data) {
    var elementoPai = document.querySelector("#mvp");
    data[0].forEach(function (item) {
        if ('erro' in item) {
            console.log(item.erro);
        } else {
                const option = document.createElement('option');
                option.textContent = item.nomeVotMvp
                elementoPai.appendChild(option);  
        }
    });
};
function insereNomesMip(data) {
    var elementoPai1 = document.querySelector("#mip");
    data[1].forEach(function (item) {
        if ('erro' in item) {
            console.log(item.erro);
        } else {
                const option = document.createElement('option');
                option.textContent = item.nomeVotmip
                elementoPai1.appendChild(option);  
        }
    });
}
function insereNomesBagre(data) {
    var elementoPai2 = document.querySelector("#bagre");
    data[2].forEach(function (item) {
        if ('erro' in item) {
            console.log(item.erro);
        } else {
                const option = document.createElement('option');
                option.textContent = item.nomeVotbagre
                elementoPai2.appendChild(option);  
        }
    });
}