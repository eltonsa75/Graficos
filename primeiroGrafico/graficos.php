<!DOCTYPE html>
<html>
<head>
    <title>Gráfico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body style="background-color:#d3d3d3">

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <?php include 'terceiroGrafico.php' ?>
        </div>
        <div class="col-md-6">
        <?php include 'segundoGrafico.php' ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-md-12">
    <?php include 'primeiroGrafico.php' ?>
    </div>
</div>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
