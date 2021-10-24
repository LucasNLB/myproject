<?php

class DB{

    public $con;
    

    
    protected $host = "ec2-54-224-194-214.compute-1.amazonaws.com";
    protected $database = "dsp51t0avtc5r";
    protected $user = "sqqzeidvgegbly";
    protected $port = "5432";
    protected $password = "0cf33ebbadc2c4b7f7920497fd864e3d1e89c1fde423f9b1ed7bab8c8645f5d8";
   


    function __construct(){

        $connection_string = "host=".$this->host." user=".$this->user." dbname=".$this->database." port=".$this->port." password=".$this->password." sslmode=require";
        $this->con = pg_connect($connection_string);
        
        
    }
    

}

?>