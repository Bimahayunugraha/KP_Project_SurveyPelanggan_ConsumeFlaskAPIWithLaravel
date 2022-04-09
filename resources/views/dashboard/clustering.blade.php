@extends('layouts.main')

@section('container')
<canvas id="clustering"></canvas>

<script>
    var clusteringData = {
        labels : [
            '1',
            '2',
            '3',
            '4',
            '5',
        ],

        datasets : [{
        label: 'Hasil CLustering',
        backgroundColor: [
            '#FF6384',
            '#36A2EB',
            '#FFCE56',
            '#FF6384',
            '#36A2EB',
        ],
        fillColor: "rgba(151,187,205,0.2)",
        strokeColor: "rgba(151,187,205,1)",
        pointColor: "rgba(151,187,205,1)",
        data : [
            @foreach ($responseBodyClustering as $responseclustering)
                "{{ $responseclustering }}",
            @endforeach
            ]
        }
        ]
    }

    // get bar chart canvas
    var ctx = document.getElementById("clustering").getContext("2d");

    var myChart = new Chart(ctx, {
        type: 'scatter',
        data: clusteringData,
    });
</script>

@endsection