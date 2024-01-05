<style>
    .center-button {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 200px;
        /* Điều chỉnh chiều cao của nút */
    }

    .center-button {
        text-align: center;
        margin-top: 20px;
    }



    button {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        padding: 3px;
    }

    button:hover {
        background-color: #45a049;
    }
</style>
<div style="display: flex;flex-direction: column">
    <h3 style="margin:0 auto; margin-top:50px;">Mã otp đã được gửi, nhập mã vào bên dưới để hoàn tất đăng ký</h3>
    <form class="center-button" action="./register_otp" method="POST">
        <input type="hidden" id="email" name="email" value="<?php echo $data["data"] ?>">
        <input type="hidden" id="pass" name="pass" value="<?php echo $data["pass"] ?>">
        <label style="font-weight: 500; font-size:20px;" for="">Nhập mã otp</label>
        <input type="number" name="otp">
        <button name="submit" type="submit">Xác nhận</button>
    </form>
    <?php
    if (isset($data["mess"])) {
    ?>
        <div style="margin:0 auto; color:red;font-size: 20px;
    font-weight: 700 "><?php echo $data["mess"]; ?></div>
    <?php
    }
    ?>
</div>