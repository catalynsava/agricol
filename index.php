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
    <a class="navbar-brand" href="#">AGRICOL</a>
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
            <li><a class="dropdown-item" href="#" id="lala">actualizare roluri</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" id="logout">iesire</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<table border="1">
  <tr>
    <td width="30%">
      <div class="container" id="continut">la la la</div>
    </td>
    <td width="70%">
    <div class="container" id="detalii">la la la</div>
    </td>
  </tr>
</table>


<script>
        //document.getElementById("dategen").onclick=function(){surfing("dategen","detalii")};
       // document.getElementById("roluri").onclick=function(){surfing("roluri", "continut")};
        //document.getElementById("logout").onclick=function(){surfing("logout","detalii")};
        //document.getElementById("rnd1").onclick=function(){surfing("adrrol","detalii")};
        
        //surfing("roluri");
        
        function surfing(metoda="get", myurl="roluri", where="continut") {
            var xhr=new XMLHttpRequest();
            

            switch (myurl) {
              case "dategen":
                xhr.open(metoda,"dategen.php",true);
                break;
              case "roluri":
                xhr.open(metoda,"roluri.php",true);
                break;
              case "rnd1":
                xhr.open(metoda,"adrrol.php",true);
                break;
              case "service":
                xhr.open(metoda,"service.html",true);
                break;
              case "about":
                xhr.open(metoda,"about.html",true);
                break;
              case "logout":
                xhr.open(metoda,"logout.php",true)
                break;
              default:
                xhr.open(metoda,"roluri.php",true);
                break;
            }
            alert(where);
            
            xhr.onreadystatechange = function(){
                console.log(xhr.status);
                if (xhr.status==200 ) {
                    document.getElementById(where).innerHTML=this.responseText;
                }
            }
            xhr.send();
        }

    </script>
    <?php
      if (isset($_GET['pagina'])) {
      if ($_GET['pagina']=="roluri") {
          $strtmp="<script>surfing('post', 'roluri', 'continut' );</script>";
          echo $strtmp;
      }
  }
?>
</body>
</html>