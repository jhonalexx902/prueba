<?php 

    require_once 'config.php';

    class mainModelConexion
    {
        protected function conectar(){
            $enlace = new PDO(SGBD, USER, PASSWORD);
            return $enlace;
        }

        protected function runQuery($sql){
            $query = $this->conectar()->prepare($sql);
            $query->execute();
            return $query;
        }

    }   