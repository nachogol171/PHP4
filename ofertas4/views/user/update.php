<?php 

?>

<form action="save" method="POST">
	<div><label for="name">Nombre</label></div>
	<div><input type="text" name="name" value="<?php echo $user->getName(); ?>" /></div>
	<div><label for="password">Password</label></div>
	<div><input type="password" name="password" value="<?php echo $user->getPassword(); ?>" /></div>
	<div><label for="age">Edad</label></div>
	<div><input type="text" name="age" value="<?php echo $user->getAge(); ?>" /></div>
	<input type="hidden" name="id" value="<?php echo $user->getId(); ?>" />

	<input type="submit" name='enviar' value="Guardar">
</form>