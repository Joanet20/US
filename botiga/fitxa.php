<?php

include 'config-db.php';

$codiT = rand(1, 6);

$codiX = $_GET['codi'];

$sql = "SELECT codiP, nomP, descripcioP, preuP FROM PRODUCTE WHERE codiP=$codiX";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {


echo "<center> <h1>" . $row["nomP"] . "</h1> </center>";

echo "<a href='llista.php'><button>TORNAR</button></a>";

echo "<p style=font-size:30px;>" . $row["preuP"] . "€" . "</p>";
echo "<p style=font-size:30px;>" . $row["descripcioP"] . "</p>";
echo "<img src='imatges/" . $row["codiP"] . ".jpg' width=400px height=400px >";
  }
} else {
  echo "0 results";
}
$conn->close();

?>
