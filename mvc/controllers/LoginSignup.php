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
        $login = $this->model("LoginSignup");
        $sql =   $login->checkDB();
        // check login
    if(isset($_POST['submit'])){
        $mum_row = pg_num_rows($sql);
        if($mum_row != 0 ){
          $this->view("testimg");
        }
        else if($mum_row == 0){
          echo("Tài Khoản hoăc Mật Khẩu sai !");
        }
      }
    }

    function Show($a, $b){        
        // Call Models
        $teo = $this->model("SinhVienModel");
        $tong = $teo->Tong($a, $b); // 3

        // Call Views
        $this->view("aodep", [
            "Page"=>"news",
            "Number"=>$tong,
            "Mau"=>"red",
            "SoThich"=>["A", "B", "C"],
            "SV" => $teo->SinhVien()
        ]);
    }
}
?>