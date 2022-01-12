<?php 

    require_once 'funciones.php';

    if (isset($_POST['idCuidador']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['cedula']) && isset($_POST['telefono']) && isset($_POST['edad'])
    && isset($_POST['parentesco']) && isset($_POST['registroCivil']) ) {

    $update = new funciones();
    
    $idCuidador = !empty($_POST['idCuidador']) ? $_POST['idCuidador'] : "";
    $nombre = !empty($_POST['nombre']) ? $_POST['nombre'] : "";
    $apellido = !empty($_POST['apellido']) ? $_POST['apellido'] : "";
    $cedula = !empty($_POST['cedula']) ? $_POST['cedula'] : "";
    $telefono = !empty($_POST['telefono']) ? $_POST['telefono'] : "";
    $edad = !empty($_POST['edad']) ? $_POST['edad'] : "";
    $parentesco = !empty($_POST['parentesco']) ? $_POST['parentesco'] : "";
    $registro = !empty($_POST['registro']) ? $_POST['registroCivil'] : "";

    if (!empty($_POST['idCuidador']) || !empty($nombre) || !empty($apellido) || !empty($cedula) || !empty($telefono) || !empty($edad) || !empty($parentesco) || !empty($registro)) {

        
        $Infante = $update->get_idInfante($registro);
        $idInfante = $Infante->fetchObject();
        $respuesta = $update->set_updateAcudientes($idCuidador, $nombre, $apellido, $cedula, $telefono, $edad, $parentesco, $idInfante);

        
        
        if ($respuesta->rowCount() > 0) {
            echo '<script type="text/javascript">
                alert("Registro Actualizado");
                window.location.href="index.php";
            </script>';
        } else {
            echo '<script type="text/javascript">
                alert("no se actualizo el registro");
                window.location.href="index.php";
            </script>';
        }
        
    }else {
        echo '<script type="text/javascript">
        alert("Llene los datos");
        window.location.href="index.php";
        </script>';
    }
}else {
    echo '<script type="text/javascript">
    alert("Favor llene todos los campos");
    window.location.href="index.php";
    </script>';
}