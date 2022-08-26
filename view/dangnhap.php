<?php include("../controller/gobal.php"); ?>
<!doctype html>
<html lang="en">

<head>
  <title>HP-SHOP</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= $css ?>/dangnhap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="alert alert-warning">
      <strong>THÀNH VIÊN ĐĂNG NHẬP</strong>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-log-6">
        <p class="text-danger">ĐĂNG NHẬP</p>
        <form method="post" action="<?= $kiemthu ?>/taikhoan.php?action=dangnhap">
          <div class="form-group">
            <input type="text" class="form-control" name="user" placeholder="Tên đăng nhập">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Mật khẩu">
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="" checked> Ghi nhớ
            </label>
          </div>
          <button type="submit" name="sub_mit" class="btn btn-primary btn-lg btn-block">ĐĂNG NHẬP</button>
          <button type="button" class="btn btn-light btn-lg btn-block">Hỗ trợ kỹ thuật : 0789.705.805</button>
        </form>
      </div>
      <div class="col-sm-12 col-md-6 col-log-6">
        <p>BẠN CHƯA CÓ TÀI KHOẢN? ĐĂNG KÝ NGAY!</p>
        <button type="button" class="btn btn-success btn-lg btn-block">
          <a href="<?= $view ?>/dangky.php" style="text-decoration: none; color:white;">ĐĂNG KÝ TÀI KHOẢN
          </a>
        </button>
        <button type="button" class="btn btn-danger btn-lg btn-block">
          <a href="<?= $view ?>/quen_mk_email.php" style="text-decoration: none; color:white;">QUÊN MẬT KHẨU
          </a>
        </button>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>