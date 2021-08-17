<?php
class conectar{
    protected $dbh;
    protected function conexion(){
        try {
            $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=dbsystem_egresados","root","");
            return $conectar;
        }catch(exception $e){
            print "¡Error DB! ". $e-> getMessage(). "<br/>";
            die();
        }
    }
    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
        /*retorna esta variable protegida con el query set names utf8 para no tener problema con las mayusculas ni minisculas*/
    }
}
?>