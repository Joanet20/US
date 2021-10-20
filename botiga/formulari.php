<?php

include 'config-db.php';

$sql = "INSERT INTO PRODUCTE (nomP, preuP, descripcioP)
VALUES ('Poma', 40, 'Brillants com ses perles')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
