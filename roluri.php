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
    <title>roluri registrul agricol</title>
</head>
<body>
<form>
<table class="table table-sm" border="1">
    <tr>
        <td><input type="text" id="tipCaut" size="2" \></td>
    
        <td><input type="text" id="volCaut" size="2" \></td>
    
        <td><input type="text" id="localitateCaut" size="8" \></td>
    
        <td><input type="text" id="pozCaut" size="2" \></td>
    
        <td><input type="text" id="numeCaut" size="8" \></td>
    
        <td><input type="text" id="prenumeCaut" size="8" \></td>
    
        <td><input type="text" id="cnpCaut" size="5" \></td>
    
        <td><input type="text" id="rolImpCaut" size="2" \></td>
    
        <td><input type="button" value="cauta" id="btn" onclick="filtruroluri()" \></td>
    </tr>
</table>
</form>

<div id="roluri"></div>
<script>
    
    
    
</script>
</body>
</html>