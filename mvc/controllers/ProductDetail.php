<?php

// http://localhost/live/Home/Show/1/2

class ProductDetail extends Controller{

    // Must have SayHi()
    function ProducID($id){
    // call models
        $img = $this->model("HomepageModel");
        
        
    // call views
        $this->view("ProductDetail", [
            $img => $img->productdetail($id)
        ]);

    }

}