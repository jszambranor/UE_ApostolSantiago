<?php
/**
 *
 */
class Conexion
{
    public function __construct()
    {
        // code...
    }

    private $user = "root";
    private $password = "password100296";
    private $host = "localhost";
    private $bd = "UE_ApostolSantiago";

    public function get_Conexion()
    {
        try {
            $conexion = new PDO("mysql:host=$this->host;dbname=$this->bd", $this->user, $this->password);
            if (!isset($conexion)) {
                echo "ERROR DE CONEXION";
            } else {
                return $conexion;
            }
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
