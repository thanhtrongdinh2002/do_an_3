<?php
$row = mysqli_fetch_array($data["data"])
?>
<div class="update-product">
    <form action="./check_editKhachhang" class="update" method="POST" enctype="multipart/form-data">
        <div class="update-form">
            <div>
                <label style="margin-right: 195px; margin-left: 70px;" for="">Họ và tên: </label>
                <input type="text" name="hoten" value="<?php echo $row['hoten'] ?>">
            </div>
            <div>
                <label style="margin-right: 208px; margin-left: 70px;" for="">Số điện thoại: </label>
                <input type="text" name="sdt" value="<?php echo $row['sdt'] ?>">
            </div>
            <div>
                <label style="margin-right: 208px; margin-left: 70px;" for="">Địa chỉ: </label>
                <input type="text" name="diachi" value="<?php echo $row['diachi'] ?>">
            </div>
            <input type="hidden" name="iduser" value="<?php echo $row["iduser"]?>">
            <div class="capnhat">
                <input type="submit" name="update" class="update-button" value="Cập nhật">
            </div>
        </div>
    </form>
</div>