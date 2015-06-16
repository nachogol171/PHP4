<head>
   <meta charset= 'utf-8'>
   <link href="public/css/formularios.css" rel="stylesheet">
</head>

<body>
	<section>
		<div id='contenido'> 
			<nav>
				<ul>
					<h2>Acceder con usuario</h2>
					<br/>
					<form id="login" method="post" action="index.php?rt=login/login">
						<h3>Email</h3>
						<input name="email" type="text"/>
						<br/>
						<h3>Password</h3>
						<input id="pass" name="pass" type="password"/>
						<br/><br/>
						<input type="button" value="Iniciar sesi&oacute;n" onclick="login()"/>
						<?php 
							//echo "<h3>$logincount</h3>";
							if (isset($login_ok))
							{
								//Ya se envio el formulario
					   			if (!$login_ok)
					     			echo "<h3>Usuario inexistente o deshabilitado, o contraseña no v&aacute;lida<h3>";
							}
						?>
					</form>
				</ul>
			</nav>
		</div>
	</section>
</body>