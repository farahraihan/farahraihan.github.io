        // chart total titik 
        const ctx1 = document.getElementById('chart1');

        new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Meterisasi', 'Tersebar', 'Swadaya'],
            datasets: [{
                label: 'Jumlah Titik',
                barPercentage: 1,
                data: [4036, 8918, 2664],
                backgroundColor: [
                'rgba(255, 99, 132, 0.5)',              
                'rgba(255, 205, 86, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                ],
                borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 205, 86)',
                'rgb(153, 102, 255)',
                ],
                borderWidth: 1
            }]
        },
        plugins: [ChartDataLabels],
        options: {
            plugins: {
                legend: {
                    display: false,
                },
                datalabels: {
                    anchor: 'end',
                    align: 'bottom',
                },
                decimation: {
                    enabled: true,
                },
            },
            
            scales: {
            y: {
                beginAtZero: true

            }
            }
        },
        });


        // chart total watt 
        const ctx2 = document.getElementById('chart2');

        new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Meterisasi', 'Tersebar', 'Swadaya'],
            datasets: [{
                label: 'Jumlah Watt',
                barPercentage: 1,
                data: [493970, 1646476, 510000],
                backgroundColor: [
                'rgba(255, 99, 132, 0.5)',              
                'rgba(255, 205, 86, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                ],
                borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 205, 86)',
                'rgb(153, 102, 255)',
                ],
                borderWidth: 1
            }]
        },
        plugins: [ChartDataLabels],
        options: {
            plugins: {
                legend: {
                    display: false,
                },
                datalabels: {
                    anchor: 'end',
                    align: 'bottom',
                },
                decimation: {
                    enabled: true,
                },
            },
            
            scales: {
            y: {
                beginAtZero: true

            }
            }
        }
        });


        // chart total va
        const ctx3 = document.getElementById('chart3');

        new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: ['Meterisasi', 'Tersebar', 'Swadaya'],
            datasets: [{
                label: 'Jumlah VA',
                barPercentage: 1,
                data: [1209300, 3806450, 221485],
                backgroundColor: [
                'rgba(255, 99, 132, 0.5)',              
                'rgba(255, 205, 86, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                ],
                borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 205, 86)',
                'rgb(153, 102, 255)',
                ],
                borderWidth: 1
            }]
        },
        plugins: [ChartDataLabels],
        options: {
            plugins: {
                legend: {
                    display: false,
                },
                datalabels: {
                    anchor: 'end',
                    align: 'bottom',
                },
                decimation: {
                    enabled: true,
                },
            },
            
            scales: {
            y: {
                beginAtZero: true

            }
            }
        }
        });

        // chart pju per kondisi
        const ctx4 = document.getElementById('chart4');

        new Chart(ctx4, {
        type: 'pie',
        data: {
            labels: [
                'Normal',
                'Nyala',
                'Rusak'
            ],
            datasets: [{
                label: 'Jumlah Titik',
                data: [14692, 371, 555],
                backgroundColor: [
                'rgba(255, 159, 64, 0.4)',
                'rgba(75, 192, 192, 0.4)',
                'rgb(255, 99, 132, 0.4)',
                ],
                borderColor: [
                'rgba(255, 159, 64)',
                'rgba(75, 192, 192)',
                'rgb(255, 99, 132)',
                ],
                borderWidth: 1,
                hoverOffset: 4,
            }],
        },
        plugins: [ChartDataLabels],
        });

        // chart request
        const ctx5 = document.getElementById('chart5');

        new Chart(ctx5, {
        type: 'doughnut',
        data: {
            labels: [
                'Pending',
                'Selesai'
            ],
            datasets: [{
                label: 'Jumlah Titik',
                data: [15, 5],
                backgroundColor: [
                'rgb(255, 99, 132, 0.4)',
                'rgba(54, 162, 235, 0.4)',
                ],
                borderColor: [
                'rgb(255, 99, 132)',
                'rgba(54, 162, 235)',
                ],
                borderWidth: 1,
                hoverOffset: 4,
            }],
        },
        plugins: [ChartDataLabels],
        });

