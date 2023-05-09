<?php

    require_once 'config.php';

    class ConexaoPDO{

        private static $pdo;

        public static function getInstance(){
            if(!isset(self::$pdo)){
                try{
                    self::$pdo = new PDO(CONECTOR.":host=" .HOST. "; port=" .PORT. "; dbname=" .DBNAME. "; charset=" .CHARSET. ";", USER, PASSWORD);
                }catch(PDOException $e){
                    echo "Erro: ". $e->getMessage();
                }
            }
            return self::$pdo;
        }
    }

?>