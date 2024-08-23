function apiRegistraTitulos() {
    const mvpDoJogo = document.getElementById("mvp").value;
    const mipDoJogo = document.getElementById("mip").value;
    const bagreDoJogo = document.getElementById("bagre").value;

    const titulos = [mvpDoJogo, mipDoJogo, bagreDoJogo];

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log("Resposta da api:"+this.responseText);
            
        }
    };
    xhr.open('POST', '../app/services/apiRegistraTitulos.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('titulos=' + titulos);
    zerarBdVot('votacao');
}
async function zerarBdVot(bd){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log("Resposta da api:"+this.responseText);
        }
    };
    xhr.open('POST', '../app/services/apiZerarBd.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('zerarBd=' + bd);

}