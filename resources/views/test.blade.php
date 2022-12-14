<html>
    <head>
        <!-- Load plotly.js into the DOM -->
        <script src='https://cdn.plot.ly/plotly-2.16.1.min.js'></script>
    </head>
    <body>
        <p>Jumlah User Aktif = {{$user->jumlah_user}}</p>
        <p>Jumlah Petani Aktif = {{$petani->jumlah_petani}}</p>
        <p>Jumlah Project Aktif = {{$project->jumlah_project}}</p>
        <p>Total Transaksi = Rp {{$transaksi->total_nominal}}</p>
        <p>Petani 158 = Rp {{$a->total_nominal}}</p>
        <div id='myDiv'><!-- Plotly chart will be drawn inside this DIV --></div>
        <div id='myDiv2'><!-- Plotly chart will be drawn inside this DIV --></div>
        
        
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
    <script>
        var data1 = [{
            x: ['User', 'Petani'],
            y: [{{$user->jumlah_user}},{{$petani->jumlah_petani}}],
            type: 'bar'
            }
        ];
        Plotly.newPlot('myDiv', data1);

        var data2 = [
        {
            x: {{ Js::from($tanggal) }},
            y: {{ Js::from($nominal) }},
            type: 'scatter'
        }
        ];

        Plotly.newPlot('myDiv2', data2);
    </script>
</html>
