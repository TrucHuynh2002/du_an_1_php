<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= $css ?>/container.css">
  <link rel="stylesheet" href="<?= $css ?>/base.css">
  <script src="<?= $js ?>/sidle.js"></script>
  <link rel="stylesheet" href="<?= $css ?>/sidle.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/c9376b777e.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="carousel slide">
    <img class="d-block w-100" src="<?= $img ?>/1920x580_atlas_.png" alt="">
    <div class="carousel-khoi">
      <img class="img-1" src="<?= $img ?>/1920x580_atlas_2.png" alt="">
      <img class="img-3" src="<?= $img ?>/1920x580_atlas_3.png">
      <img class="img-2" src="<?= $img ?>/1920x580_atlas_3_1.png" alt="">
    </div>
    <div class="tim_kiem">
      <form method="post" class="form-inline" action="<?= $kiemthu ?>/search.php?action=search">
        <input class="form-control mr-sm-2" style="width: 680px;font-size: 15px;" type="text" name="search" id="search_name" placeholder="Nhập địa chỉ hoặc dự án...">
        <button class="btn btn-primary" style="font-size: 15px;" name="sub_mit" type="submit">
          <i class="fas fa-search"></i>Tìm kiếm</button>
      </form>
      <div id="show_search">

      </div>
      <div class="row">
        <div class="dropdown">
          <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Loại bất động sản</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= $controller ?>/layout.php?bantin&danhmuc=1">Chung cư</a>
            <a class="dropdown-item" href="<?= $controller ?>/layout.php?bantin&danhmuc=4">Căn hộ cao cấp</a>
            <a class="dropdown-item" href="<?= $controller ?>/layout.php?bantin&danhmuc=6">Nhà ở</a>
            <a class="dropdown-item" href="<?= $controller ?>/layout.php?bantin&danhmuc=5">Đất Đai</a>
          </div>
        </div>
        <div class="dropdown">
          <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Mức giá</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= $controller ?>/layout.php?bantin&sotien1=0&sotien2=0.5">Dưới 500 triệu</a>
            <a class="dropdown-item" href="<?= $controller ?>/layout.php?bantin&sotien1=0.5&sotien2=1">500 -> 1 tỷ</a>
            <a class="dropdown-item" href="<?= $controller ?>/layout.php?bantin&sotien1=1&sotien2=2">1 -> 2 tỷ</a>
          </div>
        </div>
        <div class="dropdown ">
          <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Diện tích</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= $controller ?>/layout.php?bantin&dientich1=0&dientich2=30">Dưới 30m</a>
            <a class="dropdown-item" href="<?= $controller ?>/layout.php?bantin&dientich1=30&dientich2=50">30 -> 50m</a>
            <a class="dropdown-item" href="<?= $controller ?>/layout.php?bantin&dientich1=50&dientich2=100">50 -> 100m</a>
            <a class="dropdown-item" href="<?= $controller ?>/layout.php?bantin&dientich1=100&dientich2=9000">100m Trở Lên</a>
          </div>
        </div>
        <div class="dropdown">
          <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Địa chỉ</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= $controller ?>/layout.php?bantin&diachi=ha noi">Hà Nội</a>
            <a class="dropdown-item" href="<?= $controller ?>/layout.php?bantin&diachi=ho chi minh">TP.Hồ Chí Minh</a>
            <a class="dropdown-item" href="<?= $controller ?>/layout.php?bantin&diachi=can tho">TP.Cần Thơ</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="margin: 30px 0px;">
    <h3 class="text-center">TOP DỰ ÁN NỔI BẬT</h3>
    <hr width="8%" color="red">
    <p class="text-center">Tổng hợp các dự án nổi bật của bất động sản</p>
    <div class="row sidle text-center" id="sidle">
      <?php
      $row = ban_tin_top();
      foreach ($row as $a) {
      ?>
        <div class="col-sm-12 col-md-6 col-lg-3" style="margin: 20px 0 39px 0">
          <a href="<?= $controller ?>/layout.php?bantin_chitiet&id=<?= $a['id_san_pham'] ?>">
            <img class="img-fluid" style="height: 198px;;" src="<?= $img ?>/<?= $a['hinh_san_pham']; ?>" alt="">
          </a>
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
              <p><?= $a['gia_san_pham']; ?></p>
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
    </div>
  </div>

  <div class="container-fluid " style="margin: 30px 0px;">
    <h3 class="text-center">TIN TỨC NỔI BẬT</h3>
    <hr width="8%" color="red">
    <p class="text-center">Tổng hợp các tin tức thị trường nổi bật của bất động sản , pháp luật , cập nhật liên quan tới thị trường nhà đất</p>
    <div class="row" style="align-items: center;">
      <div class="col-sm-12 col-md-12 col-lg-3">
        <?php
        $row = bai_viet_luot_xem_cao_2_3();
        foreach ($row as $a) {
        ?>
          <div class="">
            <a href="<?= $controller ?>/layout.php?baiviet_chitiet&id=<?= $a['ID_bai_viet'] ?>"><img class="img-fluid" src="<?= $img ?>/<?= $a['hinh_bai_viet'] ?>" alt=""></a>
            <h6 style="margin-top: 20px; font-size:15px;color: #b71c1c;"><?= $a['ten_bai_viet'] ?></h6>
            <div class="row" style="align-items: baseline;margin-left:5px;font-size:15px;">
              <i class="far fa-clock" style="margin-right: 10px;"></i>
              <span><?= $a['ngay'] ?></span>
            </div>
          </div>
        <?php  } ?>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6">
        <?php
        $row = bai_viet_luot_xem_cao_nhat();
        foreach ($row as $a) {
        ?>
          <div class="">
            <a href="<?= $controller ?>/layout.php?baiviet_chitiet&id=<?= $a['ID_bai_viet'] ?>"><img style="width: 536px;height: 310px;" src="<?= $img ?>/<?= $a['hinh_bai_viet'] ?>" alt=""></a>
            <h1 style="margin-top: 19px;color: #b71c1c;color: #b71c1c;"><?= $a['ten_bai_viet'] ?></h1>
            <div class="row" style="align-items: baseline;margin-left:5px;font-size:18px;">
              <i class="far fa-clock" style="margin-right: 10px;"></i>
              <span><?= $a['ngay'] ?></span>
            </div>
            <div class="thongtin"></div>
            <p><?php
                $row = $a['noi_dung'];
                $b = strpos($row, "<img");
                $c = substr($row, 0, $b);
                echo $c;
                ?></p>
          </div>
        <?php } ?>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-3">
        <div class="row" style="align-items: baseline;margin-left:5px;color: #d17d0e;">
          <i class="fas fa-address-book" style="font-size: 20px;margin-right:15px"></i>
          <h3 style="font-size: 20px;">TIN KHÁC</h3>
        </div>
        <?php
        $row = bai_viet_luot_xem_cao_con_lai();
        foreach ($row as $a) {
        ?>
          <div class="row">
            <div style="margin-left: 20px;">
              <a style="color: #2e343a;font-size:15px;" href="<?= $controller ?>/layout.php?baiviet_chitiet&id=<?= $a['ID_bai_viet'] ?>"> <span style="margin-top: 20px; "><?= $a['ten_bai_viet'] ?></span></a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#search_name').keyup(function() {
        var search = $('#search_name').val()
        if (search != '') {
          $.ajax({
            url: "<?= $kiemthu ?>/search.php/search",
            type: "POST",
            data: {
              search: search
            },
            success: function(data) {
              $('$show_search').html(data)
            }
          })
        }
      })
    })
  </script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>