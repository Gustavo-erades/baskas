const ctx1 = document.getElementById('grafMvp');
const ctx2 = document.getElementById('grafMip');
const ctx3 = document.getElementById('grafBagre');
// Função para buscar dados da API e criar o gráfico
/* mvp */
async function fetchDataAndRenderChartMvp() {
    try {
        const response = await fetch(' ../app/services/apiResponseDataGrafMvp.php');
        const data = await response.json();
        const nomesMvp = [];
        for (let i = 0; i < data.length; i++) { // Corrigido para 'length' e a condição 'i < data.length'
            nomesMvp.push(data[i]['labels']);
        }

        const votosMvp = [];
        for (let i = 0; i < data.length; i++) { // Corrigido para 'length' e a condição 'i < data.length'
            votosMvp.push(data[i]['votosMvp']);
        }

        new Chart(ctx1, {
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
async function fetchDataAndRenderChartMip() {
    try {
        const response = await fetch(' ../app/services/apiResponseDataGrafMip.php');
        const data = await response.json();
        const nomesMip = [];
        for (let i = 0; i < data.length; i++) { 
            nomesMip.push(data[i]['labels']);
        }

        const votosMip = [];
        for (let i = 0; i < data.length; i++) { 
            votosMip.push(data[i]['votosMip']);
        }

        new Chart(ctx2, {
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
                }
            }
        });

    } catch (error) {
        console.error('Erro ao buscar dados:', error);
    }
}
/* bagre */
async function fetchDataAndRenderChartBagre() {
    try {
        const response = await fetch(' ../app/services/apiResponseDataGrafBagre.php');
        const data = await response.json();
        const nomesBagre = [];
        for (let i = 0; i < data.length; i++) { 
            nomesBagre.push(data[i]['labels']);
        }

        const votosBagre = [];
        for (let i = 0; i < data.length; i++) { 
            votosBagre.push(data[i]['votosBagre']);
        }

        new Chart(ctx3, {
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
