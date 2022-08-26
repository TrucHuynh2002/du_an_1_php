<!doctype html>
<html lang="en">

<head>
  <title>HP-SHOP</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Boxicons link-->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= $css ?>/tt-taikhoan.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/c9376b777e.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container-fluid" style="line-height: 40px;">
    <div class="alert alert-danger">
      <strong>
        <h4 style="text-align: center;">THÔNG TIN CÁ NHÂN</h4>
      </strong>
    </div>
    <?php
    if (isset($_SESSION['user'])) {
      $user = $_SESSION['user'];
      $row = khach_hang_user($user);
      foreach ($row as $a) {
    ?>
        <table class="table table-light" style="width: 36%;">
          <tbody>
            <tr>
              <td><i class='bx bx-user'></i> Tên đăng nhập</td>
              <td><?= $a['ten_dang_nhap'] ?></td>
            </tr>
            <tr>
              <td><i class='bx bx-mail-send'></i> Pass</td>
              <td class="input">
                <input class="form-control" value="<?php echo sha1($a['pass']); ?>" type="password">
                <span class="show-btn"><i class="fas fa-eye"></i></span>
              </td>
            </tr>
            <tr>
              <td><i class='bx bx-mail-send'></i> Email</td>
              <td><?= $a['email'] ?></td>
            </tr>
            <tr>
              <td><i class='bx bx-phone-call'></i> Số điện thoại </td>
              <td><?= $a['sdt'] ?></td>
            </tr>
            <tr>
              <td><i class='bx bx-map-pin'></i> Địa chỉ</td>
              <td><?= $a['dia_chi'] ?></td>
            </tr>
            <tr>
              <td><i class='bx bx-id-card'></i> Vai trò</td>
              <td><?= $a['vai_tro'] ?></td>
            </tr>
            <?php
            $row = tin_da_dang($user);
            foreach ($row as $a) { ?>
              <tr>
                <td><i class="fas fa-adjust"></i> Số tin đã đăng</td>
                <td><?= $a['tong'] ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <div class="row">
          <a href="<?= $taikhoan ?>/layout.php?tai_khoan_edit"><button type="button" class="btn btn-outline-success">Cập nhật thông tin</button></a>
          <a href="<?= $taikhoan ?>/layout.php?tai_khoan_change"><button type="button" class="btn btn-outline-success">Đổi mật khẩu</button></a>
          <form method="post" action="<?= $kiemthu ?>/taikhoan.php?action=dangxuat">
            <button type="submit" class="btn btn-outline-success" name="dang_xuat">Đăng Xuất</button>
          </form>
        </div>
    <?php }
    } else {
      echo "khong ton tai ss";
    }
    ?>
  </div>
  <script>
    const passField = document.querySelector("input");
    const showBtn = document.querySelector("span i");
    showBtn.onclick = (() => {
      if (passField.type === "password") {
        passField.type = "text";
        showBtn.classList.add("hide-btn");
      } else {
        passField.type = "password";
        showBtn.classList.remove("hide-btn");

      }
    });
  </script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>