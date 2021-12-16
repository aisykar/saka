<?php
include "config.php";

echo "<pre>"; print_r($_POST); echo "</pre>";


  if($_POST['login']=='Login') {

 	$sql = "SELECT * from users where username='".$_POST['username']."' and password='".md5($_POST['password'])."'";

 	echo $sql."<br>";
 	$res = mysqli_query($link,$sql);
 	$numrows = mysqli_num_rows($res);
 	$row = mysqli_fetch_assoc($res);

 	//echo $numrows."<br>";

 	if($numrows==1) {
 		session_start();
 		$_SESSION['user']['id']=$row['id'];
 		$_SESSION['user']['email']=$row['username'];
 		$_SESSION['user']['tgl_lahir']=$row['tgl_lahir'];
 		$_SESSION['user']['created_at']=$row['created_at'];

		//echo "<pre>"; print_r($row); echo "</pre>";

		header("location: pageone.php");


 	} else {

 		//echo "username dan password belum ada di database";

 		header("location: index.php");
 	}


 }


?>