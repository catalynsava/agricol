<?php
    session_start();
    if (!isset($_SESSION['username'])) {
      echo "<script>window.location='login.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/appico.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
   

    <title>registrul agricol</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?pagina=tmp">AGRICOL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            actualizare
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#" id="dategen">date generale</a></li>
            <li><a class="dropdown-item" href="index.php?pagina=roluri" id="roluri">actualizare roluri</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" id="logout">iesire</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<table border="1" width="100%">
  <tr>
    <td>
      <div class="container" id="myhead">header</div>
    </td>
    <td  colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>
    <div class="overflow-auto" id="mybody">body</div>
    </td>
    <td>
    <div class="container" id="detalii">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque harum perspiciatis ex soluta accusamus vitae aliquam optio unde hic neque, corrupti impedit sunt, voluptas cum quae rerum nam alias voluptatibus?</div>
    </td>
  </tr>
</table>

<script src="js/mine.js"></script>
<script>
  function detaliirol(idRol){
    //alert(idRol);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("detalii").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "rol.php?idrol=" + idRol, true);
    xhttp.send();
  }

  function gettmp(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("detalii").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "tmp.php", true);
    xhttp.send();
  }

  function homeclick(){
    document.getElementById("spune").innerHTML="<b>bla bla bla</b>";
    alert("home click");
  }

  function getroluri() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("myhead").innerHTML = this.responseText;
       }
    };
    xhttp.open("GET", "roluri.php", true);
    xhttp.send();
  }
  
  function filtruroluri() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("mybody").innerHTML= this.responseText;
            }
        };
        xhttp.open("POST", "roluriscript.php?pagina=1", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        var str="";
        xhttp.send("tipCaut=" + tipCaut.value + "&volCaut=" + volCaut.value + "&localitateCaut=" + localitateCaut.value);
  }

  
</script>

    <?php
      $pagina="";
      if (isset($_GET['pagina'])) {
        $pagina=$_GET['pagina'];
      }
      

      switch ($pagina) {
        case 'roluri':
          echo "<script>getroluri();</script>";
          break;
        case 'tmp':
          echo "<script>gettmp();</script>";
          break;
        default:
          # code...
          break;
      }
    ?>
</body>
</html>