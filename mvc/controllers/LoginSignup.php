<?php

// http://localhost/live/Home/Show/1/2

class LoginSignup extends Controller{

    // Must have SayHi()
    function test(){


    //call model        
    // call views
        
        $logincheck = $this->model("LoginSignupModel");
        
        $result = $logincheck->LoginSignup();

        if(pg_num_rows($result) != 0){
            echo "dang nhap thanh cong";
        }
        else{
            echo "dang nhap that bai";
        }

    //     $mum_row = pg_num_rows($result);
    //   if($mum_row != 0 ){
    //     echo "dang nhap thanh cong";
    //   }
    //   else if($mum_row == 0){
    //     echo"Tài Khoản hoăc Mật Khẩu sai !";
    //   }
    }


    function SayHi(){
    
        $this->view("Login&Signup");
        }
    function login(){
        //call model
        
        

    }


}
?>