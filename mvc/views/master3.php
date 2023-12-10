<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/mvc1/public/css/admin.css">
    <link rel="stylesheet" href="/mvc1/public/css/capnhat.css">
    <link rel="stylesheet" href="/mvc1/public/css/them_danhmuc.css">
    <link rel="stylesheet" href="/mvc1/public/css/them_sp.css">
    <link rel="stylesheet" href="/mvc1/bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "../mvc1/mvc/views/blocks/header_admin.php";
    ?>
    <?php
    require_once "../mvc1/mvc/views/page/admin/" . $data["Page"] . ".php";
    ?>
</body>

</html>