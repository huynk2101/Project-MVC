<?php
class SinhVienModel extends Db {
    public function GetSV() {
        return "Nguyen Chi Huong";
    }
    public function Sum($a , $b) {
     return $a + $b;   
    }
    public function SinhVien() {
     $query = "SELECT * FROM sinhvien";
     return mysqli_query($this->con , $query);   
    }
}
?>