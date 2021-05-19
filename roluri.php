<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <title>roluri</title>
</head>
<body>
    <?php
        include "connect.php";

        $sql = "SELECT adrRol.idRol, adrRol.tip, adrRol.localitate, adrRol.vol, adrRol.poz, adrRol.nume, adrRol.prenume, adrRol.cnp, adrRol.rolIMP FROM adrRol;";
        $result = $cnn->query($sql);

        
        if ($result->num_rows > 0) {
            // output data of each row
            echo '<ul class="list-group list-group-flush">';
            while($row = $result->fetch_assoc()) {
                echo '<li class="list-group-item">', $row["idRol"], ' ', $row["nume"], ' ', $row["prenume"],'</li>';
                //echo "idrol: " . $row["idRol"]. " - Name: " . $row["nume"]. " " . $row["prenume"]. "<br>";
            }
            echo '</ul>';
        } else {
            echo "0 results";
        }
    ?>
</body>
</html>