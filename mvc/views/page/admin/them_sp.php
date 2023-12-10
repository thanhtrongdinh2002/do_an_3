<div class="nensp">
    <form class="them-sp" action="./them_sp" method="POST" enctype="multipart/form-data">
        <label style="margin-right: 156px; margin-left: 70px;" for="cars">chọn loại sản phẩm:</label>
        <select name="id_loai" id="cars">
            <?php
            while ($row = mysqli_fetch_array($data["data"])) {
            ?>
                <option value="<?php echo $row["id_loai"]?>"><?php echo $row["tenloai"] ?></option>
            <?php
            }
            ?>
        </select>
        <div>
            <label style="margin-right: 196px; margin-left: 70px;" for="">Tên sản phẩm:</label>
            <input type="text" name="tensp">
        </div>
        <div>
            <label style="margin-right: 210px; margin-left: 70px;" for="">Thành phần:</label>
            <input type="text" name="thanhphan">
        </div>
        <div>
            <label style="margin-right: 270px; margin-left: 70px;" for="">Giá:</label>
            <input type="text" name="gia">
        </div>
        <div>
            <label style="margin-right: 233px; margin-left: 70px;" for="">Hình ảnh</label>
            <input type="file" name="hinhanh">
        </div>
        <button type="submit" name="themsp">Thêm sản phẩm</button>
    </form>
</div>