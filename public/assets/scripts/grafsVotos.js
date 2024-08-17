document.addEventListener('DOMContentLoaded', function() {
    fetchDataAndRenderChartMvp()
    fetchDataAndRenderChartMip()
    fetchDataAndRenderChartBagre()
});
const atualizaMvp=()=>{
    const endpoint="../app/services/apiResponseDataGrafMvp.php"
    fetch(endpoint)
    .then(res=>res.json())
    .then(res=>{
        nomesMvp.splice(0, nomesMvp.length);
        for (let i = 0; i < res.length; i++) { 
            nomesMvp[i]=res[i].labels;
            votosMvp[i]=res[i].votosMvp;
        }
        chartMvp.update()
    })
}
const atualizaMip=()=>{
    const endpoint="../app/services/apiResponseDataGrafMip.php"
    fetch(endpoint)
    .then(res=>res.json())
    .then(res=>{
        nomesMip.splice(0, nomesMip.length);
        for (let i = 0; i < res.length; i++) { 
            nomesMip[i]=res[i].labels;
            votosMip[i]=res[i].votosMip;
        }
        chartMip.update()
    })
}
const atualizaBagre=()=>{
    const endpoint="../app/services/apiResponseDataGrafBagre.php"
    fetch(endpoint)
    .then(res=>res.json())
    .then(res=>{
        nomesBagre.splice(0, nomesBagre.length);
        for (let i = 0; i < res.length; i++) { 
            nomesBagre[i]=res[i].labels;
            votosBagre[i]=res[i].votosBagre;
        }
        chartBagre.update()
    })
}
setInterval(atualizaMvp,5000);
setInterval(atualizaMip,5000);
setInterval(atualizaBagre,5000);
