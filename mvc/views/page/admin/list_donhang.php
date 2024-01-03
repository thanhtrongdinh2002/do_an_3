<?php
if(isset($data["not"])){
    ?>
    <script>alert(<?php echo $data["not"]?>)</script>
    <?php
}
?>
<div class="list-product">
    <h1 >Danh sách khách hàng</h1>
    <div>
        <button><a href="./nhap_khachhang">Thêm khách hàng</a></button>
    </div>
    <div class="nen">
        <table>
            <tr>
                <th>Họ và tên</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Ngày tạo</th>
                <th>Xóa</th>
                <th>Cập nhật</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($data["data"])) {
            ?>
                <tr style="border: 1px solid black;">
                    <td><?php echo $row["hoten"] ?></td>
                    <td><?php echo $row["sdt"] ?></td>
                    <td><?php echo $row["diachi"] ?></td>
                    <td><?php echo $row["ngaytao"] ?></td>
                    <td><a href="./DeleteKhachhang&iduser=<?php echo $row["iduser"]?>"><i class="fa-solid fa-trash"></i></a></td>
                    <td><a href="./editKhachhang&iduser=<?php echo $row["iduser"]?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <?php
            }
                ?>
        </table>
    </div>
</div>