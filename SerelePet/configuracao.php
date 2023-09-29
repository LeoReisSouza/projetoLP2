<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "serelepet";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Conectado com sucesso";

$sql = "SELECT * FROM animal";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["nome"]. " " . 
    $row["descricao"]. "".$row["descricao"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?> 