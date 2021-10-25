<?php
class HomepageModel extends DB{
    public function slide(){
        $img = "SELECT * FROM public.test";
        return pg_query($this->con, $img);

    }
}
?>