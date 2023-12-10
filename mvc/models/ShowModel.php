<?php
class ShowModel extends DB{
    public function ShowProduct(){
        $sql = "SELECT * FROM product ";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function ShowDetail($idsp){
        $sql = "SELECT * FROM product WHERE idsp = $idsp";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function fsearch($search){
        $sql = "SELECT * FROM `product` WHERE `tensp`LIKE '%$search%'";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function product_type(){
        $sql = "SELECT * FROM `productpro_type`";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function Show_danhmuc($id_loai){
        $sql = "SELECT * FROM `product` WHERE `id_loai` = $id_loai";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
}
?>