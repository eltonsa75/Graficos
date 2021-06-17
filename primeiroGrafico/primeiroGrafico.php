<html>
<header>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


function drawChart(){
    var data = google.visualization.arrayToDataTable([
        ['Cidade', 'População', { role: 'annotation' }],
        <?php 

        include 'conexao.php';
        $sql = "SELECT * FROM cidades";
        $buscar = mysqli_query($conexao, $sql);

        while ($dados = mysqli_fetch_array($buscar)){
            $cidades = $dados['cidade'];
            $populacao = $dados['populacao'];
        ?>
        ['<?php echo $cidades ?>', <?php echo $populacao ?>, <?php echo $populacao ?> ],

        <?php } ?>
    ]);

    var option = {
        title: 'População das Cidades',
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