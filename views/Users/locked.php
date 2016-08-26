<h2>Protected entry</h2>
<link rel='stylesheet' href='estilos.css'></head>

<p>The user #<?php echo $user["id"]; ?> (<?php echo $user["username"]; ?>) cannot be deleted because other objects need it.</p>
<a href="<?php echo APP_URL; ?>users" class="btn btn-default">Return</a>