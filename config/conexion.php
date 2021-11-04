<?php
    class Conectar{
        protected $dbh;
        
        protected function Conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:host=34.68.196.220;dbname=G4_19","G4_19","FQCMW9JV");
                return $conectar;
            } catch (Exception $e){
                print "Error DB!:" . $e->getMenssage() . "br/>";
                die();
            }
        }
        public function set_names(){
        	return $this->dbh->query("SET NAMES 'utf8'");
    	}
    }
?>