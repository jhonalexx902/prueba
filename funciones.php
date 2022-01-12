<?php 

    require_once 'conexion.php';

    class funciones extends mainModelConexion
    {
        public function set_agregar($tipoidentificacion, $numeroidentificacion, $nombre1, $nombre2, $apellido1, $apellido2)
        {
            $sql = "INSERT INTO tercero (tipoidentificacion, numeroidentificacion, tipotercero, nombre1, nombre2, apellido1,  iddepartamento, idmunicipio)
             VALUES ('$tipoidentificacion','1' ,'$numeroidentificacion', '$nombre1', '$nombre2', '$apellido1',  1, '1')";

            return $this->runQuery($sql);
        }


        public function get_idInfante($apellido2)
        {
            $sql = "SELECT id AS id FROM departamento WHERE nombdepa = '$apellido2'";
            return $this->runQuery($sql);
        }


        public function get_listarAcudientes($cedula)
        {
            $sql = "SELECT cu.id_cuidadores AS id, cu.nombre_cuidadores AS nombre, cu.apellido_cuidadores AS apellido, cu.telefono_cuidadores AS telefono, cu.cedula_cuidadores AS cedula, cu.edad_cuidadores AS edad, 
            cu.parentesco_cuidadores AS parentesco, ni.registro_civil_infante AS registro
            FROM cuidadores cu
            INNER JOIN infantes ni ON cu.id_infante_cuidadores = ni.id_infante
            WHERE cu.cedula_cuidadores = '$cedula'";

            return $this->runQuery($sql);
        }

        public function set_updateAcudientes($idcuidador, $nombre, $apellido, $cedula, $telefono, $edad, $parentesco, $id){
            $sql = "UPDATE cuidadores 
            SET nombre_cuidadores = '$nombre', apellido_cuidadores = '$apellido', 
            cedula_cuidadores = '$cedula', telefono_cuidadores = '$telefono', edad_cuidadores = '$edad', parentesco_cuidadores = '$parentesco',
            id_infante_cuidadores = '$id' 
            WHERE id_cuidadores = '$idcuidador'";

            return $this->runQuery($sql);
        }
    }

    