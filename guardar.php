<?php

require_once 'funciones.php';


if (isset($_POST['tipoidentificacion']) && isset($_POST['numeroidentificacion']) && isset($_POST['nombre1']) && isset($_POST['nombre2']) && isset($_POST['apellido1'])
    && isset($_POST['apellido2']) ) {

    $agregar = new funciones();

    $tipoidentificacion = !empty($_POST['tipoidentificacion']) ? $_POST['tipoidentificacion'] : "";
    $numeroidentificacion = !empty($_POST['numeroidentificacion']) ? $_POST['numeroidentificacion'] : "";
    $nombre1 = !empty($_POST['nombre1']) ? $_POST['nombre1'] : "";
    $nombre2 = !empty($_POST['nombre2']) ? $_POST['nombre2'] : "";
    $apellido1 = !empty($_POST['apellido1']) ? $_POST['apellido1'] : "";
    $apellido2 = !empty($_POST['apellido2']) ? $_POST['apellido2'] : "";


    if (!empty($tipoidentificacion) || !empty($numeroidentificacion) || !empty($nombre1) || !empty($nombre2) || !empty($apellido1) || !empty($apellido2)) {
        
        $Infante = $agregar->get_idInfante($apellido2);
        $idInfante = $Infante->fetchObject();

        $respuesta = $agregar->set_agregar($tipoidentificacion, $numeroidentificacion, $nombre1, $nombre2, $apellido1, $idInfante);

        if ($respuesta->rowCount() > 0) {
            echo '<script type="text/javascript">
                alert("Registro realizado");
                window.location.href="index.php";
            </script>';
        } else {
            echo '<script type="text/javascript">
                alert("no se pudo hacer el registro");
                window.location.href="index.php";
            </script>';
        }
    }else {
        echo '<script type="text/javascript">
                alert("Todos los campos son obligatorios");
                window.location.href="index.php";
            </script>';
    }
} else {

    echo '<script type="text/javascript">
                alert("Favor llene todos los campos");
                window.location.href="index.php";
            </script>';
}
