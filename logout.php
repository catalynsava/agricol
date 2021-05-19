<?php include "connect.php"; ?>
<?php
session_start();
unset($_SESSION["username"]);



echo "<script>window.location='login.php'</script>";

$cnn->close();
$cnn=null;
?>