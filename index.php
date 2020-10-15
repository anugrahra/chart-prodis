<!DOCTYPE html>
<html>

<head>
    <title>Grafik Prodis BLUD Air Minum Kota Cimahi</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .canvas-container {
            width: 83%;
        }
    </style>
</head>

<body>
    <h3>GRAFIK PRODIS BLUD AIR MINUM KOTA CIMAHI</h3>
    <div class="canvas-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        $(document).ready(function() {
            showGraph();
        });


        function showGraph() {
            {
                $.post("data.php",
                    function(data) {
                        console.log(data);
                        let bulan = [];
                        let produksi = [];
                        let distribusi = [];
                        let pemair = [];
                        let nrw = [];

                        for (let i in data) {
                            bulan.push(data[i].bulan);
                            produksi.push(data[i].jumlah_produksi);
                            distribusi.push(data[i].jumlah_distribusi);
                            pemair.push(data[i].pemair);
                            nrw.push(data[i].nrw);
                        }

                        let chartdata = {
                            labels: bulan,
                            datasets: [{
                                label: 'Produksi',
                                backgroundColor: '#FF7F00',
                                borderColor: '#FF7F00',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                fill: false,
                                data: produksi
                            }, {
                                label: 'Distribusi',
                                backgroundColor: '#0000FF',
                                borderColor: '#0000FF',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                fill: false,
                                data: distribusi
                            }, {
                                label: 'Pemair',
                                backgroundColor: '#00FF00',
                                borderColor: '#00FF00',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                fill: false,
                                data: pemair
                            }, {
                                label: 'NRW',
                                backgroundColor: '#000000',
                                borderColor: '#000000',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                fill: false,
                                data: nrw
                            }]
                        };

                        let graphTarget = $("#graphCanvas");

                        let barGraph = new Chart(graphTarget, {
                            type: 'line',
                            data: chartdata
                        });
                    });
            }
        }
    </script>

</body>

</html>