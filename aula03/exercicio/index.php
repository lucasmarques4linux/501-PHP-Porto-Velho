<?php 
	
	$dbs = ['postgres' => 'PostgreSQL','mysql'=> 'MySQL'];

 ?>
<html>
<head>
	<title>Exercicio PDO</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<div style="margin: 25px 100px 25px 100px">
 <form>
 <div class="form-group">
 	<label>Select Database</label>
	<select name="base" class="form-control form-control-sm">
	<?php foreach ($dbs as $key => $value): ?>

		<?php $selected = ($key == $db) ? 'selected' : null; ?>

		<option value="<?= $key ?>" <?=$selected ?>><?= $value ?></option>
	<?php endforeach; ?>
	</select>
	<div class="form-group" style="margin-top: 5px;">
		<input type="submit" value="Select" class="btn btn-sm btn-primary">
	</div>
	</div>
</form>

<div class="row">
<div class="col">
<form method="POST" action="">
	<input type="hidden" name="id" value="">
	<div class="form-group">
	<label>Name:</label>
	<input type="text" name="name" class="form-control form-control-sm" value="">	
	</div>
	<div class="form-group">
	<label>Email:</label>
	<input type="email" name="email" class="form-control form-control-sm" value="">
	</div>
	<div class="form-group" style="margin-top: 5px;">
		<input type="submit" class="btn btn-sm btn-success" value="Save">
	</div>
</form>
</div>
<div class="col">
<table class="table">
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Email</th>
		<th>Actions</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Fernando</td>
		<td>fernando@gmail.com</td>
		<td>
		<a class="btn btn-sm btn-info" href=""> Edit</a>
		<form method="POST" action="#">
			<input type="hidden" name="id" value="">
			<input type="hidden" name="del" value="del">
			<input type="submit" class="btn btn-sm btn-danger" value="Delete">
		</form>
		</td>
	</tr>
</table>
</div>
</div>
</div>
</body>
</html>