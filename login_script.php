<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.6.0.js"></script>
	<title>login result</title>
</head>
<body>
	<?php include "connect.php"; ?>
	<?php include "functii.php"; ?>
	<?php
	$username = stripcslashes($_POST['username']);
	$password = stripcslashes($_POST['password']);

	$sql= "SELECT * FROM utilizatori WHERE utilizatori.username='$username' AND utilizatori.password='$password'";
	$result = $cnn->query($sql);

	if ($result->num_rows > 0) {
		//$row = $result->fetch_assoc();
		session_start();
		$_SESSION['timeout'] = time();
		$_SESSION['username'] = $username;

		echo "<div class='alert alert-success alert-dismissible fade show col-sm-10' onclick=\"window.location.href='index.php'\">";
		echo "<strong>Success!</strong><small> " . "You have entered " . $_SESSION['username'] . "</small> <a href='index.php'>continue</a>";
		echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		echo '</div>';
		echo "<script>window.location='index.php'</script>";
	}else{
		echo "<div class='alert alert-danger alert-dismissible fade show col-sm-10' onclick=\"window.location.href='login.html'\">";
		echo "<strong>Wrong!</strong><small> " . "username and/or password incorrect.." . "</small> <a href='index.php'>continue</a>";
		echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		echo '</div>';
		echo "<script>window.location='login.php'</script>";
	}
	?>
</body>
</html>