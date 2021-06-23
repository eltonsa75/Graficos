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

<!-- https://www.colourlovers.com/ -->

<div class="container" style="background-color: #250352; margin-top: 20px">
  <canvas style="padding:30px" id="Barra"></canvas>
</div>
<div class="container">
    <button class="btn" style="background-color: rgba(0,255,255);" onclick="adddata()">Adicionar Valor</button>
    <button class="btn" style="background-color: rgba(255,99,132);" onclick="removedata()">Remover Valor</button>
</div>

<script type="text/javascript">
var ctx = document.getElementById('Barra').getContext('2d');
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
        labels:[<?php echo $mes ?>],
        datasets:
        [
            {
            label: 'Meta 2018',
            data:[120,300,99,155.70,547.53],
            borderColor: 'rgba(255,255,0)',
            borderWidth: 3,
            type: 'line'
        },
            {
            label: 'Meta 2019',
            data:[255,160,120,69.45,237.67],
            borderColor: '#FFFAFA',
            borderWidth: 3,
            type: 'line'
        },
            
            {
            label: '2018',
            data:[<?php echo $ano_2018 ?>],
            backgroundColor: 'rgba(255,99,132)',
            borderColor: 'rgba(255,99,132)',
            borderWidth: 3
        },
        {
            label: '2019',
            data:[<?php echo $ano_2019 ?>],
            backgroundColor: 'rgba(0,255,255)',
            borderColor: 'rgba(0,255,255)',
            borderWidth: 3
        }

        ]
  },

  options: { 
      legend: {
          labels: {
              fontColor: "white",
              fontSize: 18
          }
      },
      scales: {
          xAxes: [{
              display: true,
              scaleLabel: {
                  display: true,
                  labelString: 'Meses',
                  fontColor: '#ffffff',
                  fontSize:20
              },
              ticks: {
                  fontColor: "white",
                  fontSize: 20
              }
          }],
          yAxes: [{
              display:true,
              scaleLabel: {
                  display: true,
                  labelString: 'Valores',
                  fontColor: '#ffffff',
                  fontSize: 20
              },
              ticks: {
                  fontColor: "white",
                  fontSize: 20
              }
          }]
      }
  }
});
/* Funções em JS */

function adddata(){
myLineChart.data.datasets[3].data[5] = 622;
myLineChart.data.labels[5] = "Junho";
myLineChart.update();
}
function removedata(){
myLineChart.data.labels.splice(5);
myLineChart.data.datasets[3].data.splice(5);
myLineChart.update();
}

</script>

</body>
</html>