<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['quyen'])) {
    if ($_SESSION['quyen'] != 1 ) {
        header("location:../");
    }
}else{
    header("location:../");
}
if(isset($data["not"])){
    ?>
    <script>alert(<?php echo $data["not"]?>)</script>
    <?php
}
?>
<div class="list-product">
    <h1 >Danh sách sản phẩm</h1>
    <div class="btn-main">
        <button><a href="./nhap_sp">Thêm sản phẩm</a></button>
        <button><a href="./nhap_danhmuc">Thêm danh mục</a></button>
    </div>
    <div class="nen">
        <table>
            <tr>
                <th>Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Thành phần</th>
                <th>Giá</th>
                <th>Xoá</th>
                <th>Cập nhật</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($data["data"])) {
            ?>
                <tr style="border: 1px solid black;">
                    <td><img style="width:100px; height:100px;padding:5px;" src="/mvc1/public/images/<?php echo $row["hinhanh"] ?>" class="card-img-top" alt="..."></td>
                    <td><?php echo $row["tensp"] ?></td>
                    <td><?php echo $row["thanhphan"] ?></td>
                    <td><?php echo number_format($row['gia'], 0, ",", ".") ?>₫</td>
                    <td><a href="./DeleteProduct&idsp=<?php echo $row["idsp"]?>"><i class="fa-solid fa-trash"></i></a></td>
                    <td><a href="./capnhat&idsp=<?php echo $row["idsp"]?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <?php
            }
                ?>
        </table>
    </div>
</div>