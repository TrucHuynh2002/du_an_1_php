<?php include("../controller/gobal.php"); ?>
<!doctype html>
<html lang="en">

<head>
  <title>HP-SHOP</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="alert alert-warning">
      <strong>THÀNH VIÊN ĐĂNG KÝ</strong>
    </div>
    <div class="row">
      <div class="col-8" style="margin: auto;">
        <h4 style="text-align: center;">
          <p class="text-danger">ĐĂNG KÝ TÀI KHOẢN</p>
        </h4>
        <form method="post" action="<?= $kiemthu ?>/taikhoan.php?action=dangky">
          <div class="form-group">
            <input type="text" class="form-control" name="user" placeholder="Họ và tên">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Mật khẩu">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="nl_pass" placeholder="Nhập lại mật khẩu">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="sdt" placeholder="Điện thoại">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="dia_chi" placeholder="Địa chỉ">
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="check" checked>
              Tôi đồng ý với các điều khoản của HP-SHOP
            </label>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub_mit">ĐĂNG KÝ</button>
          <button class="btn btn-light btn-lg btn-block">Hỗ trợ kỹ thuật : 0789.705.805</button>
        </form>
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