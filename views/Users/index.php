<h2 align="center">Usuario</h2>
 <meta charset="utf-8">
    <link type="text/css" href="./css/style.css" rel="stylesheet" />
    <link rel='stylesheet' href='estilos.css'></head>

<div class="table-responsive">
<table class="table">
    <tr>
        <th>Username</th>
        <th>Rol</th>
        <th>Action</th>
    </tr>
<?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user["id"]; ?></td>
        <td><?php echo $user["username"]; ?></td>
        <td><?php echo $user["rol"]; ?></td>
        <td>
            <a href="<?php echo APP_URL; ?>users/edit/<?php echo $user['id']; ?>">Edit</a>
            <a href="<?php echo APP_URL; ?>users/delete/?id=<?php echo $user['id']; ?>">Delete</a>
           <!-- <a href="<?php echo APP_URL; ?>users/show/<?php echo $user['id']; ?>">Show</a>-->
        </td>
    </tr>
<?php endforeach; ?>
</table>
<a href="<?php echo APP_URL; ?>users/add" class="btn btn-default" role="button">Nuevo Usuario</a>