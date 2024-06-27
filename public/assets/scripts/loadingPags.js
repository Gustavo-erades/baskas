var i = setInterval(function () {
    clearInterval(i);
    document.getElementById("load").style.display = "none";
    document.getElementById("conteudoPag").style.display = "block";
}, 2000);