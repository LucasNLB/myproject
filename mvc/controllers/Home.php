<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{

    // Must have SayHi()
    function SayHi(){
        $test = $this->model("SinhVienModel");
        echo $test;

         
        
        
   //call views
        // $this->view("test");
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