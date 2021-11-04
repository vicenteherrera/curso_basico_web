<?php

$campo1 = '';
if ( isset( $_POST['campo1'] ) ) {
	//Código si existe campo1 definido
	$campo1 = $_POST['campo1'];
}

$campo2 = '';
if ( isset($_POST['campo2']) ) {
	//Código si existe campo1 definido
	$campo2 = $_POST['campo2'];
}

?>


<form action="ejemplo3.php" method="post">
Campo1: <input type="text" name="campo1" value="<?php echo $campo1; ?>"/><br>
Campo2: <input type="text" name="campo2" value="<?php echo $campo2; ?>"/><br>
<input type="submit" value="Enviar formulario" />
</form>

<?php

echo "Hola ejemplo 3<br>";
echo "GET<br>";
echo "<pre>";
var_dump($_GET);
echo "</pre>POST<br><pre>";
var_dump($_POST);