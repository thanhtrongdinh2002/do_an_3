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
    public function DeleteProduct()
    {
        if (isset($_GET["idsp"])) {
            $idsp = $_GET["idsp"];
        }
        $this->show3->DeleteProduct($idsp);
        header("Location:./AdminShow");
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
            $thanhphan = $_POST["thanhphan"];
            $gia = $_POST["gia"];



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
                $this->show3->check_capnhat($tensp, $thanhphan, $gia, $idsp, $target_file);
            } else {
                $this->show3->check_hinhanh($tensp, $thanhphan, $gia, $idsp);
            }

            header("Location:./AdminShow");
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
            $thanhphan = $_POST["thanhphan"];
            $id_loai = $_POST["id_loai"];

            $target_dir = "public/images/";
            $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
            if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                $target_file = basename($_FILES["hinhanh"]["name"]);
                $this->show3->them_sp($tensp, $gia, $target_file, $thanhphan, $id_loai);
            } else {
                $not = "Sorry, there was an error uploading your file.";
            }
            header("Location:./AdminShow");
        }
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
            header("Location:./AdminShow");
        }
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
