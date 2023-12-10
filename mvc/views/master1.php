<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mvc1/public/css/product.css">
    <link rel="stylesheet" href="/mvc1/public/css/detail_product.css">
    <link rel="stylesheet" href="/mvc1/public/css/style.css">
    <link rel="stylesheet" href="/mvc1//public/css/detail_product.css">
    <link rel="stylesheet" href="/mvc1//public/css/thanhtoan.css">
    <link rel="stylesheet" href="/mvc1//public/css/thongtin.css">
    <link rel="stylesheet" href="/mvc1//public/css/giohang.css">
    <link rel="stylesheet" href="/mvc1//public/css/sua_thongtin.css">
    <link rel="stylesheet" href="/mvc1/public/css/nhap_thongtin.css">
    <link rel="stylesheet" href="/mvc1/bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title></title>
</head>

<body>
    <div class="header">
        <?php
        require_once "../mvc1/mvc/views/blocks/header.php";
        ?>
    </div>

    <div class="content">
        <?php
        require_once "../mvc1/mvc/views/page/" . $data["Page"] . ".php"
        ?>
    </div>

    <div class="footer">
        <?php
        require_once "../mvc1/mvc/views/blocks/footer.php";
        ?>
    </div>
</body>

</html>