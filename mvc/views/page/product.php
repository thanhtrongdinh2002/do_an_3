<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-sm-4">
    <?php
    while ($row = mysqli_fetch_array($data["data"])) {
    ?>
      <div class="col">
        <div class="card-menu" style="width: 18em ;">
          <img src="../mvc1/public/images/<?php echo $row["hinhanh"]?>" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="./Home/ShowDetail&idsp=<?php echo $row["idsp"]?>"><h5 class="card-title"><?php echo $row["tensp"]?></h5></a>
            <a href="#" class="btn btn-primary"><?php echo number_format($row["gia"], 0, ",", ".")?> vnd</a>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>