<?php

// http://localhost/live/Home/Show/1/2

class LoginSignup extends Controller{

    // Must have SayHi()
    function SayHi(){


    //call model        
    // call views
        $this->view("Login&Signup");

    }
    function login(){
        //call model
        
        // check login
    if(isset($_POST['submitlogin'])){

        $login = $this->model("LoginSignup");
        $sql =   $login->checkDB();
        $mum_row = pg_num_rows($sql);
        if($mum_row != 0 ){
          $this->view("testimg");
        }
        else if($mum_row == 0){
          echo("Tài Khoản hoăc Mật Khẩu sai !");
        }
      }


    }


}
?>