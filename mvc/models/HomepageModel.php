<?php
class HomepageModel extends DB{

    public function homeimg(){

        $img = "SELECT * FROM public.imghome";
        return pg_query($this->con, $img);

    }
    public function productdetail($id){
        $img = "SELECT * FROM public.imghome WHERE email =\''.$id.'\'";
        // return pg_query($this->con, $img);
        return $img;
    }
 
}
?>