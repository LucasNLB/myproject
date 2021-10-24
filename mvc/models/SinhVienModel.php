<?php
class SinhVienModel extends DB{
    public function GetSV(){
        
        $product_query = 'INSERT INTO public."PRODUCTTest"(id,name,price) VALUES (\''."1".'\',\''."Bình".'\',\''."15".'\')';
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