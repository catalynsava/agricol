<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <textarea name="txt" id="txt" cols="100" rows="5"></textarea>
    <div id="htmlv"></div>
    <input type="button" value="view" id="btn">

    <script>
        function getdate() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txt").value = this.responseText;
                    document.getElementById("htmlv").innerHTML=this.responseText;
            }
            };
            xhttp.open("GET", "tmp.php", true);
            xhttp.send();
        }
        document.getElementById("btn").onclick=function(){
            //alert("la la la");
            getdate();
        };
        /*window.homeclick = function(){
            document.getElementById("spune").innerHTML="<b>bla bla bla</b>";
        };*/
        document.body.appendChild(document.createElement('script')).src = 'tmp.js';
        
    </script>
</body>
</html>