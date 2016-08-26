
<!DOCTYPE html>
<html lang="es-ES">
<head>


<meta charset="UTF-8"> <!--Valores comunes para codificación de caracter:
                UTF-8 - para Unicode
                ISO-8859-1 - para alfabeto Latino -->    <meta name="description" content="Curso HTML5">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Rodolfo Vera">
    
    <title>Menu Principal</title>
    <link rel="stylesheet" type="text/css" href="reset.css">

<html>
  <head>
    <style type="text/css">
      * {
        margin:0px;
        padding:0px;
      }
      
      #header {
        margin:auto;
        width:500px;
        font-family:Arial, Helvetica, sans-serif;
      }
      
      ul, ol {
        list-style:none;
      }
      
      .nav {
        width:500px; /*Le establecemos un ancho*/
        margin:0 auto; /*Centramos automaticamente*/
      }
       .nav > li {
        float:left;
      }
      
      .nav li a {
        background-color:#000;
        color:#fff;
        text-decoration:none;
        padding:10px 12px;
        display:block;
      }
      
      .nav li a:hover {
        background-color:#434343;
      }
      
      .nav li ul {
        display:none;
        position:absolute;
        min-width:140px;
      }
      
      .nav li:hover > ul {
        display:block;
      }
      
      .nav li ul li {
        position:relative;
      }
      
      .nav li ul li ul {
        right:-140px;
        top:0px;
      }

      header {
  width:90%;
  max-width:1000px;
  margin:auto;
}
 
nav {
  background:#528fd5;
  margin-top:20px;
  position: relative;
}
 
nav ul {
  list-style:none;
  padding:0;
  margin:0;
  overflow:hidden;
}
 
nav > ul > li {
  float:left;
}
 /*
nav ul li a {
  text-decoration:none;
  color:#fff;
  display:block;
  padding:10px 20px;
}
 */
nav ul li a:hover {
  background:#3669a3;
}
 /*
nav > ul > li:hover div {
  display:table;
}*/
 
/*Submenu*/
nav ul li div {
  width:1000px;
  position: absolute;
  left:0;
  background:#ccc;
  box-sizing:border-box;
  display:none;
}
 /*
nav ul li div ul{
  width:20%;
  display:table-cell;
  border-right:1px solid rgba(255,255,255,.5);
  box-sizing:border-box;
}*/
 /*
nav ul li div ul:last-child {
  border:none;
}*/
 /*
nav ul li div ul .titulo {
  background:#000;
  color:#fff;
}
 */
nav ul li div ul .titulo a {
  color:#fff;
  padding:20px 40px;
}
 
.titulo.azul {background:#3498db;}
/*.titulo.verde{background:#27ae60;}
.titulo.naranja {background:#e67e22;}
.titulo.rojo {background:#c0392b; color:#000;}
 
nav ul li div ul .titulo a:hover {
  background:none;
}
 
nav ul li div ul li a {
  color:#000;
}
 
nav ul li div ul li a:hover {
  color:#fff;
}
      */
    </style>

    <meta charset="UTF-8">
    <title>Sistema de Gestión</title>
    <link rel="stylesheet" href="<?php echo APP_URL; ?>views/layouts/default/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>views/layouts/default/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>views/layouts/default/css/style.css">
    <link rel="stylesheet" href="<?php echo APP_URL_CSS?>estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="<?php echo APP_URL; ?>views/layouts/default/js/jquery-3.1.0.min.js"></script>
    <script src="<?php echo APP_URL; ?>views/layouts/default/js/bootstrap.min.js"></script>
</head>
 </button>

                
<body>

<!-- menu -->
<div>Menú</div>
<div id="navcontainer">
<ul id="navlist">
<div class=".container">

 <div class="btn-group" role="group" aria-label="...">
<li><a href="<?php echo APP_URL; ?>users"><h3>Usuarios</h3></a></li>
  
  <li><a href="<?php echo APP_URL; ?>categories"><h3>Categorias</h3></a></li>
  <li><a href="<?php echo APP_URL; ?>accounts"><h3>Cuentas</h3></a></li>
  <li><a href="<?php echo APP_URL; ?>transactions"><h3>transacciones</h3></a></li>
  <li><a href="<?php echo APP_URL; ?>users/logout"><h3>Salir</h3></a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
  </ul>

</ul>
</div>
<!-- fin menu -->

</div>
