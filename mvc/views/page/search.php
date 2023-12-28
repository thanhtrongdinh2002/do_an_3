<link rel="stylesheet" href="../public/css/product.css">
<link rel="stylesheet" href="../bootstrap-5.0.2/dist/css/bootstrap.min.css">
<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    <?php
    if (isset($data["data_search"])) {
      while ($row = mysqli_fetch_array($data["data_search"])) {
    ?>
        <div class="col">
          <div class="card menu" style="width: 18rem;">
            <img src="../public/images/<?php echo $row["hinhanh"] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <a href="./detail_product.php/ShowDetail&idsp=<?php echo $row["idsp"] ?>">
                <h5 class="card-title"><?php echo $row["tensp"] ?></h5>
              </a>
              <a href="#" class="btn btn-primary"><?php echo number_format($row["gia"], 0, ",", ".") ?> vnd</a>
            </div>
          </div>
        </div>
      <?php
      }
    }
    if (isset($data["not"])) {
      ?>
      <h3 style="width: 500px;margin: 0 auto;min-height: 40vh; margin-top: 18vh;"><?php echo $data["not"]; ?></h3>
    <?php
    }
    ?>
  </div>
</div>