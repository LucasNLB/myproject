<?php
class LoginSignupModel extends DB{
    
     
    public function LoginSignup(){

        if(isset($_POST['submit'])){
            // select value of form
            $Email = $_POST['email'];
            return $Email;
        }
    }
   

    // connet database to compare
    // public function checkDB(){
    //     if(isset($_POST['submit'])){
    //         // select value of form
    //         $Email = pg_escape_string($this->conn, $_POST['email']);
    //         $Pass = pg_escape_string($this->conn, $_POST['pass']);


    //         $sql = 'SELECT * FROM public."Login" WHERE email =\''.$Email.'\'and pass = \''.$Pass.'\'';

            
    //         return $sql;
    //         // $mum_row = pg_num_rows($sql);
            
    //         // if($mum_row != 0 ){
    //         //   $this->view("testimg");
    //         // }
    //         // else if($mum_row == 0){
    //         //   echo("Tài Khoản hoăc Mật Khẩu sai !");
    //         // }
    //     }
    //     else{
    //         $erro = "loi";
    //         return $erro;
    //     }
        

        

    //     // return pg_query($this->con, $sql);

    // }
}
?>