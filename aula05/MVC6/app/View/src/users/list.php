<h1>List Of Users</h1>

<table class="table">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
	</tr>
	<?php foreach ($users as $user) :?>
		<tr>
			<td><?= $user->getId() ?></td>
			<td><?= $user->getName() ?></td>
			<td><?= $user->getEmail() ?></td>
		</tr>
	<?php endforeach;?>
</table>