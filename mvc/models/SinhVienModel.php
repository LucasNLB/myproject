<?php
class SinhVienModel extends DB{
    public function GetSV(){
        
        if($this->con === false)
            die("ERROR : could not connet to datebase");
        else
            echo "SUCESS: connetion to HERUKU pastages has been establist";
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