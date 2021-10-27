<?php
class HomepageModel extends DB{

    public function homeimg(){

        $img = "SELECT * FROM public.imghome";
        return pg_query($this->con, $img);

    }
    public function test(){

        $test = "tao dep trai";
        return $test;

    }
}
?>