<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/992d37b8ec.js" crossorigin="anonymous"></script>
    
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
    </svg>

    <title>Produtos Cadastrados</title>
  </head>
  <body>
    
    <main class="container">
        <h3><a href="index.php"><i class="bi bi-arrow-left-circle-fill"></i></a>Ínicio</h3>
        <h1>Tabela de Produtos Cadastrados</h1>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Código do Produto</th>
              <th scope="col">Nome do Produto</th>
              <th scope="col">Quantidade</th>
              <th scope="col">Opções</th>
            </tr>
          </thead>
          <tbody>
            
            <?php include 'crud/read.php';?>

          </tbody>
        </table>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>