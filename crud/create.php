<?php
//variaveis da página de cadastro
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$qtde = $_POST['qtde'];

//PAGINA DE CADASTRO DE USUÁRIOS

// Dados de conexão HEROKU
$servername = "qao3ibsa7hhgecbv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com	";
$username   = "rxx8041xlh3ph4xo";
$password   = "	e0ax6pldnazbmzq9";
$dbname     = "ryxllcn8snynvw1v";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO produtos (codigo, nome, qtde)
  VALUES ('$codigo', '$nome', '$qtde')";
  // use exec() because no results are returned
  $conn->exec($sql);
  //echo "Usuário cadastrado com sucesso!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>