<?php

    include ("conexion.php");

    if (isset($_POST['regist'])) {

        if (strlen($_POST['prodcuto']) >= 1 &&
        strlen($_POST['precio']) >= 1) {

            $prodcuto = trim($_POST['producto']);
            $precio = trim($_POST['precio']);
            $consulta = "INSERT INTO usuarios(producto, precio)
            VALUES ('$producto','$precio')";
            $resultado = mysqli_query($mysqli, $consulta);
        }
    }

?>