<?php

// http://localhost/live/Home/Show/1/2

class LoginSignup extends Controller{

    // Must have SayHi()
    function test(){


    //call model        
    // call views
        
        // $test = $this->model("LoginSignupModel");
        
        // $in = $test->LoginSignup();

        // echo $in;
        if(isset($_POST['submit'])){
            // select value of form
            $Email = $_POST['email'];
            echo $Email;
        }
        else{
            $Erro = "Không nhận dữ liệu";
            echo $Erro;
        }


        $this->view("Login&Signup");

    }


    function SayHi(){
    
        $this->view("Login&Signup");
        }
    function login(){
        //call model
        
        

    }


}
?>