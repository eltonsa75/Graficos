<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Vendas</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<div class="container">
<div style="text-align: right">
    <a href="#" role="button" class="btn btn-primary btn-sm">Relatórios</a>
    <a href="#" role="button" class="btn btn-danger btn-sm">Voltar</a>
</div>

<h2>Cadastro de Vendas</h2>
    <form action="cadastro_vendas2.php" method="post">
        <div class="form-group">
            <select class="form-control" name="mes">
                    <option>Janeiro</option>
                    <option>Fevereiro</option>
                    <option>Março</option>
                    <option>Abril</option>
                    <option>Maio</option>
                    <option>Junho</option>
                    <option>Julho</option>
                    <option>Agosto</option>
                    <option>Setembro</option>
                    <option>Outubro</option>
                    <option>Novembro</option>
                    <option>Dezembro</option>
            </select>
        </div>
        <div class="form-group">
        <label>Digite a Quantidade</label>
            <input type="number" name="quantidade" class="form-control">
        </div>
        <div class="form-group">
        <label>Digite o Valor</label>
            <input type="numeric" name="valor" class="form-control">
        </div>
        <br/>
        <div style="text-align: right">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>
<!--Script Bundle with Popper -->
<sDezembroc="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
