<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['quyen'])) {
    if ($_SESSION['quyen'] != "admin" ) {
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
    <h1 >Danh sách User</h1>
    <div>
        <button><a href="./nhap_taikhoan">Thêm Tài khoản</a></button>
    </div>
    <div class="nen">
        <table>
            <tr>
                <th>Tên tài khoản</th>
                <th>Mật khẩu</th>
                <th>Quyền</th>
                <th>Cập nhật</th>
                <th>Xoá</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($data["data"])) {
            ?>
                <tr style="border: 1px solid black;">
                    <td><?php echo $row["username"] ?></td>
                    <td><?php echo $row["pass"] ?></td>
                    <td><?php echo $row["quyen"] ?></td>
                    <td><a href="./editTaikhoan&uid=<?php echo $row["uid"]?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td><a href="./DeleteTaikhoan&uid=<?php echo $row["uid"]?>"><i class="fa-solid fa-trash"></i></a></td>
                <?php
            }
                ?>
        </table>
    </div>
</div>