function verificaDados() {
    const mvp = document.querySelector("#selectVotMvp").value;
    const mip = document.querySelector("#selectVotMip").value;
    const bagre = document.querySelector("#selectVotBagre").value;
    const nome = document.querySelector("#nomeVot").value;

    if (mvp !== '' && mip !== '' && nome !== '') {
        var voto = {
            nome: nome,
            mvp: mvp,
            mip: mip,
            bagre: bagre
        };
        apiEnviaVot(mvp);
    } else {
        alert("Campo obrigatório vazio");
    }
}

function apiEnviaVot(voto) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../app/services/apiEnviaVot.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 400) {
            var data = JSON.parse(xhr.responseText);
            console.log(data)
        } else {
            console.error('Erro ao carregar dados: ' + xhr.statusText);
        }
    };
    xhr.onerror = function () {
        console.error('Erro de rede ao tentar carregar dados.');
    };

    console.log(voto);

    xhr.send('votacao=' + encodeURIComponent(voto));
}
