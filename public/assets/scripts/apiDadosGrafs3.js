/* insere dados no gráfico */
document.addEventListener("DOMContentLoaded", (api) => {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../app/services/apiResponseVotDialog.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 400) {
            var data = JSON.parse(xhr.responseText);
            const array1=[]
            data.forEach(function (item) {
                    array1.push(item.nomeVotMvp);
            });
            console.log("Teste:"+array1)

            const ctx1 = document.getElementById('grafMvp');
            new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: array1,
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
            });



        } else {
            console.error('Erro ao carregar dados:' + xhr.statusText);
        }
    };
    xhr.onerror = function () {
        console.error('Erro de rede ao tentar carregar dados.');
    };
    xhr.send('votNomes=' + encodeURIComponent(api));
});
/* mvp */

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