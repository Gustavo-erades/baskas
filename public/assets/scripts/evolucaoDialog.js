function evolucaoDialog() {
    const graf = document.querySelector("#grafEvolucao");
    /*const dialog = document.querySelector("#dialogEvolucao");*/
    let chartEvolucao = new Chart(graf, {
        type: 'radar',
        data: {
            labels: ['Velocidade', 'Força', 'Agilidade', 'Inteligência', 'Resistência'],
            datasets: [{
                label: 'Jogador 1',
                data: [75, 85, 90, 80, 70],
                fill: true,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                pointBackgroundColor: 'rgba(255, 99, 132, 1)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgba(255, 99, 132, 1)'
            }, {
                label: 'Jogador 2',
                data: [80, 70, 85, 90, 75],
                fill: true,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                pointBackgroundColor: 'rgba(54, 162, 235, 1)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgba(54, 162, 235, 1)'
            }]
        },
        options: {
            scales: {
                r: {
                    angleLines: {
                        display: true
                    },
                    suggestedMin: 0,
                    suggestedMax: 100
                }
            },
            plugins: {
                legend: {
                    position: 'top'
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let label = context.dataset.label || '';
                            if (label) {
                                label += ': ';
                            }
                            if (context.parsed.r !== null) {
                                label += Math.round(context.parsed.r);
                            }
                            return label;
                        }
                    }
                }
            }
        }
    });
    /*dialog.showModal();*/
}
