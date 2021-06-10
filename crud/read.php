<?php
//PAGINA DE CADASTRO DE USUÁRIOS

// Dados de conexão HEROKU
$servername = "qao3ibsa7hhgecbv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com	";
$username   = "rxx8041xlh3ph4xo";
$password   = "	e0ax6pldnazbmzq9";
$dbname     = "ryxllcn8snynvw1v";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM produtos");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $k=>$v) {
    echo '<tr>';
    echo '<td>'.$v['id'].'</td>';
    echo '<td>'.$v['codigo'].'</td>';
    echo '<td>'.$v['nome'].'</td>';
    echo '<td>'.$v['qtde'].'</td>';
    echo 
    '<td> 


      <a class="btn btn-outline-danger" href="crud/delete.php?id='. $v['id']. '" >   <i class="far fa-trash-alt"></i>    </a> 




      <a class="btn btn-outline-primary" href="edt_user.php?id='. $v['id']. '" >   <i class="far fa-edit"></i>        </a>   
    </td>';
    echo '</tr>';
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>