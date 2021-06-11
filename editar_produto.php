<?php
//variaveis para utilização no código
$id = $_GET['id'];

// Dados de conexão HEROKU
$servername = "qao3ibsa7hhgecbv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username   = "rxx8041xlh3ph4xo";
$password   = "e0ax6pldnazbmzq9";
$dbname     = "ryxllcn8snynvw1v";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM produtos WHERE id=$id";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  foreach($stmt->fetchAll() as $k=>$v) {
    $codigo = $v['codigo'];
    $nome = $v['nome'];
    $qtde = $v['qtde'];
  }
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
    </svg>

    <title>Ediçao de Produtos</title>
  </head>
  <body>
    
    <main class="container">
        <h3><a href="index.php"><i class="bi bi-arrow-left-circle-fill"></i></a>Ínicio</h3>
        <h1>Atualização de Cadastro de Produto</h1>

        <form name="form_cad_user" action="crud/update.php?id=<?php echo $id ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputId1" class="form-label">Id</label>
                <input type="number" min="1" name="id" class="form-control" required disabled id="exampleInputId" aria-describedby="idHelp" value="<?php echo $id ?>">
            </div>
        
            <div class="mb-3">
                <label for="exampleInputCodigo1" class="form-label">Código</label>
                <input type="number" min="1" name="codigo" class="form-control" required id="exampleInputCodigo" aria-describedby="codigoHelp" value="<?php echo $codigo ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputNome1" class="form-label">Nome do Produto</label>
                <input type="text" name="nome" class="form-control" required id="exampleInputNome" aria-describedby="nomeHelp" value="<?php echo $nome ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputQtde1" class="form-label">Quantidade</label>
                <input type="number" min="1" max="10" name="qtde" class="form-control" required id="exampleInputQtde1" value="<?php echo $qtde ?>">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Atualizar Produto</button>
        </form>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>