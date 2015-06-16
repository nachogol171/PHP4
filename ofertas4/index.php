<?php

 /*** error reporting on ***/
 error_reporting(E_ALL);

 /*** define the site path ***/
 $site_path = realpath(dirname(__FILE__));
 define ('__SITE_PATH', $site_path);

 /*** include the init.php file ***/
 include 'includes/init.php';

 /*** load the router ***/
 $registry->router = new router($registry);

 /*** set the controller path ***/
 $registry->router->setPath (__SITE_PATH . '/controller');

 /*** load up the template ***/
 $registry->template = new template($registry);

?>



<!DOCTYPE html>
<html>
<head>

	<title>Prueba Tecnologo</title>
	<style>
	code{
		background: #54ef45;
		display: block;
		border-radius: 6px;
		padding: 24px 15px;
	    text-align: center;
	}

	header,
	section,
	aside,
	footer{
		margin: 0.5% 1.5% 1.5% 1.5%;
	}
	
	aside{
		 float: right;
		 width: 40%;
	}

	section{
		 float: left; 
		 width: 25%;
	}

	footer{
		  clear: both; 
	}

	fieldset{
		margin: 0;
		border: 0;
		padding: 20px;
	}

	fieldset label{
		padding: 5px;
		display: block;
	}

	
	label{
		 font-weight: bold;
	}

	input{
		border-radius: 5px;
	}

	</style>


</head>
<body>

<header><code>header</code></header>

<section>

</section>
<section>
<?php  
/*** load the controller ***/
 $registry->router->loader(); 
 ?>
</section>
<aside>Aside <ul id="listadeusuarios"></ul></aside>
<footer><code>footer</code></footer>

</body>
</html>
