<h2 align="center">Categorias</h2>

 <meta charset="utf-8">
    <link type="text/css" href="./css/style.css" rel="stylesheet" />
    <link rel='stylesheet' href='estilos.css'></head>

<div class="table-responsive">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Action</th>	
		
	</tr>
	<table class="table">
<?php foreach ($categories as $category ): ?>
    <tr>
		<td><?php echo $category['id']; ?></td>
		<td><?php echo $category['name']; ?></td>
		<td>
		   <a href="<?php echo APP_URL; ?>categories/edit/<?php echo $category["id"]; ?>">Edit</a>
		    <a href="<?php echo APP_URL; ?>categories/delete/?id=<?php echo $category['id']; ?>">Delete</a>
		
<?php endforeach; ?>

</table>


<a class="btn btn-default" href="<?php echo APP_URL; ?>categories/add">Añadir</a>

