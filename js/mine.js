function getroluri() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("continut").innerHTML = this.responseText;
       }
    };
    xhttp.open("GET", "roluri.php", true);
    xhttp.send();
}

function postroluri() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("continut").innerHTML = this.responseText;
      }
    };
    xhttp.open("POST", "roluri.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("tipCaut=1&volCaut=2&localitateCaut=PASCANI");
  }

  

 