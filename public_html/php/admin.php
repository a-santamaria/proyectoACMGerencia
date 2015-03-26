<?php
session_start();
if ($_SESSION['log']==1)
{
	header("Location:datos.php");
}
if ($_SESSION['err'] == 1)
{
	echo 'Contraseña incorrecta';
	session_destroy();
}
?>
<html>
<form action="comp.php" method="post">
	<input type="password" name="psw">
	<input type="submit" name="Ingresar">
</form>
</html>

