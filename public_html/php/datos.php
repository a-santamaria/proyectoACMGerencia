<?php
$con=mysqli_connect("orion.javeriana.edu.co","ACMGerencia06","IVw9Mrato3","ACMGerencia06");
if (mysqli_connect_errno())
        {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

	
?>
<?php
	session_start();
	if($_SESSION['log']==1){
	$resultado = $con->query("SELECT * FROM DatosAsistente; ");
	echo "Orden del conjunto de resultados<br>";
	$resultado->data_seek(0);
	echo "<table>";
		echo "<tr>";
			echo "<td>Nombres </td>";
                        echo "<td>Apellidos </td>";
                        echo "<td>Fecha de nacimiento </td>";
                        echo "<td>Tipo de documento </td>";
                        echo "<td>Documento </td>";
                        echo "<td>Genero </td>";
                        echo "<td>Correo electronico </td>";
                        echo "<td>Tipo entidad </td>";
                        echo "<td>Entidad </td>";
                        echo "<td>Tipo asistente </td>";
                        echo "<td>Otro motivo </td>";
		echo "</tr>";
	while ($fila = $resultado->fetch_assoc()) {
	echo " <tr><td> " . $fila['Nombre'] . "</td>";
	echo " <td>" . $fila['Apellidos'] . "</td>";
	echo " <td>" . $fila['FechaNac'] . "</td>";	
	echo " <td>" . $fila['Tipodocumento'] . "</td>";
	echo " <td> " . $fila['Documento'] . "</td>";
	echo " <td> " . $fila['Genero'] . "</td>";
	echo " <td> " . $fila['Correo'] . "</td>";
	echo " <td> " . $fila['TipoEntidad'] . "</td>";
	echo " <td> " . $fila['Entidad'] . "</td>";
	echo " <td> " . $fila['TipoAsistente'] . "</td>";
	echo " <td> " . $fila['Otromotivo'] . "</td></tr>";
	} 
	echo "</table>";
	echo "<form name=\"log\" action=\"borrar.php\" method=\"POST\">";
	echo "<input type=\"submit\" value=\"Log out\" >";
	echo "</form>";
	}
	else
	{	
		 header('Location: admin.php');
		
	}
?>
