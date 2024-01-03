<?php
if(isset($data["not"])){
    ?>
    <script>alert(<?php echo $data["not"]?>)</script>
    <?php
}
?>
<div class="list-product">
    <h1 >Danh sách danh mục</h1>
    <div>
        <button><a href="./nhap_danhmuc">Thêm danh mục</a></button>
    </div>
    <div class="nen">
        <table>
            <tr>
                <th>Tên danh mục</th>
                <th>Xóa</th>
                <th>Cập nhật</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($data["data"])) {
            ?>
                <tr style="border: 1px solid black;">
                    <td><?php echo $row["tenloai"] ?></td>
                    <td><a href="./Deletecategory&id_loai=<?php echo $row["id_loai"]?>"><i class="fa-solid fa-trash"></i></a></td>
                    <td><a href="./editDanhmuc&id_loai=<?php echo $row["id_loai"]?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <?php
            }
                ?>
        </table>
    </div>
</div>