<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'config-db.php';

$productes = array(
    array(0, 0),
    array(6, 0),
    array(3, 0),
    array(2, 0),
    array(5, 0),
    array(9, 0),
    array(7, 0),
);

$total = 0;

$sql = "SELECT codiP, nomP, descripcioP, preuP FROM PRODUCTE";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo "<table>";
echo "<tr> <td>" . "<img src='imatges/" . $row["codiP"] . ".jpg' width=400px height=400px >" . "</td> <td>ID: " . $row["codiP"] . "<br>Nom: " . $row["nomP"] . "<br>Descripció: " . $row["descripcioP"] . "<br>Preu: " . $row["preuP"] . "€<br>" . "<button>AFEGIR <br>" . $row["nomP"] . "</button> <button>ELIMINAR <br>" . $row["nomP"] . "</button><br> Quantitat: " . $productes[$row["codiP"]][0] . "<br> Preu conjunt: " . $productes[$row["codiP"]][0]*$row["preuP"] . "€</td> </tr>";
echo "</table>";

$productes[$row["codiP"]][1] = $productes[$row["codiP"]][0]*$row["preuP"];

$total += $productes[$row["codiP"]][1];
  }
} else {
  echo "0 results";
}
$conn->close();


echo "<center><h1>TOTAL: " . $total . "€</h1></center>";
?>
