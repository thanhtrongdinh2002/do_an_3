<?php
class AdminModel extends DB {
    public function AdminShow(){
        $sql = "SELECT * FROM product";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function DeleteProduct($idsp){
        $sql = "DELETE FROM product WHERE `idsp` = $idsp";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function capnhat_sp($idsp){
        $sql = "SELECT * FROM product WHERE `idsp` = $idsp";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function check_capnhat($tensp, $thanhphan, $gia, $idsp, $target_file){
        $sql = "UPDATE `product` SET tensp = '$tensp', thanhphan = '$thanhphan',gia = '$gia', hinhanh = '$target_file' WHERE idsp = $idsp ";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function check_hinhanh($tensp, $thanhphan, $gia, $idsp){
        $sql = "UPDATE `product` SET tensp = '$tensp', thanhphan = '$thanhphan',gia = '$gia' WHERE idsp = $idsp ";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function loai_sp(){
        $sql = "SELECT * FROM productpro_type";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function them_sp($tensp ,$gia ,$target_file, $thanhphan, $id_loai){
        $sql = "insert into product(tensp ,gia ,hinhanh, thanhphan ,id_loai) 
        values('$tensp','$gia','$target_file','$thanhphan','$id_loai')";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function them_danhmuc($danhmuc){
        $sql = "insert into productpro_type(tenloai) values ('$danhmuc')";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function admin_search($search){
        $sql = "SELECT * FROM product WHERE tensp LIKE '%$search%'";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
}

?>