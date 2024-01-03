<?php
$row = mysqli_fetch_array($data["data"])
?>
<div class="update-product">
    <form action="./check_capnhat" class="update" method="POST" enctype="multipart/form-data">
        <div class="update-form">
            <div>
                <label for="">Hình ảnh</label>
                <input type="file" name="hinhanh" value="<?php echo $row['hinhanh'] ?>">
                <img src="../public/images/<?php echo $row["hinhanh"]?>" alt="">
            </div>
            <div>
                <label style="margin-right: 195px; margin-left: 70px;" for="">Tên sản phẩm</label>
                <input type="text" name="tensp" value="<?php echo $row['tensp'] ?>">
            </div>
            <div>
                <label style="margin-right: 208px; margin-left: 70px;" for="">Thành phần</label>
                <input type="text" name="mota" value="<?php echo $row['mota'] ?>">
            </div>
            <div>
                <label style="margin-right: 270px; margin-left: 70px;" for="">Giá</label>
                <input type="text" name="gia" value="<?php echo $row['gia'] ?>">
            </div>
            <div>
                <label style="margin-right: 270px; margin-left: 70px;" for="">Size</label>
                <input type="text" name="size" value="<?php echo $row['size'] ?>">
            </div>
            <div>
                <label style="margin-right: 270px; margin-left: 70px;" for="">Màu sắc</label>
                <input type="text" name="mausac" value="<?php echo $row['mausac'] ?>">
            </div>
            <div>
                <label style="margin-right: 270px; margin-left: 70px;" for="">Xuất xứ</label>
                <input type="text" name="xuatxu" value="<?php echo $row['xuatxu'] ?>">
            </div>
            <input type="hidden" name="idsp" value="<?php echo $row["idsp"]?>">
            <div class="capnhat">
                <input type="submit" name="update" class="update-button" value="Cập nhật">
            </div>
        </div>
    </form>
</div>