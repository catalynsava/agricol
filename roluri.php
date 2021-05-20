<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>roluri</title>
</head>
<body>
    <?php
        include "connect.php";

        $sql = "SELECT adrRol.idRol, adrRol.tip, adrRol.localitate, adrRol.vol, adrRol.poz, adrRol.nume, adrRol.prenume, adrRol.cnp, adrRol.rolIMP FROM adrRol;";
        $result = $cnn->query($sql);

        
        if ($result->num_rows > 0) {
            // output data of each row
            echo '<div class="list-group">';
            while($row = $result->fetch_assoc()) {
                //echo '<li class="list-group-item">', $row["idRol"], ' ', $row["nume"], ' ', $row["prenume"],'</li>';
                echo '<button type="button" class="list-group-item list-group-item-action">', $row["idRol"], ' ', $row["nume"], ' ', $row["prenume"],'</button>';
                //echo "idrol: " . $row["idRol"]. " - Name: " . $row["nume"]. " " . $row["prenume"]. "<br>";
            }
            echo '</div>';
        } else {
            echo "0 results";
        }
    ?>
</body>
</html>