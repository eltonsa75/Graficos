<html>
<header>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


function drawChart(){
    var data = google.visualization.arrayToDataTable([
        ['Cidade', 'População'],
        <?php 

        include 'conexao.php';
        $sql = "SELECT * FROM cidades";
        $buscar = mysqli_query($conexao, $sql);

        while ($dados = mysqli_fetch_array($buscar)){
            $cidades = $dados['cidade'];
            $populacao = $dados['populacao'];
        ?>
        ['<?php echo $cidades ?>', <?php echo $populacao ?> ],

        <?php } ?>
    ]);

    var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('graficoPizza'));

        chart.draw(data, options);

}
</script>
</head>
<body>
<div id="graficoPizza" style="height: 400px;width: 400px"></div>
</body>
</html>