<!DOCTYPE html>


<html> 
	<head> 

 
<div class="row">

    <meta charset="utf-8">
    <link type="text/css" href="./css/style.css" rel="stylesheet" />
</head>
 
 <body class="bs-docs-home">
    
  </body>
<body>

		<title>Money</title>


<head>

<h2>Inicio de sesión</h2>

  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<link rel='stylesheet' href='estilos.css'></head>

<div class="table-responsive">
<table class="table">

           


<form action="<?php echo APP_URL; ?>users/login" method="post">
    <div class="form-group">
        <label for="username">Username: </label>

	 <input class="form-control" type="text" name="username" placeholder="Ingresa Usuario" autofocus="" required="">
    </div>
    <div class="form-group">
        <label for="password" > Password: </label>
        <input class="form-control" type="password" name="password" placeholder="Ingresa Contraseña" autofocus="" required="">
    </div>
    <input type="submit" value="Acceder" class="btn btn-default">
</table>
</div>

</form>
