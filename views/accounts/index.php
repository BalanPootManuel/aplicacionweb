<!--<h2 align="center">Listado de cuentas</h2>
<br>-->



<h2 align="center">Cuentas</h2>
<div class="table-responsive">
<table class="table">
	<tr>
		<th>Id</th>
		<th>User_id</th>	
		<th>Name</th>
		<th>Action</th>
	</tr>
<?php foreach ($accounts as $account ): ?>
    <tr>
		<td><?php echo $account['id']; ?></td>
		<td><?php echo $account['user_id']; ?></td>	
		<td><?php echo $account['name']; ?></td>
		<td>
		   <a href="<?php echo APP_URL; ?>accounts/edit/<?php echo $account["id"]; ?>">Edit</a>
		    <a href="<?php echo APP_URL; ?>accounts/delete/<?php echo $account['id']; ?>">Delete</a>
		    </td></tr>
			
		
<?php endforeach; ?>

</table>
</div>
<a href="<?php echo APP_URL; ?>accounts/add" class="btn btn-default" role="button">Nueva Cuenta</a>