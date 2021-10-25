<?php
class HomepageModel extends DB{



    public function HomeDB(){
        $img = "SELECT * FROM public.test";
        return pg_query($this->con, $img);

    }
}
?>