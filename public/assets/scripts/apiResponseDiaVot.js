//api consumida ao carregar a página
document.addEventListener('DOMContentLoaded',function(api){
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../app/services/apiResponseDiaVot.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 400) {
            var data = JSON.parse(xhr.responseText);
            console.log(data)
            insereDiaVot(data);
        } else {
            console.error('Erro ao carregar dados: ' + xhr.statusText);
        }
    };
    xhr.onerror = function () {
        console.error('Erro de rede ao tentar carregar dados.');
    };
    xhr.send('votDia=' + encodeURIComponent(api));
});
//insere os dados retornados do bd nos campos
function insereDiaVot(data){
    var votDia=document.querySelector("#dia");
    votDia.textContent=data.dia;
}