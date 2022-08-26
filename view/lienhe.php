<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= $css ?>/lienhe.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/c9376b777e.js" crossorigin="anonymous"></script>

</head>

<body>
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <div class="div1">
        <h5>Thông tin liên hệ</h5>
        <form method="post" action="<?= $kiemthu ?>/taikhoan.php?action=lienhe">
          <input class="form-control" type="text" value=" <?php if (isset($_SESSION['user'])) {
                                                            echo $_SESSION['user'];
                                                          } else {
                                                            echo "Vui lòng đăng nhập ";
                                                          }
                                                          ?> " disabled>
          <input class="form-control" type="text" name="noi_dung" placeholder="Thông tin cần hổ trợ">
          <button name="sub_mit" type="submit" class="btn btn-primary"> Gửi thông tin</button>
        </form>

      </div>
    </div>
    <div class="col-sm-12 col-md-6 khoi-thong-tin">
      <h5>HỆ THỐNG THƯƠNG MẠI BẤT ĐỘNG SẢN HUYNH PHAT</h5>
      <div class="div">
        <i class="fas fa-map-marker-alt"> </i>
        <p>Văn phòng Tuyển sinh: Số 288, Nguyễn Văn Linh, phường An Khánh, quận Ninh Kiều, Tp. Cần Thơ</p>
      </div>
      <div class="div">
        <i class="fas fa-phone-alt"></i>
        <p>0339494949</p>
      </div>
      <div class="div">
        <i class="fas fa-envelope-square"></i>
        <p>info@hptkw.vn</p>
      </div>
    </div>
  </div>
  <div class="text-center">
    <div class="div2">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62860.41859751093!2d105.72057093568286!3d10.035321163629993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0883fbc944b83%3A0x77fc34233e5e1320!2zTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1638327862876!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>