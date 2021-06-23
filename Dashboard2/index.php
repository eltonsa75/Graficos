<?php

include 'conexao/conexao.php';

$sql = "SELECT * FROM lucros";
$buscar = mysqli_query($conexao,$sql);

#chart.js - Preparando valores# 

$mes = '';
$ano_2018 = '';
$ano_2019 = '';

while ($dados = mysqli_fetch_array($buscar)) {

    $mes = $mes . '"' . $dados['mes']. '",';
    $ano_2018 = $ano_2018 . '"' . $dados['ano_2018']. '",';
    $ano_2019 = $ano_2019 . '"' . $dados['ano_2019']. '",';

    $mes = trim($mes); #tira os espaços da variável
    $ano_2018 = trim($ano_2018); 
    $ano_2019 = trim($ano_2019); 
    
    
}

?>

<!DOCYTPE html>
<html>
<head>
<title>Gráfico Linha</title>
	<!-- CDN do Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
	<!-- CDN do Chart.js -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
</head>
<body>

<div class="container" style="background-color: #f3f3f3">
  <canvas id="Linha"></canvas>
</div>

<script type="text/javascript">
var ctx = document.getElementById('Linha').getContext('2d');
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
        labels:[<?php echo $mes ?>],
        datasets:
        [{
            label: '2018',
            data:[<?php echo $ano_2018 ?>],
            backgroundColor: 'transparent',
            borderColor: 'rgba(255,99,132)',
            borderWidth: 3
        },
        {
            label: '2019',
            data:[<?php echo $ano_2019 ?>],
            backgroundColor: 'transparent',
            borderColor: 'rgba(0,255,255)',
            borderWidth: 3
        }]
  },

  options: { 
      scales: {scales :{yAxes : [{beginAtZero : false}], xAxes : [{autoskip: true, maxTicketsLimit: 20 }]}},
      tooltips: {mode: 'index'},
      legend:{display: true,position: 'top', labels:{fontColor: 'rgb(0,0,0)', fontSize: 16}}
  }
});
</script>

</body>
</html>