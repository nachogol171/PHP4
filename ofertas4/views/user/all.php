<table>
<?php

foreach ($usuarios as $key => $usuario) {
	# code...
	echo "<tr><td>{$usuario['id']}</td><td>{$usuario['name']}</td><td>{$usuario['age']}</td></tr>";
}

?>
</table>