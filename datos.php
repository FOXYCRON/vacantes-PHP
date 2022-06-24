<html>

  <head>
      <title> Resultados </title>
  </head>

  <body background = "imagenes/vacantes.jpg">
 <?php
if ($_REQUEST['radio1'] == "sinestudios"){
	$nom= $_REQUEST ['nom'];
	echo "<center>";
	echo "<b>";
	echo $nom. ", elija una de las vacantes sin estudios: ";
	echo "<br>";
	echo "*Cocinero. ";
	echo "<br>";
	echo "*Limpieza. ";
	echo "<br>";
	echo "*Vigilancia. ";
	echo "<br>";
	echo "</center>";
	echo "<b>";

} else {

if ($_REQUEST['radio1'] == "primaria"){
	$nom= $_REQUEST ['nom'];
	echo "<center>";
	echo "<b>";
	echo $nom. ", elija una de las vacantes con estudios de primaria: ";
	echo "<br>";
	echo "*Cajero. ";
	echo "<br>";
	echo "*Mesero. ";
	echo "<br>";
	echo "*Bartender. ";
	echo "<br>";
	echo "</center>";
	echo "<b>";

 }
}

if ($_REQUEST['radio1'] == "secundaria"){
	$nom= $_REQUEST ['nom'];
	echo "<center>";
	echo "<b>";
	echo $nom. ", elija una de las vacantes con estudios de secundaria: ";
	echo "<br>";
	echo "*Almacenista. ";
	echo "<br>";
	echo "*Repartidor. ";
	echo "<br>";
	echo "*Chofer. ";
	echo "<br>";
	echo "</center>";
	echo "<b>";

} else {

if ($_REQUEST['radio1'] == "preparatoria"){
	$nom= $_REQUEST ['nom'];
	echo "<center>";
	echo "<b>";
	echo $nom. ", elija una de las vacantes con estudios de preparatoria: ";
	echo "<br>";
	echo "*Auxiliar Contable. ";
	echo "<br>";
	echo "*Auxiliar Administracion. ";
	echo "<br>";
	echo "*Recepcionista. ";
	echo "<br>";
	echo "</center>";
	echo "<b>";

}
}
?>

<br>
<center>
         <input type = "button" value = "Regresar" onclick = "window.location = 'vacantes.php';">
</center>

</body>

</html>