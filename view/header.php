<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= $css ?>/header.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <div class="row header">
      <div class="col-3">
        <i class="far fa-envelope"></i> info@hpnhadat.vn
        <i class="fas fa-phone"></i> 18006000
      </div>
      <div class="col-4">
        <a style="text-decoration: none" href="<?= $controller ?>/layout.php?goi_dang_tin">BẢNG GIÁ</a>
        <a style="text-decoration: none" href="<?= $controller ?>/layout.php?cart">GIỎ HÀNG</a>
        <?php if (isset($_SESSION['user'])) {
        ?>
          <a name="" id="" class="btn btn-primary" href="<?= $taikhoan ?>/layout.php?tai_khoan_list" role="button"> <i class="fas fa-users"></i> Tài Khoản</a>
        <?php
        } else {
        ?>
          <a style="text-decoration: none" href="<?= $view ?>/dangnhap.php">ĐĂNG NHẬP</a>
        <?php
        } ?>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
      <img src="<?= $img ?>/logo.png" alt="" class="img-fluid logo">
    </a>
    <!-- menu -->

    <div id="my-nav" class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?= $controller ?>/layout.php">TRANG CHỦ <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <button id="my-dropdown" style="padding: 26px 5px;" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MUA BÁN NHÀ ĐẤT</button>
          <div class="dropdown-menu menu" aria-labelledby="my-dropdown">
            <a class="dropdown-item active" href="<?= $controller ?>/layout.php?bantin&id=2">Bán chung cư</a>
            <a class="dropdown-item" href="<?= $controller ?>/layout.php?bantin&id=1">Bán căn hộ cao cấp</a>
            <a class="dropdown-item" href="<?= $controller ?>/layout.php?bantin&id=3">Bán Đất</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $controller ?>/layout.php?tintuc" tabindex="-1" aria-disabled="true">TIN TỨC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $controller ?>/layout.php?lienhe" tabindex="-1" aria-disabled="true">LIÊN HỆ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $controller ?>/layout.php?gioithieu" tabindex="-1" aria-disabled="true">GIỚI THIỆU</a>
        </li>
      </ul>
    </div>
    <!-- button đăng tin -->
    <div class="col-sm-2">
      <a name="" id="" class="btn btn-danger" href="<?= $controller ?>/layout.php?dang_tin" role="button"><i class="fas fa-phone"></i> ĐĂNG TIN</a>
    </div>
  </nav>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>