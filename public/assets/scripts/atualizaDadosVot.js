const atualizaDadosVot = () => {
    const endpoint = "../app/services/apiResponseVot.php";
    fetch(endpoint)
        .then(res => res.json())
        .then(res => {
            insereDadosVot(res)
        })
}
setInterval(atualizaDadosVot, 5000);