<?php
  session_start();
	require "conexion.php";
	error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title></title>
</head>

<body>
<form action="" method="get">
<input type="text" name="busqueda">  <br>
<input type="submit" name="enviar" value="Buscar">
</form>

<br><br><br>


<?php
 if(isset($_GET['enviar']))  {
  $busqueda = $_GET['busqueda'];

 $consulta = $mysqli->query("SELECT * FROM bdayes WHERE nom_clientes LIKE '%busqueda%'");

 while ($row = $consulta->fetch_array())  { 
  echo $row['nom_clientes'].'<br>';
 


 }


  }

?>
</body>

</html>