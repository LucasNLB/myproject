<?php

class DB{

    public $con;
    $host = "ec2-54-224-194-214.compute-1.amazonaws.com";
    $database = "dsp51t0avtc5r";
    $user = "sqqzeidvgegbly";
    $port = "5432";
    $password = "0cf33ebbadc2c4b7f7920497fd864e3d1e89c1fde423f9b1ed7bab8c8645f5d8";

    $connection_string = "host=".$host." user=".$user." dbname=".$database." port=".$port." password=".$password." sslmode=require";
    $connection = pg_connect($connection_string);
    protected $$host = "ec2-54-224-194-214.compute-1.amazonaws.com";
    protected $database = "dsp51t0avtc5r";
    protected $user = "sqqzeidvgegbly";
    protected $port = "5432";
    protected $password = "0cf33ebbadc2c4b7f7920497fd864e3d1e89c1fde423f9b1ed7bab8c8645f5d8";
   


    function __construct(){
        $this->con = pg_connect("host=".$this->servername."port=".$this->port."dbname=".$this->dbname."user=".$this->username."password=".$this->password."sllmode=".$this->ssl);
        
    }
    

}

?>