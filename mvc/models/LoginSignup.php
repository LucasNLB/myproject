<?php
class LoginSignup extends DB{

    public $Email = $_POST['email'];
    public $Pass = $_POST['pass'];

   // select value of form
    public function Email(){

        $this->Email = pg_escape_string($this->conn, $this->Email);
        
        return $this->Email;

    }

    public function Pass(){

        $this->Pass = pg_escape_string($this->conn, $this->Pass);
        return $this->Pass;

    }
    // connet database to compare
    public function checkDB(){

        $sql = 'SELECT * FROM public."Login" WHERE email ="$this->Email" and pass ="$this->Pass" ';
        return pg_query($this->con, $sql);

    }
}
?>