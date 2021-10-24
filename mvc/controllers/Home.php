<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{

    // Must have SayHi()
    function SayHi(){

         
        // $host = "ec2-54-224-194-214.compute-1.amazonaws.com";
        // $database = "dsp51t0avtc5r";
        // $user = "sqqzeidvgegbly";
        // $port = "5432";
        // $password = "0cf33ebbadc2c4b7f7920497fd864e3d1e89c1fde423f9b1ed7bab8c8645f5d8";

        // $connection_string = "host=".$host." user=".$user." dbname=".$database." port=".$port." password=".$password." sslmode=require";
        // $connection = pg_connect($connection_string);


        

        //call views
        $this->view("test");
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