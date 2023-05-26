<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
<nav class="navbar navbar-default">
	Home
</nav>
<div class="col-md-3"></div>
<div class="col-md-6 well">
	<h3 class="text-primary">PHP CRUD Functions Using PDO</h3>
	<hr style="border-top:1px dotted #ccc;" />
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add user</button>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Username</th>
					<th>Password</th>
					<th>User type</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'connection.php';
					$query = $conn->prepare("SELECT * FROM `users` ORDER BY `userid` DESC");
					$query->execute();
					while($fetch = $query->fetch()){
				?>
					<tr>
						<td><?php echo $fetch['username']?></td>
						<td><?php echo $fetch['password']?></td>
						<td><?php echo $fetch['usertype']?></td>
					</tr>	
				<?php
					}
				?>
			</tbody>
		</table>
	</div>	
</div>
<div class="modal fade" id="form_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="insert.php">
				<div class="modal-header">
					<h3 class="modal-title">Add User</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Username</label>
							<input class="form-control" type="text" name="username"/>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" type="text" name="password"/>
						</div>
						<div class="form-group">
							<label>User type</label>
							<input class="form-control" type="text" name="usertype"/>
						</div>
					</div>	
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					<button class="btn btn-primary" name="insert"><span class="glyphicon glyphicon-save"></span> Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<a href="logout.php">logout</a>

<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
</body>
</html>