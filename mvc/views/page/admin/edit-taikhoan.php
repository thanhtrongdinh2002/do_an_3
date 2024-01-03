<?php
$row = mysqli_fetch_array($data["data"])
?>
<div class="update-product">
    <form action="./check_editTaikhoan" class="update" method="POST" enctype="multipart/form-data">
        <div class="update-form">
            <div>
                <label style="margin-right: 195px; margin-left: 70px;" for="">Tên tài khoản: </label>
                <input type="text" name="username" value="<?php echo $row['username'] ?>">
            </div>
            <div>
                <label style="margin-right: 208px; margin-left: 70px;" for="">Mật khẩu: </label>
                <input type="text" name="pass" value="<?php echo $row['pass'] ?>">
            </div>
            <input type="hidden" name="uid" value="<?php echo $row["uid"]?>">
            <div class="capnhat">
                <input type="submit" name="update" class="update-button" value="Cập nhật">
            </div>
        </div>
    </form>
</div>