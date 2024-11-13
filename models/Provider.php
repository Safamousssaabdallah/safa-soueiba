<?php

class Provider{
    private $host='localhost';
    private $dbName="safa";
    private $user="root";
    private $password="";


    public function getconnection(){
        $con=new PDO("pgsql:host=$this->host;dbname=$this->dbName", $this->user,  $this->password);
        if($con){
            //echo 'Connexion etablie!!!!';
        return $con;
    }else
        return null;
            //echo "Erreur connexion";
    }
}



$p=new Provider();
$p->getconnection();