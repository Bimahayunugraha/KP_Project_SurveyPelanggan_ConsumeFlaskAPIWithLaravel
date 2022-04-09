@extends('layouts.main')

@section('container')
<canvas id="kmeans"></canvas>

<script>
    var kmeansData = {
        labels : [
            '1',
            '2',
            '3',
            '4',
            '5',
        ],

        datasets : [{
        label: 'Kmeans Algorithm',
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
            @foreach ($responseBodyKmeans as $responsekmeans)
                "{{ $responsekmeans }}",
            @endforeach
            ]
        }],
    }

    // get bar chart canvas
    var ctx = document.getElementById("kmeans").getContext("2d");

    var myChart = new Chart(ctx, {
        type: 'line',
        data: kmeansData,
    });
</script>

@endsection