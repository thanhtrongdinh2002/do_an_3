<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="/mvc1"><i class="bi bi-shop"> </i>CT Bakery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
        while ($row = mysqli_fetch_array($data["type"])) {
        ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/mvc1/Home/Show_danhmuc&id_loai=<?php echo $row["id_loai"]?>"><?php echo $row["tenloai"]?></a>
          </li>
        <?php
        }
        ?>
        <?php
        if (!isset($_COOKIE["iduser"])) {
        ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/mvc1/user_login/ShowLogin">Đăng nhập</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/mvc1/user_login/ShowRegister">Đăng ký</a>
          </li>
        <?php
        } else {
          $iduser = $_COOKIE["iduser"];
        ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/mvc1/user_login/thongtinkh&iduser=<?php echo $iduser ?>">Thông tin khách hàng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/mvc1/user_login/dangxuat&iduser=<?php echo $iduser ?>">Đăng xuất</a>
          </li>
        <?php
        }
        ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/mvc1/user_login/show_giohang">GIỎ HÀNG <i class="bi bi-cart"></i></a>
        </li>
      </ul>
      <form class="d-flex" action="/mvc1/Home/search" method="POST">
        <input class="form-control me-2" type="search" name="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search">
        <button class="btn btn-outline-secondary" name="btn-search" type="submit"><i class="bi bi-search"></i></button>
      </form>
    </div>
  </div>
</nav>
<script src="../bootstrap-5.0.2/dist/css/bootstrap.bundle.min.js"></script>