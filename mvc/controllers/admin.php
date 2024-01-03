<?php
class admin extends Controller
{
    public $show1;
    public $show2;
    public $show3;

    public function __construct()
    {
        $this->show2 = $this->model("LoginModel");
        $this->show1 = $this->model("ShowModel");
        $this->show3 = $this->model("AdminModel");
    }
    public function AdminShow()
    {
        $re = $this->show3->AdminShow();

        //View
        $this->view("master3", [
            "Page" => "main_admin",
            "data" => $re,

        ]);
    }
    public function nhap_taikhoan()
    {
        $this->view("master3", [
            "Page" => "them_taikhoan",
        ]);
    }
    public function them_taikhoan()
    {
        if (isset($_POST["them_taikhoan"])) {
            $username = $_POST["username"];
            $pass = $_POST["pass"];
            $quyen = $_POST["quyen"];
            $this->show3->them_taikhoan($username, $pass, $quyen);
            header("Location:./AdminShow");
        }
    }
    public function editTaikhoan()
    {
        if (isset($_GET["uid"])) {
            $uid = $_GET["uid"];
        }
        $re = $this->show3->editTaikhoan($uid);
        $this->view("master3", [
            "Page" => "edit-taikhoan",
            "data" => $re,
        ]);
    }
    public function check_editTaikhoan()
    {
        if (isset($_POST["update"])) {
            $uid = $_POST["uid"];
            $username = $_POST["username"];
            $pass = $_POST["pass"];
            $this->show3->check_editTaikhoan($username, $pass, $uid);  
            header("Location:./AdminShow");
        }
    }
    public function DeleteTaikhoan()
    {
        if (isset($_GET["uid"])) {
            $uid = $_GET["uid"];
        }
        $this->show3->DeleteTaikhoan($uid);
        header("Location:./AdminShow");
    }
    public function list_khachhang()
    {
        $re = $this->show3->list_khachhang();
        $this->view("master3", [
            "Page" => "list_khachhang",
            "data" => $re,
        ]);
    }
    public function nhap_khachhang()
    {
        $this->view("master3", [
            "Page" => "them_khachhang",
        ]);
    }
    public function them_khachhang()
    {
        if (isset($_POST["them_khachhang"])) {
            $hoten = $_POST["hoten"];
            $sdt = $_POST["sdt"];
            $diachi = $_POST["diachi"];
            $ngaytao = $_POST["ngaytao"];
            $this->show3->them_khachhang($hoten, $sdt, $diachi, $ngaytao);
            header("Location:./list_khachhang");
        }
    }
    public function editKhachhang()
    {
        if (isset($_GET["iduser"])) {
            $iduser = $_GET["iduser"];
        }
        $re = $this->show3->editKhachhang($iduser);
        $this->view("master3", [
            "Page" => "edit-khachhang",
            "data" => $re,
        ]);
    }
    public function check_editKhachhang()
    {
        if (isset($_POST["update"])) {
            $iduser = $_POST["iduser"];
            $hoten = $_POST["hoten"];
            $sdt = $_POST["sdt"];
            $diachi = $_POST["diachi"];
            $this->show3->check_editKhachhang($hoten, $sdt, $diachi, $iduser);  
            header("Location:./list_khachhang");
        }
    }
    public function DeleteKhachhang()
    {
        if (isset($_GET["iduser"])) {
            $iduser = $_GET["iduser"];
        }
        $this->show3->DeleteKhachhang($iduser);
        header("Location:./list_khachhang");
    }
    public function list_sanpham()
    {
        $re = $this->show3->list_sanpham();
        $this->view("master3", [
            "Page" => "list_sanpham",
            "data" => $re,
        ]);
    }
    public function DeleteProduct()
    {
        if (isset($_GET["idsp"])) {
            $idsp = $_GET["idsp"];
        }
        $this->show3->DeleteProduct($idsp);
        header("Location:./list_sanpham");
    }

    public function capnhat()
    {
        if (isset($_GET["idsp"])) {
            $idsp = $_GET["idsp"];
        }
        $re = $this->show3->capnhat_sp($idsp);
        $this->view("master3", [
            "Page" => "capnhat",
            "data" => $re,
        ]);
    }
    public function check_capnhat()
    {
        if (isset($_POST["update"])) {
            $idsp = $_POST["idsp"];
            $tensp = $_POST["tensp"];
            $mota = $_POST["mota"];
            $gia = $_POST["gia"];
            $size = $_POST["size"];
            $mausac = $_POST["mausac"];
            $xuatxu = $_POST["xuatxu"];

            $target_file = "public/images/" . basename($_FILES["hinhanh"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            // $check = getimagesize($_FILES["hinhanh"]["tmp_name"]);
            // if ($check !== false) {
            //     $uploadOk = 1;
            // } else {
            //     $uploadOk = 0;
            // }
            // Check if file already exists
            if (file_exists($target_file)) {
                $uploadOk = 0;
            }

            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $not = "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file);
            }
            if ($target_file != "") {
                $target_file = basename($_FILES["hinhanh"]["name"]);
                $this->show3->check_capnhat($tensp, $mota, $gia, $size, $mausac, $xuatxu, $idsp, $target_file);
            } else {
                $this->show3->check_hinhanh($tensp, $mota, $gia, $size, $mausac, $xuatxu, $idsp);
            }

            header("Location:./list_sanppham");
        }
    }
    public function nhap_sp()
    {
        $re = $this->show3->loai_sp();
        $this->view("master3", [
            "Page" => "them_sp",
            "data" => $re,
        ]);
    }

    public function them_sp()
    {
        if (isset($_POST["themsp"])) {
            $tensp = $_POST["tensp"];
            $gia = $_POST["gia"];
            $mota = $_POST["mota"];
            $mausac = $_POST["mausac"];
            $size = $_POST["size"];
            $xuatxu = $_POST["xuatxu"];
            $id_loai = $_POST["id_loai"];

            $target_dir = "public/images/";
            $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
            if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                $target_file = basename($_FILES["hinhanh"]["name"]);
                $this->show3->them_sp($tensp, $gia, $target_file, $mota, $mausac, $size, $xuatxu, $id_loai);
            } else {
                $not = "Sorry, there was an error uploading your file.";
            }
            header("Location:./AdminShow");
        }
    }

    public function list_danhmuc()
    {
        $re = $this->show3->loai_sp();
        $this->view("master3", [
            "Page" => "list_danhmuc",
            "data" => $re,
        ]);
    }
    public function nhap_danhmuc()
    {
        $this->view("master3", [
            "Page" => "them_danhmuc",
        ]);
    }
    public function them_danhmuc()
    {
        if (isset($_POST["them_danhmuc"])) {
            $danhmuc = $_POST["danhmuc"];
            $this->show3->them_danhmuc($danhmuc);
            header("Location:./list_danhmuc");
        }
    }
    public function editDanhmuc()
    {
        if (isset($_GET["id_loai"])) {
            $id_loai = $_GET["id_loai"];
        }
        $re = $this->show3->editDanhmuc($id_loai);
        $this->view("master3", [
            "Page" => "edit-danhmuc",
            "data" => $re,
        ]);
    }
    public function check_editDanhmuc()
    {
        if (isset($_POST["update"])) {
            $id_loai = $_POST["id_loai"];
            $tenloai = $_POST["tenloai"];
            $this->show3->check_editDanhmuc($tenloai, $id_loai);  
            header("Location:./list_danhmuc");
        }
    }
    public function Deletecategory()
    {
        if (isset($_GET["id_loai"])) {
            $id_loai = $_GET["id_loai"];
            
        }
        $this->show3->Deletecategory($id_loai);
        header("Location:./list_danhmuc");
    }
    public function capnhatcategory()
    {
        if (isset($_GET["id_loai"])) {
            $id_loai = $_GET["id_loai"];
        }
        $re = $this->show3->capnhatcategory($id_loai);
        $this->view("master3", [
            "Page" => "edit-danhmuc",
            "data" => $re,
        ]);
    }
    public function list_donhang()
    {
        $re = $this->show3->list_donhang();
        $this->view("master3", [
            "Page" => "list_donhang",
            "data" => $re,
        ]);
    }
    public function search()
    {
        if (isset($_POST["search"])) {
            $search = $_POST["search"];
            $re = $this->show3->admin_search($search);
            if ($re = '') {
                $not = "Không tìm thâý sản phẩm phù hợp";
                $this->view("master3", [
                    "Page" => "search",
                    "not" => $not,
                ]);
            } else {
                $not = "tìm thâý sản phẩm phù hợp";
                $this->view("master3", [
                    "Page" => "search",
                    "not" => $not,
                ]);
            }
        }
    }
}
