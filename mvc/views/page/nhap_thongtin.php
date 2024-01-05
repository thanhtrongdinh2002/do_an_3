<link rel="stylesheet" href="../public/css/style.css">
<link rel="stylesheet" href="/mvc1/bootstrap-5.0.2/dist/css/bootstrap.min.css">

<form class="nhap" action="./them_thongtinkh" method="POST">
    <input type="hidden" name="iduser" value="<?php echo $_COOKIE["iduser"] ?>">
    <div class="kh">
        <label for="">Họ tên khách hàng</label>
        <input type="text" name="hoten">
    </div>
    <div class="kh">
        <label for="">Số điện thoại</label>
        <input type="number" name="sdt">
    </div>
    <div class="kh">
        <label for="">Địa chỉ</label>
        <input type="text" name="diachi">
    </div>
    <?php
    if (isset($data["not"])) {
    ?>
        <h5><?php echo $data["not"] ?></h5>
    <?php
    }
    ?>

    <button type="submit" name="nhap_thongtin">Thêm thông tin khách hàng</button>
</form>