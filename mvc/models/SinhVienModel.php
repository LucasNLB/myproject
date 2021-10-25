<?php
class SinhVienModel extends DB{
    public function GetSV(){
        $product_query = 'INSERT INTO public."test"(id,img) VALUES (\''."1".'\',\''."Bình".'\')';
        pg_query($this->con,$product_query);
    }

    public function Tong($n, $m){
        return $n + $m;
    }

    public function SinhVien(){
        $qr = "SELECT * FROM sinhvien";
        return pg_query($this->con, $qr);
    }

}
?>