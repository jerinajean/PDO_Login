<?php
	require_once 'connection.php';
 
	if(ISSET($_POST['insert'])){
		try{
			$username = $_POST['username'];
			$usertype = $_POST['usertype'];
			$password = $_POST['password'];
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `users` (`username`, `password`, `usertype`) VALUES ('$username', '$password', '$usertype')";
			$conn->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
 
		$conn = null;
 
		echo "<script>alert('Successfully inserted data!')</script>";
		echo "<script>window.location='index.php'</script>";
	}
?>