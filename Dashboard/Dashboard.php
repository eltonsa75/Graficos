<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Gráfico Dinamico</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
 <body>
    
<header class="navbar navbar-dark bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="https://getbootstrap.com/docs/5.0/examples/dashboard/#">Elton - SA</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="https://getbootstrap.com/docs/5.0/examples/dashboard/#">Sign out</a>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://getbootstrap.com/docs/5.0/examples/dashboard/#">
              
              Dashboard <span class="sr-only">(atual)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=pedidos">
              
              Pedidos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=clientes">
              
              Cadastrar Clientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=vendas">
              Cadastrar Vendas
            </a>
          </li>        
        </ul>

      </div>
    </nav>
    <!-- Conteudo -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
           
          </div>
   
        </div>
      </div>

      <?php 

        if(isset($_GET['pagina'])) {

          switch ($_GET['pagina']) {
            case 'pedidos':
              echo '<h2>Pedidos</h2>';
              include 'graficoArea.php';
            break;
            case 'clientes':
            include 'cadastro_cliente.php';
            break;
            case 'vendas':             
              include 'cadastro_vendas.php';
            break;

            default:
            echo "NENHUMA OPÇÃO ESCOLHIDA";
            break;
          }
        }
      
      ?>
      
    </main>
  </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body></html>