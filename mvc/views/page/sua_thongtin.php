<?php
while ($row = mysqli_fetch_array($data["data"])) {
?>
    <form class="nhap" action="../user_login/luu_thongtin" method="POST">
        <input type="hidden" name="iduser" value="<?php echo $row["iduser"] ?>">
        <div>
            <label for="">Họ tên khách hàng</label>
            <input type="text" name="hoten" value="<?php echo $row["hoten"] ?>">
        </div>
        <div>
            <label for="">Số điện thoại</label>
            <input type="text" name="sdt" value="<?php echo $row["sdt"] ?>">
        </div>
        <div>
            <label for="">Địa chỉ</label>
            <input type="text" name="diachi" value="<?php echo $row["diachi"] ?>">
        </div>
        <button type="submit" name="luu_tt">Lưu thông tin</button>
    </form>
<?php
}
?>