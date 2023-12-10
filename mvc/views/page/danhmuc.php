<link rel="stylesheet" href="../public/css/style.css">
<link rel="stylesheet" href="../public/css/product.css">
<link rel="stylesheet" href="../bootstrap-5.0.2/dist/css/bootstrap.min.css">
<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    <?php
    while ($row = mysqli_fetch_array($data["data"])) {
    ?>
      <div class="col">
        <div class="card-menu" style="width: 18rem;">
          <img src="../../mvc1/public/images/<?php echo $row["hinhanh"]?>" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="./ShowDetail&idsp=<?php echo $row["idsp"]?>"><h5 class="card-title"><?php echo $row["tensp"]?></h5></a>
            <p class="card-text"><?php echo $row["thanhphan"]?></p>
            <a href="#" class="btn btn-primary"><?php echo number_format($row["gia"], 0, ",", ".")?> vnd</a>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>