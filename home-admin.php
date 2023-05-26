<?php
include "connection.php";
session_start();
	if(!ISSET($_SESSION['userid'])){
		//header('location:home-admin.php');
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin page</title>
</head>
<body>
<h1>Welcome,</h1>
<?php
	$query = $conn->prepare("SELECT * FROM `users` WHERE `userid` =$_SESSION[userid]");
	$query->execute();
	while($fetch = $query->fetch()){
		
?>	
	<h2 class='text-success'><?php $fetch['username']; ?></h2>
	<?php } ?>
<a href="logout.php">logout</a>
</body>
</html>
<?php } ?>