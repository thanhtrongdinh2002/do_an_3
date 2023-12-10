
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="giohang" style = height:1500px>
    <?php
    if (isset($data["not"])) {
    ?>
        <div class="cart_empty">
            <h3 style="color:red; font-weight:700;"><?php echo $data["not"]; ?></h3>
            <img style="width:300px; height:250px;" src="../public/images/cart_empty_icon.png" alt=""></br>
            <button class="btn_cart"><a href="../">MUA HÀNG</a></button>
        </div>
    <?php
    } else {
    ?>
        <table class="t-border">
            <tr style="border: 1px solid black; height:30px; text-transform: uppercase;  ">
                <th>Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>số lượng</th>
                <th>thành tiền</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($data["data"])) {
            ?>
                <tr class="gh" style="border: 1px solid black; height:150px;">
                    <td><img style="width: 100px; height:100px;" src="../public/images/<?php echo $row["hinhanh"] ?>" alt=""></td>
                    <td><?php echo $row["tensp"] ?></td>
                    <td><?php echo number_format($row["gia"], 0, ",", ".") ?>vnd</td>
                    <td><?php echo $row["soluong"] ?></td>
                    <td><?php echo number_format($total = $row["gia"] * $row["soluong"], 0, ",", ".") ?>vnd</td>
                </tr>
            <?php
            }
            ?>
        </table>
        <form class="thanhtoan" action="../user_login/thanhtoan" method="POST">
            <input type="hidden" name="iduser" value="<?php echo $_COOKIE["iduser"]?>">
            <button name="thanhtoan" type="submit">Thanh toán qua ngân hàng</button>
        </form>
    <?php
    }
    ?>
</div>