<?php
//variaveis para serem utilizadas no código
$id = $_GET['id'];
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$qtde = $_POST['qtde'];

// Dados de conexão HEROKU
$servername = "qao3ibsa7hhgecbv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username   = "rxx8041xlh3ph4xo";
$password   = "e0ax6pldnazbmzq9";
$dbname     = "ryxllcn8snynvw1v";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE produtos SET codigo='$codigo', nome='$nome', qtde='$qtde' WHERE id=$id";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  // echo $stmt->rowCount() . " Usuário atualizado com sucesso!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

header('Location: ../vis_tab_produtos.php')
?>
