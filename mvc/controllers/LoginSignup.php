<?php

// http://localhost/live/Home/Show/1/2

class LoginSignup extends Controller{

    // Must have SayHi()
    function test(){


        //call model
        $logincheck = $this->model("LoginSignupModel");
        $result = $logincheck->LoginSignup();
        // check model condition
        if(pg_num_rows($result) != 0){
            header("location:../../index.php");
        }
        else{
            echo "dang nhap that bai";
        }
    }

    function testSignUp(){

        $signupcheck = $this->model("LoginSignupModel");
        $result = $signupcheck -> SignUp();
        echo $result;
    
    }


    function SayHi(){
    
        $this->view("Login&Signup");
        }
    function login(){
        //call model
        
        

    }


}
?>