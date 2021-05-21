<?php
    // Start the session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/mine.js"></script>


    <title>roluri</title>
</head>
<body>
   
    
    <?php
        include_once "connect.php";

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

        
         if ($whereSQL != "") {
            $sql = $enumSQL . " " . $whereSQL;
         }
        
        echo $sql;
        
        if ($sql != "") {
            $_SESSION["sql"] = $sql;
        }
      
        $result = $cnn->query($_SESSION["sql"] . " " . $limitSQL);
        $rows=$result->fetch_all(MYSQLI_ASSOC);

        $rnd=0;
        echo "<table class='table table-hover'>";
        foreach ($rows as $row ) {
            echo '<tr id="rnd' . $rnd . '"><td>' . $row["tip"]. '</td><td>' . $row["vol"]. '</td><td>' . $row["localitate"] . '</td><td>' . $row["poz"] . '</td><td>' . $row["nume"] . '</td><td>' . $row["prenume"] . '</td><td>' . $row["cnp"] . '</td><td>' . $row["rolIMP"] . '</td><td>' . $row["idRol"] . '</td></tr>';
            $rnd++;
        }
        echo "</table>";


    ?>

   
   

    <nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="" id="prev">Previous</a></li>
        <li class="page-item"><a class="page-link" href="">1</a></li>
        <li class="page-item"><a class="page-link" href="">2</a></li>
        <li class="page-item"><a class="page-link" href="">3</a></li>
        <li class="page-item"><a class="page-link" href="" id="next">Next</a></li>
    </ul>
    </nav>
</body>
</html>