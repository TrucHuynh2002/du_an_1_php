<!doctype html>
<html lang="en">

<head>
    <title>Bài viết</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user'];
                $row = khach_hang_user($user);
                foreach ($row as $a) { ?>
                    <div class="col-md-8">
                        <div class="alert alert-danger">
                            <strong>
                                <h4 style="text-align: center;">Cập nhật tài khoản</h4>
                            </strong>
                        </div>
                        <form action="<?= $kiemthu ?>/taikhoan.php?action=edit" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <h5>Tài khoản</h5>
                                <input class="form-control" disabled value="<?= $a['ten_dang_nhap'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Hình</h5>
                                <input class="form-control" type="file" name="hinh" value="<?= $a['hinh'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Email</h5>
                                <input class="form-control" type="email" name="email" value="<?= $a['email'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Số điện thoại</h5>
                                <input class="form-control" name="sdt" value="<?= $a['sdt'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Địa chỉ</h5>
                                <input class="form-control" name="dia_chi" value="<?= $a['dia_chi'] ?>">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="sub_mit">Cập nhật</button>
                        </form>
                    </div>
            <?php }
            } ?>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>