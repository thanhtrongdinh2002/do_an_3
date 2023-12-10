<?php
class Home extends Controller
{
    public $show1;
    public $ex;

    public function __construct()
    {
        $this->show1 = $this->model("ShowModel");
    }
    public function index()
    {
        return $this->view('master1');
    }
    public function Show()
    {
        $re = $this->show1->ShowProduct();
        $ex = $this->show1->product_type();

        //View
        $this->view("master1", ["Page" => "product",
                                "data" => $re,
                                "type" => $ex,
                                
    ]);
    }
    public function ShowDetail()
    {
        if(isset($_GET["idsp"])){
            $idsp = $_GET["idsp"];
        }
        $re = $this->show1->ShowDetail($idsp);
        $ex = $this->show1->product_type();
        //view
        $this->view("master1", ["Page" => "detail_product",
                                "data" => $re,
                                "type" => $ex,
    ]);
    }
    public function search(){
        if(isset($_POST["btn-search"]) && !empty($_POST["search"])){
            $search = $_POST["search"];
            $re = $this->show1->fsearch($search);
            $ex = $this->show1->product_type();
            return $this->view("master1",["Page" => "search",
                                    "data_search" => $re,
                                    "type" => $ex,
                                ]);
        }else{
            $not = "Không tìm thấy sản phẩm nào";
            $ex = $this->show1->product_type();
            return $this->view("master1",["Page"=>"search",
                                        "not" => $not,
                                        "type" => $ex,
        ]);
        }
    }
    public function Show_danhmuc(){
        if(isset($_GET["id_loai"])){
            $id_loai = $_GET["id_loai"];
        }
        $re = $this->show1->Show_danhmuc($id_loai);
        $ex = $this->show1->product_type();
        //view
        $this->view("master1", ["Page" => "danhmuc",
                                "data" => $re,
                                "type" => $ex,
    ]);
    }
    
}
