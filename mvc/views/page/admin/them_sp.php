<div class="nensp">
    <form class="them-sp" action="./them_sp" method="POST" enctype="multipart/form-data">
        <div>
            <label style="margin-right: 233px; margin-left: 70px;" for="">Hình ảnh</label>
            <input type="file" name="hinhanh">
        </div>
        <label style="margin-right: 156px; margin-left: 70px;" for="cars">Chọn loại sản phẩm:</label>
        <select name="id_loai" id="cars">
            <?php
            while ($row = mysqli_fetch_array($data["data"])) {
                ?>
                <option value="<?php echo $row["id_loai"] ?>">
                    <?php echo $row["tenloai"] ?>
                </option>
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
            <input type="text" name="mota">
        </div>
        <div>
            <label style="margin-right: 270px; margin-left: 70px;" for="">Giá:</label>
            <input type="text" name="gia">
        </div>
        <div>
            <label style="margin-right: 270px; margin-left: 70px;" for="">Size:</label>
            <select name="size">
                <option value="full">Full size</option>
            </select>
        </div>
        <div>
            <label style="margin-right: 270px; margin-left: 70px;" for="">Màu sắc:</label>
            <input type="text" name="mausac">
        </div>
        <div>
            <label style="margin-right: 270px; margin-left: 70px;" for="">Xuất xứ:</label>
            <input type="text" name="xuatxu">
        </div>
        <div>
            <a href="./list_sanpham">Quay lại</a>
            <button type="submit" name="themsp">Thêm sản phẩm</button>
        </div>
    </form>
</div>