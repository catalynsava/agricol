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
    <title>roluri registrul agricol</title>
</head>
<body>
<form>
<table class="table" border="1">
    <tr>
        <td><input type="text" id="tipCaut" size="5" \></td>
    
        <td><input type="text" id="volCaut" size="5" \></td>
    
        <td><input type="text" id="localitateCaut" size="15" \></td>
    
        <td><input type="text" id="pozCaut" size="5" \></td>
    
        <td><input type="text" id="numeCaut" size="15" \></td>
    
        <td><input type="text" id="prenumeCaut" size="15" \></td>
    
        <td><input type="text" id="cnpCaut" size="13" \></td>
    
        <td><input type="text" id="rolImpCaut" size="5" \></td>
    
        <td><input type="text" id="idRolCaut" size="5" \></td>
    
        <td><input type="button" value="cauta" id="btn" onclick="roluri()" \></td>
    </tr>
</table>
</form>
<div id="roluri"></div>
<script>
    document.getElementById("btn").onclick=function(){
        document.getElementById("roluri").innerHTML=roluri();
    }
    alert(btn.value);
    function roluri() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("roluri").innerHTML= this.responseText;
        }
        };
        xhttp.open("POST", "roluriscript.php?pagina=1", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        var str="";
        xhttp.send("tipCaut=" + tipCaut.value + "&volCaut=" + volCaut.value + "&localitateCaut=" + localitateCaut.value);
 
    }
</script>
</body>
</html>