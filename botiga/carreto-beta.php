<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'config-db.php';


$productes = array (
      array(" ", 0, 0, 0),
      array("", 0, 5, 0),
      array("", 0, 4, 0),
      array("", 0, 6, 0),
      array("", 0, 4, 0),
      array("", 0, 10, 0),
      array("", 0, 5, 0),
  );

//Começa taula
echo "<table>";
    echo "<tr>";
    echo "<th>Producte</th>";
    echo "<th>Quantitat</th>";
    echo "<th>Preu unitari</th>";
    echo "<th>Preu total</th>";
    echo "</tr>";


$sql = "SELECT codiP, nomP, descripcioP, preuP FROM PRODUCTE";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $productes[$row["codiP"]][0] = $row["nomP"];
    $productes[$row["codiP"]][1] = $row["preuP"];
    $productes[$row["codiP"]][3] = $row["preuP"]*$productes[$row["codiP"]][2];
  
    
    echo "<tr> <td>" . $productes[$row["codiP"]][0] . "</td> <td>" . $productes[$row["codiP"]][2] . "</td> <td>" . $productes[$row["codiP"]][1] . "</td> <td>" . $productes[$row["codiP"]][3] . " </td> </tr>";
    
  }
} else {
  echo "0 results";
}
$conn->close();

echo "<tr> <th colspan=4>Total: " . $total . "€</th> </tr>"; 
    echo "</table>";

/*echo "<table>";
echo "<tr>";
echo "<th>Producte</th>";
echo "<th>Quantitat</th>";
echo "<th>Preu unitari</th>";
echo "<th>Preu total</th>";
echo "</tr>";*/
/*echo "<tr> <td>" . $productes[0][0] . "</td> <td>" . $productes[0][2] . "</td> <td>" . $productes[0][1] . "</td> <td>" . $total1. " </td> </tr>";*/
/*echo "<tr> <td>" . $productes[1][0] . "</td> <td>" . $productes[1][2] . "</td> <td>" . $productes[1][1] . "</td> <td>" . $productes[1][3] . " </td> </tr>";
echo "<tr> <td>" . $productes[2][0] . "</td> <td>" . $productes[2][2] . "</td> <td>" . $productes[2][1] . "</td> <td>" . $total3 . " </td> </tr>";
echo "<tr> <td>" . $productes[3][0] . "</td> <td>" . $productes[3][2] . "</td> <td>" . $productes[3][1] . "</td> <td>" . $total4 . " </td> </tr>";
echo "<tr> <td>" . $productes[4][0] . "</td> <td>" . $productes[4][2] . "</td> <td>" . $productes[4][1] . "</td> <td>" . $total5 . " </td> </tr>";
echo "<tr> <td>" . $productes[5][0] . "</td> <td>" . $productes[5][2] . "</td> <td>" . $productes[5][1] . "</td> <td>" . $total4 . " </td> </tr>";
echo "<tr> <td>" . $productes[6][0] . "</td> <td>" . $productes[6][2] . "</td> <td>" . $productes[6][1] . "</td> <td>" . $total5 . " </td> </tr>";
echo "<tr> <th colspan=4>Total: " . $total . "</th> </tr>"; 
echo "</table>";*/

?>
