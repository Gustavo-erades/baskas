const ctx1 = document.getElementById('grafMvp');
const ctx2 = document.getElementById('grafMip');
const ctx3 = document.getElementById('grafBagre');
// Função para buscar dados da API e criar o gráfico
/* mvp */
let chartMvp;
const nomesMvp = [];
const votosMvp = [];
async function fetchDataAndRenderChartMvp() {
    try {
        console.log("chamando função mvp");
        const response = await fetch(' ../app/services/apiResponseDataGrafMvp.php');
        const data = await response.json();
        
        for (let i = 0; i < data.length; i++) { 
            nomesMvp.push(data[i]['labels']);
        }

        
        for (let i = 0; i < data.length; i++) { 
            votosMvp.push(data[i]['votosMvp']);
        }

        chartMvp=new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: nomesMvp,
                datasets: [{
                    label: 'Título de MVP',
                    data: votosMvp,
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    } catch (error) {
        console.error('Erro ao buscar dados:', error);
    }
}
/* mip */
let chartMip;
const nomesMip = [];
const votosMip = [];
async function fetchDataAndRenderChartMip() {
    try {
        console.log("chamando função mip");
        const response = await fetch(' ../app/services/apiResponseDataGrafMip.php');
        const data = await response.json();
        for (let i = 0; i < data.length; i++) { 
            nomesMip.push(data[i]['labels']);
        }

        for (let i = 0; i < data.length; i++) { 
            votosMip.push(data[i]['votosMip']);
        }

        chartMip=new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: nomesMip,
                datasets: [{
                    label: 'Título de MIP',
                    data:votosMip,
                    borderWidth: 1
        
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                animation:{
                    easing:'easeOutQuad'
                }
            }
        });

    } catch (error) {
        console.error('Erro ao buscar dados:', error);
    }
}
/* bagre */
let chartBagre;
const nomesBagre = [];
const votosBagre = [];
async function fetchDataAndRenderChartBagre() {
    try {
        console.log("chamando função bagre");
        const response = await fetch(' ../app/services/apiResponseDataGrafBagre.php');
        const data = await response.json();
        for (let i = 0; i < data.length; i++) { 
            nomesBagre.push(data[i]['labels']);
        }

        for (let i = 0; i < data.length; i++) { 
            votosBagre.push(data[i]['votosBagre']);
        }

        chartBagre=new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: nomesBagre,
                datasets: [{
                    label: 'Título de Bagre',
                    data:votosBagre,
                    borderWidth: 1
        
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });


    } catch (error) {
        console.error('Erro ao buscar dados:', error);
    }
}
