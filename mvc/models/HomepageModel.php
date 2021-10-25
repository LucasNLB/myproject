<?php
class HomepageModel extends DB{


    
    public function HomeDB(){
        $img = "SELECT * FROM public.ImgHomePage";
        return pg_query($this->con, $img);

    }
}
?>