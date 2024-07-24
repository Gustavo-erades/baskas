function enviaVot() {
    const mvp = document.querySelector("#selectVotMvp").value;
    const mip = document.querySelector("#selectVotMip").value;
    const bagre = document.querySelector("#selectVotBagre").value;
    const nome = document.querySelector("#nomeVot").value;
    if (mvp !== '' && mip !== '' && nome !== '') {
        var voto = [mvp, mip, bagre, nome];
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log("Resposta da api:"+this.responseText);
                window.location.replace("http://localhost/testes/baskas/public/");
            }
        };
        xhttp.open("POST", "../app/services/apiEnviaVot.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("voto=" + voto);
    } else {
        alert("Campo obrigatório vazio");
    }
}
