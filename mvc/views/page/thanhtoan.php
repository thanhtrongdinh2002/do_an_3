<table style="width: 100vw;">
    <tr>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
    </tr>
    <?php
    $tong = 0;
     while ($row = mysqli_fetch_array($data["data"])) {
    ?>

            <tr>
                <td><?php echo $row["tensp"] ?></td>
                <td><?php echo number_format($row["gia"], 0, ",", ".") ?>vnd</td>
                <td><?php echo $row["soluong"] ?></td>
                <?php
                $total = ($row["gia"] * $row["soluong"]);
                ?>
                <td><?php echo number_format($total, 0, ",", ".") ?>vnd</td>
            </tr>
    <?php
            $tong = $tong + $total;
        }
    ?>
</table>
<div><?php echo number_format($tong, 0, ",", ".") ?>vnd</div>
<form class="thanhtoan" action="../vnpay_php/index.php" method="POST">
    <input type="hidden" name="thanhtien" value="<?php echo $tong ?>">
    <button name="btn_thanhtoan" type="submit">Thanh toán</button>
</form>