<?php
class LoginModel extends DB{
    public function HandleLogin($username, $pass){
        $sql = "SELECT * FROM taikhoan WHERE username = '$username' AND pass = '$pass'";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function HandleRegister($username, $pass){
        $sql="INSERT INTO `taikhoan`(`username`,`pass`,`quyen`) VALUES ('$username','$pass',0)";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function themgiohang($idsp, $iduser, $sl){
        $sql="INSERT INTO `giohang`(`idsp`,`iduser`,`soluong`) VALUES ('$idsp','$iduser','$sl')";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function giohang_sp($iduser){
        $sql = "SELECT * FROM `giohang` INNER JOIN `product` ON giohang.idsp LIKE product.idsp WHERE giohang.iduser = '$iduser'";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function check_giohang($idsp, $iduser){
        $sql = "SELECT * FROM `giohang` WHERE `idsp`='$idsp' AND `iduser`='$iduser'";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function update_giohang($sl,$idsp,$iduser){
        $sql = "UPDATE `giohang` SET soluong = soluong + '$sl' WHERE idsp = '$idsp' AND iduser = '$iduser'";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function thanhtoan_giohang($iduser){
        $sql = "SELECT * FROM `giohang` INNER JOIN `product` ON giohang.idsp LIKE product.idsp WHERE giohang.iduser = '$iduser'";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function check_thongtin($iduser){
        $sql = "SELECT * FROM `khachhang` WHERE iduser = $iduser";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function them_thongtin($iduser, $hoten, $sdt, $diachi, $email){
        $sql="INSERT INTO `khachhang`(`iduser`,`hoten`,`sdt`,`diachi`, `email`) VALUES ('$iduser','$hoten','$sdt','$diachi','$email')";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function check_gd($iduser){
        $sql = "SELECT * FROM `giaodich` INNER JOIN `product` ON giaodich.idsp LIKE product.idsp WHERE giaodich.iduser = '$iduser'";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function xoa_kh($iduser){
        $sql = "DELETE FROM `khachhang` WHERE iduser = '$iduser'";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function sua_tt($iduser){
        $sql = "SELECT * FROM `khachhang` WHERE `iduser` = $iduser";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function luu_tt($iduser, $hoten, $sdt, $diachi, $email){
        $sql="UPDATE `khachhang` SET `hoten`='$hoten',`sdt`='$sdt',`diachi`='$diachi',`email`='$email' WHERE `iduser` = '$iduser'";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
}
?>