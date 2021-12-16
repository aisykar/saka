<?
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form class="box" method="post">
		
		<h1>Login</h1>
		<input type="text" name="username" placeholder="Username">
		<input type="password" name="password" placeholder="password">
		<input type="submit" name="login" value="Login">
	</form>
	<?php
	include "koneksi.php";

	//echo "<pre>"; print_r($_POST); echo "</pre>";
	if(isset($_POST['login'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$sql= "SELECT * FROM user WHERE username = '".$user."' AND password = '".$pass."'";
		//echo $sql."<br>";
		$query = mysqli_query($conn,$sql);
		
		$r = mysqli_fetch_assoc($query);
		

	//echo "<pre>"; print_r($r); echo "</pre>";
	
		$username = $r['username'];
		$password = $r['password'];
		$level = $r['level'];
		if($user == $username && $pass == $password){
			$_SESSION['level'] = $level;
			header('location: pageone.php');
		}
		else{
			echo("gagal");
		}
		
	}
	?>


</body>
</html>
