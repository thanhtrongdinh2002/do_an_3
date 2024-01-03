<?php
if (session_status() === PHP_SESSION_NONE)
    session_start();

class user_login extends Controller
{
    public $show1;
    public $show2;

    public function __construct()
    {
        $this->show2 = $this->model("LoginModel");
        $this->show1 = $this->model("ShowModel");
    }

    public function ShowRegister()
    {
        //View
        $this->view("master2", [
            "Page" => "register",

        ]);
    }
    public function ShowLogin()
    {
        //View
        $this->view("master2", [
            "Page" => "login",

        ]);
    }


    public function login()
    {
        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $pass = $_POST["pass"];
            if ($username == "" or $pass == "") {
                $not = "Tài khoản hoặc mật khẩu không được để trống";
            } else {
                $re = $this->show2->HandleLogin($username, $pass);
                if (mysqli_num_rows($re) > 0) {
                    $row = mysqli_fetch_array($re);
                    $iduser = $_COOKIE['iduser'];
                    if ($_COOKIE['iduser'] == null) {
                        $iduser = rand(0, 10000000);
                    }
                    setcookie('iduser', $iduser, time() + (86400 * 1), "/");
                    $_SESSION["quyen"] = $row['quyen'];
                    if ($row["quyen"] == "admin") {
                        header('location:../admin/AdminShow');
                    } elseif ($row["quyen"] == "khachhang") {
                        header("Location:../");
                    }
                } else {
                    $not = "Tài khoản hoặc mật khẩu không chính xác";
                }
            }
        }
        if (isset($not)) {
            return $this->view("master2", [
                "Page" => "login",
                "not" => $not,
            ]);
        } else {
            return $this->view("master2", [
                "Page" => "login",
            ]);
        }
    }
    public function register()
    {
        if (isset($_POST["register"])) {
            $username = $_POST["username"];
            $pass = $_POST["pass"];
            if ($username == "" or $pass == "") {
                $not = "Tài khoản hoặc mật khẩu không được để trống";
            } else {
                $re = $this->show2->HandleLogin($username, $pass);
                if (mysqli_fetch_row($re) > 0) {
                    $not = "Tài khoản đã tồn tại";
                } else {
                    $this->show2->HandleRegister($username, $pass);
                    header("Location:../");
                }
            }
        }
        return $this->view("master2", [
            "Page" => "register",
            "not" => $not,
        ]);
    }
    public function them_giohang()
    {
        if (isset($_POST["them_giohang"])) {
            if (isset($_COOKIE["iduser"])) {
                $iduser = $_COOKIE["iduser"];
                $idsp = $_POST["idsp"];
                $sl = $_POST["soluong"];
                $u = $this->show2->check_giohang($idsp, $iduser);
                if (mysqli_num_rows($u) > 0) {
                    $this->show2->update_giohang($sl, $idsp, $iduser);
                    header("Location:../user_login/show_giohang");
                } else {
                    $this->show2->themgiohang($idsp, $iduser, $sl);
                    header("Location:../user_login/show_giohang");
                }
            } else {
                header("Location:./Login");
            }
        }
    }
    public function show_giohang()
    {
        $ex = $this->show1->product_type();

        if (isset($_COOKIE["iduser"])) {
            $iduser = $_COOKIE["iduser"];
            $re = $this->show2->giohang_sp($iduser);
            if (mysqli_num_rows($re) > 0) {
                return $this->view("master1", [
                    "Page" => "giohang",
                    "data" => $re,
                    "type" => $ex,
                ]);
            } else {
                $not = "Giỏ hàng trống";
                return $this->view("master1", [
                    "Page" => "giohang",
                    "not" => $not,
                    "type" => $ex,
                ]);
            }
        } else {
            $not = "Giỏ hàng trống";
            return $this->view("master1", [
                "Page" => "giohang",
                "not" => $not,
                "type" => $ex,
            ]);
        }
    }
    public function thanhtoan()
    {
        if (isset($_POST["thanhtoan"])) {
            $iduser = $_POST["iduser"];
            $re = $this->show2->check_thongtin($iduser);
            if (mysqli_num_rows($re) == 0) {
                $ex = $this->show1->product_type();
                $this->view("master1", [
                    "Page" => "nhap_thongtin",
                    "type" => $ex,
                ]);
            } else {
                $iduser = $_POST["iduser"];
                $ex = $this->show1->product_type();
                $re = $this->show2->thanhtoan_giohang($iduser);
                return $this->view("master1", [
                    "Page" => "thanhtoan",
                    "data" => $re,
                    "type" => $ex,
                ]);
            }
        }
    }
    public function thongtinkh()
    {
        $iduser = $_GET["iduser"];
        $re = $this->show2->check_thongtin($iduser);
        $gd = $this->show2->check_gd($iduser);
        if (mysqli_num_rows($re) == 0) {
            $ex = $this->show1->product_type();
            $this->view("master1", [
                "Page" => "nhap_thongtin",
                "type" => $ex,
            ]);
        } else {
            if (mysqli_num_rows($gd) > 0) {
                $ex = $this->show1->product_type();
                $this->view("master1", [
                    "Page" => "thongtinkh",
                    "gd" => $gd,
                    "data" => $re,
                    "type" => $ex,
                ]);
            } else {
                $ex = $this->show1->product_type();
                $this->view("master1", [
                    "Page" => "thongtinkh",
                    "data" => $re,
                    "type" => $ex,
                ]);
            }
        }
    }
    public function them_thongtinkh()
    {
        if (isset($_POST["nhap_thongtin"])) {
            if (empty($_POST["hoten"]) || empty($_POST["sdt"]) || empty($_POST["diachi"]) || empty($_POST["email"]) || strlen($_POST["sdt"]) < 11) {
                $not = "Vui lòng nhập đầy đủ thông tin";
                $ex = $this->show1->product_type();
                $this->view("master1", [
                    "Page" => "nhap_thongtin",
                    "not" => $not,
                    "type" => $ex,
                ]);
            } else {
                $iduser = $_POST["iduser"];
                $hoten = $_POST["hoten"];
                $sdt = $_POST["sdt"];
                $diachi = $_POST["diachi"];
                $email = $_POST["email"];
                $this->show2->them_thongtin($iduser, $hoten, $sdt, $diachi, $email);
                $re = $this->show2->check_thongtin($iduser);
                $ex = $this->show1->product_type();
                $this->view("master1", [
                    "Page" => "thongtinkh",
                    "data" => $re,
                    "type" => $ex,
                ]);
            }
        }
    }
    public function dangxuat()
    {
        $iduser = $_GET["iduser"];
        $this->show2->xoa_kh($iduser);
        setcookie("iduser", "", time() - (86400 * 30), "/");
        header("Location:../");
    }
    public function sua_thongtin()
    {
        if (isset($_POST["sua_tt"])) {
            $iduser = $_POST["iduser"];
            $re = $this->show2->sua_tt($iduser);
            $ex = $this->show1->product_type();
            $this->view("master1", [
                "Page" => "sua_thongtin",
                "data" => $re,
                "type" => $ex,
            ]);
        }
    }
    public function luu_thongtin()
    {
        if (isset($_POST["luu_tt"])) {
            $iduser = $_POST["iduser"];
            $hoten = $_POST["hoten"];
            $sdt = $_POST["sdt"];
            $diachi = $_POST["diachi"];
            $email = $_POST["email"];
            $this->show2->luu_tt($iduser, $hoten, $sdt, $diachi, $email);
            $re = $this->show2->check_thongtin($iduser);
            $ex = $this->show1->product_type();
            $this->view("master1", [
                "Page" => "thongtinkh",
                "data" => $re,
                "type" => $ex,
            ]);
        }
    }
    public function verify_otp()
    {
        if (isset($_SESSION['otp']) && isset($_GET['otp'])) {
            $otp = $_SESSION['otp'];
            $enteredOTP = $_GET['otp'];
            if ($enteredOTP == $otp) {
                $iduser = $_GET["iduser"];
                $message = 'True';
                $ex = $this->show1->product_type();
                $re = $this->show2->check_thongtin($iduser);
                $this->view("master1", [
                    "Page" => "thongtinkh",
                    "data" => $re,
                    "mess" => $message,
                    "type" => $ex,
                ]);
                unset($_SESSION['otp']);
            } else {
                $message = 'False';
                $ex = $this->show1->product_type();
                $this->view("master1", [
                    "Page" => "thongtinkh",
                    "data" => $message,
                    "type" => $ex,
                ]);
                unset($_SESSION['otp']);
            }
        }
    }
}
