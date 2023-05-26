<?php
session_start();
if(!empty($_SESSION['username'])) {
	$user = $_POST['username'];
	header('location:index.php');
}
require 'connection.php';


if(isset($_POST['login'])) {

	$user = $_POST['username'];
	$pass = $_POST['password'];

	if(empty($user) || empty($pass)) {
		$message = 'All field are required';
	} else {
		$sql = "SELECT username, password, userid, usertype FROM users WHERE (username =:username AND password=:password) ";
	    $sth = $conn -> prepare($sql);
	    $sth -> bindValue(':username', $user, PDO::PARAM_STR);
		$sth -> bindValue(':password', $pass, PDO::PARAM_STR);
	    $sth -> execute();
		$count = $sth->rowCount();
	    $row = $sth->fetch(PDO::FETCH_ASSOC);
		
		//if($sth->rowCount() > 0) {
		if ($count == 1 && !empty($row)){
		  $_SESSION['login']=true;
		  $_SESSION ['username']=$user;
		  $_SESSION ['password']=$pass;
	      $_SESSION['login'] =$row['username'];

			switch ($row['usertype']){
					case "3": header("location:home-admin.php"); break;
					case "0": header("location:index.php"); break;
			}

		} else {
		  $message = "Username/Password is wrong";
		}

	}
}
?>