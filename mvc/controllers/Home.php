<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{

    // Must have SayHi()
    function SayHi(){

         
        
         $servername = "ec2-54-224-194-214.compute-1.amazonaws.com";
         $username = "sqqzeidvgegbly";
         $port = "5432";
         $password = "0cf33ebbadc2c4b7f7920497fd864e3d1e89c1fde423f9b1ed7bab8c8645f5d8";
         $dbname = "dsp51t0avtc5r";
         $ssl = "require";
         $con = pg_connect("host=".$servername."port=".$port."dbname=".$dbname."user=".$username."password=".$password."sllmode=".$ssl);
        
        //call model
        $product_query = 'INSERT INTO public."PRODUCTTest"(id,name,price) VALUES (\''."1".'\',\''."Bình".'\',\''."1000".'\')';
        pg_query($con, $product_query);

        //call views
        //$this->view("test");
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