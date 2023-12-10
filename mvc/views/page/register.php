<h1 class="name_form">ĐĂNG KÝ</h1>
<form class="form-login" action="./register" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <?php
    if (isset($data["not"]) and $data["not"] != "") {
    ?>
        <div style="color:red; margin-top:-10px;"><?php echo $data["not"]; ?></div>
    <?php
    }
    ?>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
    </div>
    <button type="submit" name="register" class="btn btn-primary">ĐĂNG KÝ</button>
</form>