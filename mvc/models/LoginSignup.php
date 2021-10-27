<?php
class LoginSignup extends DB{
    // select value of form
    public $Email = $_POST['email'];
    public $Pass = $_POST['pass'];

   

    // connet database to compare
    public function checkDB(){

        $Email = pg_escape_string($this->conn, $this->Email);

        $Pass = pg_escape_string($this->conn, $this->Pass);

        $sql = 'SELECT * FROM public."Login" WHERE email ='.$Email.' and pass ='.$Pass;

        return pg_query($this->con, $sql);

    }
}
?>