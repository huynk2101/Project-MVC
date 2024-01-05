<?php
 class Home extends Controller
{
    function SayHi()
    {
        $teo = $this->model("SinhVienModel");
        echo $teo->GetSv();

        //view
    }
    function Show($c , $d)
    {
        $tong = $this->model("SinhVienModel");
        $sum =  $tong->Sum($c,$d);
                            //Key => value
        $this->view("aodep", [
            "Pages" => "contacts",
            "Number"=>$sum
            ,"Color"=>"red",
            "Hobbies" => ["Play games" , "Sleep" , "Blue"],
            "SinhVien"=> $tong->SinhVien()
        ]);
    }
}
