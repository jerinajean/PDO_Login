<!DOCTYPE html>
<html>
<head>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
	<title>Login</title>
</head>
<body>
<nav class="navbar navbar-default">
	Home
</nav>
<div class="col-md-4"></div>
<div class="col-md-3 well">
	<form method="post" action="login-initialize.php">
		<div class="form-group">
			<label class="col-sm-2 control-label">Username</label>
			<input class="form-control" type="text" name="username" placeholder="enter username">
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Password</label>
			<input class="form-control" type="text" name="password" placeholder="enter password">
		</div>
		<div class="form-group">
			<input type="submit" name="login" class="btn btn-success" value="login">
		</div>
	</form>
</div>
</body>
</html>
