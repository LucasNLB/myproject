<?php

// http://localhost/live/Home/Show/1/2

class LoginSignup extends Controller{

    // Must have SayHi()
    function test(){


    //call model        
    // call views
        
        $logincheck = $this->model("LoginSignupModel");
        
        $result = $logincheck->LoginSignup();

        
        $mum_row = pg_num_rows($result);
      if($mum_row != 0 ){
        header("location:../index.php"); 
      }
      else if($mum_row == 0){
        echo("Tài Khoản hoăc Mật Khẩu sai !");
      }
    }


    function SayHi(){
    
        $this->view("Login&Signup");
        }
    function login(){
        //call model
        
        

    }


}
?>