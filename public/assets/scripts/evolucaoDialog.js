var teste=document.querySelector("#teste");
const config = new Chart(teste,{
    type: 'line',
    data: {
        labels:['jan','Feb','Mar','Apr','May'],
        datasets:[{
            label:'Histórico',
            data:[10,20,90,80,65]
        }]
    },
    options: {
      responsive: true,
      plugins: {
        title: {
          display: true,
          text: (ctx) => 'Point Style: ' + ctx.chart.data.datasets[0].pointStyle,
        }
      }
    }
  });