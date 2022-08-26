<!doctype html>
<html lang="en">

<head>
  <title>HP-SHOP</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- <script src="<?= $js ?>/sidle.js"></script> -->
  <link rel="stylesheet" href="<?= $css ?>/container.css">
  <link rel="stylesheet" href="<?= $css ?>/sidle.css">
  <link rel="stylesheet" href="<?= $css ?>/base.css">
  <script src="<?= $js ?>/sidle.js"></script>
  <script src="https://kit.fontawesome.com/c9376b777e.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="row sidle text-center" id="sidle">
    <?php
    $row = ban_tin_danh_muc($danh_muc);
    foreach ($row as $a) {
    ?>
      <div class="col-sm-12 col-md-6 col-lg-3" style="margin: 20px 0 39px 0">
        <a href="<?= $controller ?>/layout.php?bantin_chitiet&id=<?= $a['id_san_pham'] ?>"><img class="img-fluid" style="height: 198px;;" src="<?= $img ?>/<?= $a['hinh_san_pham']; ?>" alt=""></a>
        <div class="">
          <h4 class="card-title">Dự án bất động sản</h4>
          <div class="card-body">
            <div>
              <i style="margin: 0 6px;" class="fas fa-map-marker-alt"></i>
              <p> Địa chỉ:</p>
            </div>
            <p> <?= $a['dia_chi']; ?></p>
          </div>
          <div class="card-body">
            <div>
              <i style="margin: 0 6px;" class="fas fa-boxes"></i>
              <p>Diện tích:</p>
            </div>
            <p><?= $a['dien_tich']; ?></p>
          </div>
          <div class="card-body">
            <div>
              <i style="margin: 0 6px;" class="fas fa-hryvnia"></i>
              <p>Giá: </p>
            </div>
            <p><?= $a['gia_san_pham']; ?>Tỷ</p>
          </div>
          <div class="card-body">
            <div>
              <i style="margin: 0 6px;" class="fas fa-laptop-house"></i>
              <p> Pháp lý:</p>
            </div>
            <p><?= $a['phap_ly']; ?></p>
          </div>
        </div>
      </div>
    <?php } ?>
    <div id="trai" class="trai" onclick="left()"><i class="fas fa-angle-left"></i></div>
    <div id="phai" class="phai" onclick="right()"><i class="fas fa-angle-right"></i></div>
    <!-- <div class="text-center">
      <a href="#" class="btn btn-danger ">XEM TẤT CẢ DỰ ÁN <img src="img/arrow.png" alt="" width="20px"></a>
    </div> -->
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>