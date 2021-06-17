<html>
<header>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


function drawChart(){
    var data = google.visualization.arrayToDataTable([
        ['Ano', 'Vendas', 'Gastos'],
        [2004,  1000, 700],
        [2005,  1170, 600],
        [2006,  300,  1120],
        [2007,  900,  540]
    ]);

    var option = {
        title: 'Meu primeiro Gráfico',
        curveType: 'function',
        legend: { position: 'right' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('graficoLinha'));

    chart.draw(data, option);
}
</script>
</head>
<body>
<div id="graficoLinha" style="width: 900px; height: 500px"></div>
</body>
</html>