<?php

    include ("conexion.php");

    if (isset($_POST['regist'])) {

        if (strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellidos']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['ciudad']) >= 1) {

            $nombre = trim($_POST['nombre']);
            $apellidos = trim($_POST['apellidos']);
            $email = trim($_POST['email']);
            $telefono = trim($_POST['telefono']);
            $ciudad = trim($_POST['ciudad']);
            $consulta = "INSERT INTO usuarios(nombre, apellidos, email, telefono, ciudad)
            VALUES ('$nombre','$apellidos','$email','$telefono','$ciudad')";
            $resultado = mysqli_query($mysqli, $consulta);
        }
    }

?>