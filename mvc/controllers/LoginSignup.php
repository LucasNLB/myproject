<?php

// http://localhost/live/Home/Show/1/2

class LoginSignup extends Controller{

    // Must have SayHi()
    function test(){


    //call model        
    // call views
        
        $test = $this->model("HomepageModel");
        
        $in = $test->test();

        echo $in;

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