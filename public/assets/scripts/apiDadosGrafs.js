/* insere dados no gráfico */
/* mvp */
const ctx1 = document.getElementById('grafMvp');
new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: 'Título de MVP',
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
/* mip */
const ctx2 = document.getElementById('grafMip');
    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label:'Título de MIP',
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
            label:'Título de Bagre',
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