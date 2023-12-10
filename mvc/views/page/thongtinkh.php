<link rel="stylesheet" href="../public/css/thongtin.css">
<h3>Thông tin khách hàng</h3>
<?php
while ($row = mysqli_fetch_array($data["data"])) {
?>
    <form class="infor" action="./sua_thongtin" method="POST">
        <input type="hidden" name="iduser" value="<?php echo $row["iduser"] ?>">
        <div class="atrr">
            <div>Họ tên khách hàng : </div>
            <div><?php echo $row["hoten"]; ?></div>
        </div>
        <div class="atrr">
            <div>Số điện thoại: </div>
            <div><?php echo $row["sdt"]; ?></div>
        </div>
        <div class="atrr">
            <div>Địa chỉ: </div>
            <div><?php echo $row["diachi"]; ?></div>
        </div>
        <input type="submit" name="sua_tt" value="Sửa thông tin">
    </form>
<?php
}
?>
<h3>Lịch sử giao dịch</h3>
<?php
if (isset($data["gd"])) {
    while ($row = mysqli_fetch_array($data["gd"])) {
?>
        <div class="infor">
            <div class="atrr">
                <div>Tên sản phẩm</div>
                <div><?php echo $row["tensp"] ?></div>
            </div>
            <div class="atrr">
                <div>Số lượng</div>
                <div><?php echo $row["soluong"] ?></div>
            </div>
            <div class="atrr">
                <div>Mã hóa đơn</div>
                <div><?php echo $row["MaDH"] ?></div>
            </div>
            <div class="atrr">
                <div>Thời gian</div>
                <div><?php echo $row["Thoigian"] ?></div>
            </div>
            <div class="atrr">
                <div>Mã giao dịch</div>
                <div><?php echo $row["MaGD"] ?></div>
            </div>
            <div class="atrr">
                <div>Số tiền</div>
                <?php
                $tong = $row["soluong"] * $row["gia"]
                ?>
                <div><?php echo number_format($tong, 0, ",", ".") ?>vnd</div>
            </div>

        </div>
    <?php
    }
} else {
    ?>
    <h3 style="text-align: center;" class="infor">Trống</h3>
<?php
}
?>