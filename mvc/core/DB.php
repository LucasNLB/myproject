<?php

class DB{

    public $con;

    protected $servername = "ec2-54-224-194-214.compute-1.amazonaws.com";
    protected $username = "sqqzeidvgegbly";
    protected $port = "5432";
    protected $password = "0cf33ebbadc2c4b7f7920497fd864e3d1e89c1fde423f9b1ed7bab8c8645f5d8";
    protected $dbname = "dsp51t0avtc5r";
    protected $ssl = "require";


    function __construct(){
        $this->con = pg_connect("host=".$servername."port=".$port."dbname=".$dbname."user=".$username."password=".$password."sllmode=".$ssl);
    );
        // check connection
        if($this->con === false){
            die("Erro");
        }else{
            echo "SUCESS";
        }
         pg_query($this->con, "SET NAMES 'utf8'");
    }
    

}

?>