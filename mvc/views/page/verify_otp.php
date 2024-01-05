<style>
    .center-button {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 300px;
        /* Điều chỉnh chiều cao của nút */
    }

    .center-button button {
        font-size: 24px;
        /* Điều chỉnh kích thước chữ của nút */
        padding: 20px 40px;
        /* Điều chỉnh kích thước nút */
        border-radius: 7px;
        color: #09acef;
        font-size: 20px;
        font-weight: 700;
    }
</style>
<?php
if (isset($data["data"])) {
?>
    <form class="center-button" action="../sendmail.php" method="POST">
        <input type="hidden" id="email" name="email" value="<?php echo $data["data"] ?>">
        <input type="hidden" id="pass" name="pass" value="<?php echo $data["pass"] ?>">
        <button name="sub_email" type="submit">Lấy mã OTP</button>
    </form>
<?php
}
?>