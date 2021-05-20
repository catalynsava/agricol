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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <title>registrul agricol</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">AGRICOL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          actualizare
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">date generale</a>
          <a class="dropdown-item" href="" id="roluri">actualizare roluri</a>
          <a class="dropdown-item" href="#">configurare strazi</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">iesire</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          informari
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">rapoarte pozitie</a>
          <a class="dropdown-item" href="#">rapoarte centralizatoare roluri</a>
          <a class="dropdown-item" href="#">adeverinte</a>
          <a class="dropdown-item" href="#">desfasuratoare</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          cautare
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">cautare dupa pozitie</a>
          <a class="dropdown-item" href="#">rapoarte dupa capitol 1</a>
          <a class="dropdown-item" href="#">cautarea avansata</a>
        </div>
      </li>
    </ul>
    </ul>
  </div>
</nav>
<div class="container" id="continut">la la la</div>

<script>
        
        document.getElementById("roluri").onclick=function(){surfing("roluri")};
        // document.getElementById("servicesbtn").onclick=function(){surfing("service")};
        // document.getElementById("aboutbtn").onclick=function(){surfing("about")};
        // document.getElementById("logout").onclick=function(){surfing("logout")};

        surfing("home");
        
        function surfing(route) {
            var xhr=new XMLHttpRequest();

            switch (route) {
                case "roluri":
                    xhr.open("GET","roluri.php",true);
                    break;
                case "service":
                    xhr.open("GET","service.html",true);
                    break;
                case "about":
                    xhr.open("GET","about.html",true);
                    break;
                case "logout":
                    xhr.open("GET","logout.php",true)
                    break;
                default:
                    xhr.open("GET","roluri.php",true);
                    break;
            }

            
            xhr.onreadystatechange = function(){
                console.log(xhr.status);
                if (xhr.status==200 ) {
                    document.getElementById("continut").innerHTML=this.responseText;
                }
            }
            xhr.send();
        }

       


    </script>
</body>
</html>