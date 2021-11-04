<?php

//Este fichero requiere ini.inc.php

?>

<form action="ejemplo3.php" method="post">
	Campo1: <input type="text" name="campo1" value="<?php echo $campo1; ?>"/><br>
	Campo2: <input type="text" name="campo2" value="<?php echo $campo2; ?>"/><br>
	Operación: <select name="operacion">
		<option value="sumar">Sumar</option>
		<option value="restar">Restar</option>
		<option value="multiplicar">Multiplicar</option>
		<option value="repetir">Repetir</option>
		<option value="buscar">Buscar</option>
	</select>
	<br>
	<input type="submit" value="Enviar formulario" />
</form>