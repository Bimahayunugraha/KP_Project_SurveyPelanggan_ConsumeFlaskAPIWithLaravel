@extends('layouts.main')

@section('container')
<div style="background-color: #ffffff; margin: 20px; border-radius: 2%;">
    <h1 style="display: flex; justify-content: center; color: #212121;">Pelayanan Pelanggan</h1>
    <canvas id="chart1" width="100" height="100"></canvas> 
</div>
<div style="background-color: #ffffff; margin: 20px; border-radius: 2%;">
    <h1 style="display: flex; justify-content: center; color: #212121;">Kepuasan Pelanggan</h1>
    <canvas id="chart2" style="width: 300px; height: 100px;"></canvas>
</div>
<div style="background-color: #ffffff; margin: 20px; border-radius: 2%;">
    <h1 style="display: flex; justify-content: center; color: #212121;">Pelayanan Teknisi</h1>
    <canvas id="chart3" style="width: 300px; height: 100px;"></canvas>
</div>
<div style="background-color: #ffffff; margin: 20px; border-radius: 2%;">
    <h1 style="display: flex; justify-content: center; color: #212121;">Metode Pembayaran</h1>
    <canvas id="chart4" style="width: 300px; height: 100px;"></canvas>
</div>
<div style="background-color: #ffffff; margin: 20px; border-radius: 2%;">
    <h1 style="display: flex; justify-content: center; color: #212121;">Kualitas Internet</h1>
    <canvas id="chart5" style="width: 300px; height: 100px;"></canvas>
</div>

<script>
    var pieData = {
        labels : [
            'Sangat tidak puas',
            'Tidak puas',
            'Puas',
            'Cukup puas',
            'Sangat puas',
        ],

        datasets : [{
        backgroundColor: [
            'orange', 'blue', 'green', 'red', 'yellow',
        ],
        fillColor: "rgba(151,187,205,0.2)",
        strokeColor: "rgba(151,187,205,1)",
        pointColor: "rgba(151,187,205,1)",
        data : [
            @foreach ($responseBody[0] as $response)
                "{{ $response }}",
            @endforeach
            ]
        }],
    };

    var options = {
        tooltips: {
            enabled: false
        },
        plugins: {
            datalabels: {
            formatter: (value, ctx) => {         
                let sum = 0;
                let dataset = ctx.chart.data.datasets[0].data;
                dataset.map(data => {sum += data;});
                let percentage = (value * 100 / sum).toFixed(2) + '%';
                return percentage;
            },
            color: '#fff',
            }
        }
    };
    // get bar chart canvas
    var ctx = document.getElementById("chart1").getContext("2d");

    var myChart = new Chart(ctx, {
        plugins: [ChartDataLabels],
        type: 'pie',
        data: pieData,
        options: options,
    });

    var pieData2 = {
        labels : [
            'Sangat tidak puas',
            'Tidak puas',
            'Puas',
            'Cukup puas',
            'Sangat puas',
        ],

        datasets : [{
            backgroundColor: [
                'orange', 'blue', 'green', 'red', 'yellow',
            ],
        fillColor: "rgba(151,187,205,0.2)",
        strokeColor: "rgba(151,187,205,1)",
        pointColor: "rgba(151,187,205,1)",
        data : [
            @foreach ($responseBody[1] as $response)
            "{{ $response }}",
            @endforeach
            ]
        }
        ]
    };

    var options = {
        tooltips: {
            enabled: false
        },
        plugins: {
            datalabels: {
            formatter: (value, ctx) => {
                let sum = 0;
                let dataset = ctx.chart.data.datasets[0].data;
                dataset.map(data => {sum += data;});
                let percentage = (value * 100 / sum).toFixed(2) + '%';
                return percentage;
            },
            color: '#fff',
            }
        }
    };

    // get bar chart canvas
    var ctx = document.getElementById("chart2").getContext("2d");
    Chart.register(ChartDataLabels);
    var myChart = new Chart(ctx, {
        plugins: [ChartDataLabels],
        type: 'pie',
        data: pieData2,
        options : options,
    });

    var pieData3 = {
        labels : [
            'Sangat tidak puas',
            'Tidak puas',
            'Puas',
            'Cukup puas',
            'Sangat puas',
        ],

        datasets : [{
            backgroundColor: [
                'orange', 'blue', 'green', 'red', 'yellow',
            ],
        fillColor: "rgba(151,187,205,0.2)",
        strokeColor: "rgba(151,187,205,1)",
        pointColor: "rgba(151,187,205,1)",
        data : [
            @foreach ($responseBody[2] as $response)
            "{{ $response }}",
            @endforeach
            ]
        }
        ]
    };

    var options = {
        tooltips: {
            enabled: false
        },
        plugins: {
            datalabels: {
            formatter: (value, ctx) => {
                let sum = 0;
                let dataset = ctx.chart.data.datasets[0].data;
                dataset.map(data => {sum += data;});
                let percentage = (value * 100 / sum).toFixed(2) + '%';
                return percentage;
            },
            color: '#fff',
            }
        }
    };

    // get bar chart canvas
    var ctx = document.getElementById("chart3").getContext("2d");

    var myChart = new Chart(ctx, {
        plugins: [ChartDataLabels],
        type: 'pie',
        data: pieData3,
        options: options,
    });

    var pieData4 = {
        labels : [
            'Sangat tidak puas',
            'Tidak puas',
            'Puas',
            'Cukup puas',
            'Sangat puas',
        ],

        datasets : [{
            backgroundColor: [
                'orange', 'blue', 'green', 'red', 'yellow',
            ],
        fillColor: "rgba(151,187,205,0.2)",
        strokeColor: "rgba(151,187,205,1)",
        pointColor: "rgba(151,187,205,1)",
        data : [
            @foreach ($responseBody[3] as $response)
            "{{ $response }}",
            @endforeach
            ]
        }
        ]
    };

    var options = {
        tooltips: {
            enabled: false
        },
        plugins: {
            datalabels: {
            formatter: (value, ctx) => {
                let sum = 0;
                let dataset = ctx.chart.data.datasets[0].data;
                dataset.map(data => {sum += data;});
                let percentage = (value * 100 / sum).toFixed(2) + '%';
                return percentage;
            },
            color: '#fff',
            }
        }
    };

    // get bar chart canvas
    var ctx = document.getElementById("chart4").getContext("2d");

    var myChart = new Chart(ctx, {
        plugins: [ChartDataLabels],
        type: 'pie',
        data: pieData4,
        options: options,
    });

    var pieData5 = {
        labels : [
            'Sangat tidak puas',
            'Tidak puas',
            'Puas',
            'Cukup puas',
            'Sangat puas',
        ],

        datasets : [{
            backgroundColor: [
                'orange', 'blue', 'green', 'red', 'yellow',
            ],
        fillColor: "rgba(151,187,205,0.2)",
        strokeColor: "rgba(151,187,205,1)",
        pointColor: "rgba(151,187,205,1)",
        data : [
            @foreach ($responseBody[4] as $response)
            "{{ $response }}",
            @endforeach
            ]
        }
        ]
    };

    var options = {
        tooltips: {
            enabled: false
        },
        plugins: {
            datalabels: {
            formatter: (value, ctx) => {
                let sum = 0;
                let dataset = ctx.chart.data.datasets[0].data;
                dataset.map(data => {sum += data;});
                let percentage = (value * 100 / sum).toFixed(2) + '%';
                return percentage;
            },
            color: '#fff',
            }
        }
    };

    // get bar chart canvas
    var ctx = document.getElementById("chart5").getContext("2d");

    var myChart = new Chart(ctx, {
        plugins: [ChartDataLabels],
        type: 'pie',
        data: pieData5,
        options: options,
    });
</script>
@endsection