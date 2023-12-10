<?php
$row = mysqli_fetch_array($data["data"])
?>
<div class="update-product">
    <form action="./check_capnhat" class="update" method="POST" enctype="multipart/form-data">
        <div class="update-form">
            <div>
                <label for="">Hình ảnh</label>
                <input type="file" name="hinhanh" value="">
                <img src="../public/images/<?php echo $row["hinhanh"]?>" alt="">
            </div>
            <div>
                <label style="margin-right: 195px; margin-left: 70px;" for="">Tên sản phẩm</label>
                <input type="text" name="tensp" value="<?php echo $row['tensp'] ?>">
            </div>
            <div>
                <label style="margin-right: 208px; margin-left: 70px;" for="">Thành phần</label>
                <input type="text" name="thanhphan" value="<?php echo $row['thanhphan'] ?>">
            </div>
            <div>
                <label style="margin-right: 270px; margin-left: 70px;" for="">Giá</label>
                <input type="text" name="gia" value="<?php echo $row['gia'] ?>">
            </div>
            <input type="hidden" name="idsp" value="<?php echo $row["idsp"]?>">
            <div class="capnhat">
                <input type="submit" name="update" class="update-button" value="Cập nhật">
            </div>
        </div>
    </form>
</div>