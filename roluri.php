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
    <table class="table table-hover">
    <tr>
            <form action="index.php?pagina=roluri" method="POST">
            <td><input type="text" name="tipCaut" \></td>
            <td><input type="text" name="volCaut" \></td>
            <td><input type="text" name="localitateCaut" \></td>
            <td><input type="text" name="pozCaut" \></td>
            <td><input type="text" name="numeCaut" \></td>
            <td><input type="text" name="prenumeCaut" \></td>
            <td><input type="text" name="cnpCaut" \></td>
            <td><input type="text" name="rolImpCaut" \></td>
            <td><input type="text" name="idRolCaut" \></td>
            <td><input type="submit" value="cauta" \></td>
            </form>
        </tr>
    </table>
    <table class="table table-hover">
    <?php
        include "connect.php";
        $enumSQL = "SELECT adrRol.idRol, adrRol.tip, adrRol.localitate, adrRol.vol, adrRol.poz, adrRol.nume, adrRol.prenume, adrRol.cnp, adrRol.rolIMP FROM adrRol";
        
        
        if (isset($_GET['pagina'])) {
            $pagina=$_GET['pagina'];
        }else{
            $pagina=1;
        }
        $limitSQL= "LIMIT " . ((15*$pagina)-15) . "," . 15;

        $whereSQL="";
        $anterior=false;
        if (isset($_POST['tipCaut'])  && $_POST['tipCaut'] != "") {
            $whereSQL="WHERE tip=" . $_POST['tipCaut'];
            $anterior=true;
        }

        if (isset($_POST['volCaut'])  && $_POST['volCaut'] != "") {
           if ($anterior && $_POST['volCaut'] != "") {
            $whereSQL .= " AND vol=" . $_POST['volCaut'];
           }else{
            $whereSQL="WHERE tip=" . $_POST['volCaut'];
           }
           $anterior=true;
        }

        if (isset($_POST['localitateCaut']) && $_POST['localitateCaut'] != "") {
            if ($anterior ) {
             $whereSQL .= " AND localitate='" . $_POST['localitateCaut'] . "'";
            }else{
             $whereSQL="WHERE localitate='" . $_POST['localitateCaut'] . "'";
            }
            $anterior=true;
         }

         if (isset($_POST['pozCaut']) && $_POST['pozCaut'] != "") {
            if ($anterior ) {
             $whereSQL .= " AND poz='" . $_POST['pozCaut'] . "'";
            }else{
             $whereSQL="WHERE poz='" . $_POST['pozCaut'] . "'";
            }
            $anterior=true;
         }
         $anterior=false;

        $sql = $enumSQL . " " . $whereSQL . " " . $limitSQL;
        echo $sql;
      
        $result = $cnn->query($sql);
        $rnd=0;

        
        if ($result->num_rows > 0) {
            // output data of each row
            
            while($row = $result->fetch_assoc()) {
                echo '<tr id="rnd' . $rnd . '"><td>' . $row["tip"]. '</td><td>' . $row["vol"]. '</td><td>' . $row["localitate"] . '</td><td>' . $row["poz"] . '</td><td>' . $row["nume"] . '</td><td>' . $row["prenume"] . '</td><td>' . $row["cnp"] . '</td><td>' . $row["rolIMP"] . '</td><td>' . $row["idRol"] . '</td></tr>';
                $rnd++;
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    ?>
    <nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="roluri.php?pagina=1">1</a></li>
        <li class="page-item"><a class="page-link" href="roluri.php?pagina=2">2</a></li>
        <li class="page-item"><a class="page-link" href="roluri.php?pagina=3">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
    </nav>
   
    
</body>
</html>