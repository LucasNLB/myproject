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
    $check = $this->model("LoginSignup");

        // check login
    echo $sql = $check->checkDB();


    }


}
?>