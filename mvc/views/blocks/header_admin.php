<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a href="../admin/AdminShow" class="navbar-brand">CT SHOP</a>
    <form class="d-flex" action="./search" method="POST">
      <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" name="btn-search" type="submit">Search</button>
    </form>
  </div>
  <div class="btn-main">
    <button><a href="./AdminShow">Danh sách User</a></button>
    <button><a href="./list_khachhang">Danh sách khách hàng</a></button>
    <button><a href="./list_sanpham">Danh sách sản phẩm</a></button>
    <button><a href="./list_danhmuc">Danh sách danh mục</a></button>
    <button><a href="./list_donhang">Danh sách đơn hàng</a></button>
    <button><a href="./list_hoadon">Danh sách hóa đơn</a></button>
    <button><a href="./list_magiamgia">Danh sách mã giảm giá</a></button>
  </div>
</nav>