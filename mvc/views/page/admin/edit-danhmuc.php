<?php
$row = mysqli_fetch_array($data["data"])
?>
<div class="update-product">
    <form action="./check_editDanhmuc" class="update" method="POST" enctype="multipart/form-data">
        <div class="update-form">
            <div>
                <label style="margin-right: 195px; margin-left: 70px;" for="">Tên loại: </label>
                <input type="text" name="tenloai" value="<?php echo $row['tenloai'] ?>">
            </div>
            <input type="hidden" name="id_loai" value="<?php echo $row["id_loai"]?>">
            <div class="capnhat">
                <input type="submit" name="update" class="update-button" value="Cập nhật">
            </div>
        </div>
    </form>
</div>