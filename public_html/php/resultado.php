<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Refresh" content="5;url=../formulario.html" >
</head>
<body>
<?php
if (isset($_POST)) 
{
	
	//header('Location: form-asistente.html');  
}

$con=mysqli_connect("orion.javeriana.edu.co","ACMGerencia06","IVw9Mrato3","ACMGerencia06");
if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$documento=$_POST["documento"];
	$nombre =$_POST["nombre"];
	$fechanac =$_POST["fec_nac"];
	$genero=$_POST["genero"];
	$entidad=$_POST["n_entidad"]; 
	$tipoentidad =$_POST["t_entidad"];
	$tipoasistente =$_POST["t_asistente"];
	$apellidos =$_POST["apellido"];
	$otromotivo =$_POST["m_asistencia"];
	$tipodocumento=$_POST["tipodocumento"];
	$correo=$_POST["correo"];
	$mensaje="Felicitaciones $nombre su informacion a sido registradada satisfactoriamente.";
$sql = "INSERT INTO DatosAsistente (Documento ,Nombre ,FechaNac,Correo ,Genero,Entidad,TipoEntidad ,TipoAsistente ,Apellidos ,Otromotivo,TipoDocumento ) 
	VALUES (\"$documento\",\"$nombre\" ,\"$fechanac\",\"$correo\", \"$genero\",\"$entidad\", \"$tipoentidad\", \"$tipoasistente\", \"$apellidos\", \"$otromotivo\", \"$tipodocumento\")";
if (mysqli_query($con, $sql)) 
	{
		echo "Se enviara una notificacion a su correo. ";
		mail($correo, 'Su cuenta ha sido registrada', $mensaje);
	} 
else 
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
mysqli_close($con);

unset($_POST);
?>
</body>
</html>
