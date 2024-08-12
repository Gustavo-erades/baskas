

const ctx1 = document.getElementById('grafMvp');

       // Função para buscar dados da API e criar o gráfico
       async function fetchDataAndRenderChart() {
        try {
            const response = await fetch(' ../app/services/apiResponseDataGraf.php');
            const data = await response.json();
            console.log(data[0])
            new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: [data[0],data[1],data[2]],
                    datasets: [{
                        label: 'Título de MVP',
                        data: [1,3,5],
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

    // Chame a função para criar o gráfico
   










/* mvp 
const ctx1 = document.getElementById('grafMvp');
new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ['nome', 'nome2', 'nome3'],
        datasets: [{
            label: 'Título de MVP',
            data: [1, 8, 3],
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
});*/
/* mip */
const ctx2 = document.getElementById('grafMip');
new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: 'Título de MIP',
            data: [12, 19, 3, 5, 2, 3],
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
/* bagre */
const ctx3 = document.getElementById('grafBagre');
new Chart(ctx3, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: 'Título de Bagre',
            data: [12, 19, 3, 5, 2, 3],
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