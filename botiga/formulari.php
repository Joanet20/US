<html>

<head>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="formulari.php" method="post">
                        <div class="form-group">
                            <label>Nom</label><BR>
                            <input type="text" name="nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Descripció</label><BR>
                            <input type="text" name="desc" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Preu</label><BR>
                            <input type="text" name="preu" class="form-control">
                        </div><BR>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
<?php
    include 'config-db.php';
    
    if(isset($_POST['submit'])){   
        $nom = $_POST['nom'];
        $preu = $_POST['preu'];
        $desc = $_POST['desc'];

        $sql = "INSERT INTO PRODUCTE (nomP,descripcioP,preuP)
        VALUES ('$nom','$desc','$preu')";
        
        if (mysqli_query($conn, $sql)) {
           echo "S'ha afegit correctament";
        } else {
           echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        mysqli_close($conn);
   }
    ?>
         
</body>



</html>