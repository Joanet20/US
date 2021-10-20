<?php
 

 include 'config-db.php';

$sql = "SELECT codiP, nomP, descripcioP, preuP FROM PRODUCTE";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo "<table>";


echo "<tr> <td>" . "<img src='imatges/" . $row["codiP"] . ".jpg' width=400px height=400px >" . "</td> <td>ID: " . $row["codiP"] . "<br>Nom: " . $row["nomP"] . "<br>Descripció: " . $row["descripcioP"] . "<br>Preu: " . $row["preuP"] . "€<br>" . "<a href='fitxa.php?codi=". $row["codiP"]. "'><button>FITXA <br>" . $row["nomP"] . "</button></a> </td> </tr>";
echo "</table>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
