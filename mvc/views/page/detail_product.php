<link rel="stylesheet" href="../public/css/style.css">
<link rel="stylesheet" href="../public/css/detail_product.css">
<link rel="stylesheet" href="../bootstrap-5.0.2/dist/css/bootstrap.min.css">
<div class="bg">
    <div class="detail">
        <?php
        $row = mysqli_fetch_array($data["data"]);
        ?>
        <div class="img">
            <img src="../public/images/<?php echo $row["hinhanh"] ?>" alt="">
        </div>
        <div class="infor">
            <div class="name"><?php echo $row["tensp"] ?></div>
            <div class="ingredient">Mô tả: <?php echo $row["mota"] ?></div> <hr>
            <div class="ingredient">Màu sắc: <?php echo $row["mausac"] ?></div> <hr>
            <div class="ingredient">Xuất xứ: <?php echo $row["xuatxu"] ?></div> <hr>
            <div class="price"><?php echo number_format($row["gia"], 0, ",", ".") ?> VND</div>
            <form action="/mvc1/user_login/them_giohang" method="POST">
                <span>Số lượng</span>
                <input type="hidden" name="idsp" value="<?php echo $row["idsp"] ?>">
                <input name="soluong" min="1" style="width: 40px;" type="number" value="1"> <hr>
                <button class="button" type="submit" name="them_giohang">Thêm vào giỏ hàng</button>
            </form>
            
        </div>
        <?php
        ?>
    </div>
</div>