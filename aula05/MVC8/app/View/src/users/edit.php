<form method="POST" action="?r=users/update/<?= $user->getId() ?>">
	<input type="hidden" name="id" value="<?= $user->getId() ?>">
	<div class="form-group">
	<label>Name:</label>
	<input type="text" name="name" class="form-control form-control-sm" value="<?= $user->getName() ?>">	
	</div>
	<div class="form-group">
	<label>Email:</label>
	<input type="email" name="email" class="form-control form-control-sm" value="<?= $user->getEmail() ?>">
	</div>
	<div class="form-group" style="margin-top: 5px;">
		<a href="?r=users" class="btn btn-sm btn-warning">Go Back</a>
		<input type="submit" class="btn btn-sm btn-success" value="Save">
	</div>
</form>