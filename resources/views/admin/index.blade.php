@extends('layouts.master')
@section('content')
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                        <div class="row"> <div class="col-sm-4">
                            <div class="card bg-primary img-card box-primary-shadow">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="text-white">
                                            <p class="text-white mb-0">TOTAL POSITIF</p>
                                            <h2 class="mb-0 number-font">{{ $positif }}</h2>
                                            <p class="text-white mb-0">ORANG</p>
                                        </div>
                                        <div class="ml-auto"> <img src="https://kawalcorona.com/uploads/sad-u6e.png" width="50"
                                                height="50" alt="Positif"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card bg-success img-card box-primary-shadow">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="text-white">
                                            <p class="text-white mb-0">TOTAL SEMBUH</p>
                                            <h2 class="mb-0 number-font">{{ $sembuh }}</h2>
                                            <p class="text-white mb-0">ORANG</p>
                                        </div>
                                        <div class="ml-auto"> <img src="https://kawalcorona.com/uploads/happy-ipM.png" width="50"
                                                height="50" alt="Positif">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card bg-danger img-card box-primary-shadow">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="text-white">
                                            <p class="text-white mb-0">TOTAL MENINGGAL</p>
                                            <h2 class="mb-0 number-font">{{ $meninggal }}</h2>
                                            <p class="text-white mb-0">ORANG</p>
                                        </div>
                                        <div class="ml-auto"> <img src="https://kawalcorona.com/uploads/emoji-LWx.png" width="50"
                                                height="50" alt="Positif"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
                    <div class="card">
                        <div class="card-body">
                            <canvas id="myChart"></canvas>
                            <br>
                            <div class="row mt-6">
                                <div class="col text-center">
                                    <h5 class="font-weight-normal mt-2">POSITIF</h5>
                                    <h3 class="text-xxl mb-1 social-content  number-font">{{ $positif }}</h3>
                                    <p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>

                                </div>
                                <div class="col text-center">
                                    <h5 class="font-weight-normal mt-2">SEMBUH</h5>
                                    <h3 class="text-xxl mb-1 social-content danger number-font">{{ $sembuh }}</h3>
                                    <p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>

                                </div>
                                <div class="col text-center">
                                    <h5 class="font-weight-normal mt-2">MENINGGAL</h5>
                                    <h3 class="text-xxl mb-1 social-content  number-font">{{ $meninggal }}</h3>
                                    <p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>

                                </div>
                                <div class="chart-wrapper">
                                    <canvas id="deals" class="chart-dropshadow-success chartjs-render-monitor" hidden=""
                                        height="85" width="0" style="display: block; width: 0px; height: 85px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
        var tanggal = <?php echo $casesTanggal; ?>;    var positif = <?php echo $casesPositif; ?>;    var sembuh = <?php echo $casesSembuh; ?>;    var meninggal = <?php echo $casesMeninggal; ?>;    var barChartData = {
            labels: tanggal,
            datasets: [{
                label: 'Positif',
                backgroundColor: "rgba(252, 186, 3)",
                data: positif
            }, {
                label: 'Sembuh',
                backgroundColor: "rgba(11, 212, 64)",
                data: sembuh

            }, {
                label: 'Meninggal',
                backgroundColor: "rgba(227, 69, 25)",
                data: meninggal
            }]
        };

        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Kasus Covid-19 Indonesia'
                }
            }
        });

    </script>


@endsection
