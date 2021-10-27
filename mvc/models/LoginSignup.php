<?php
class LoginSignup extends DB{
    // select value of form
    public $Email = $_POST['email'];
    public $Pass = $_POST['pass'];

   

    // connet database to compare
    public function checkDB(){
        if(isset($_POST['submitlogin'])){

            $Email = pg_escape_string($this->conn, $this->Email);
            $Pass = pg_escape_string($this->conn, $this->Pass);


            $sql = 'SELECT * FROM public."Login" WHERE email =\''.$Email.'\'and pass = \''.$Pass.'\'';

            
            return $sql;
            // $mum_row = pg_num_rows($sql);
            
            // if($mum_row != 0 ){
            //   $this->view("testimg");
            // }
            // else if($mum_row == 0){
            //   echo("Tài Khoản hoăc Mật Khẩu sai !");
            // }
        }
        else{
            $erro = "loi";
            return $erro;
        }
        

        

        // return pg_query($this->con, $sql);

    }
}
?>