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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/appico.png">
    <title>main page</title>
</head>
<body>
    <button id="homebtn">home</button>
    <button id="servicesbtn">service</button>
    <button id="aboutbtn">about</button>
    <button id="logout">logout</button>
    
    <div id="continut"></div>
    <script>
        
        document.getElementById("homebtn").onclick=function(){surfing("home")};
        document.getElementById("servicesbtn").onclick=function(){surfing("service")};
        document.getElementById("aboutbtn").onclick=function(){surfing("about")};
        document.getElementById("logout").onclick=function(){surfing("logout")};

        surfing("home");
        
        function surfing(route) {
            var xhr=new XMLHttpRequest();

            switch (route) {
                case "home":
                    xhr.open("GET","home.html",true);
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
                    xhr.open("GET","home.html",true);
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