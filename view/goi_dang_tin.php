<!doctype html>
<html lang="en">

<head>
    <title>HP-SHOP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- link Boxicons-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= $css ?>/goi_dang_tin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="alert alert-success">
            <strong>
                <h4 style="text-align: center;">CÁC LOẠI GÓI ĐĂNG TIN</h4>
            </strong>
        </div>
        <div class="card-deck">
            <?php
            $row = goi_dan_tin();
            foreach ($row as $a) {
            ?>
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <p class="card-text">
                            <?= $a['ten_goi_bang_tin'] ?>
                        </p>
                        <p class="card-text">Cho khách hàng đã mua gói lâu năm</p>
                        <p class="card-text">
                            <?= $a['gia'] ?><sub>VND</sub>
                        </p>
                        <?php if (isset($_SESSION['user'])) { ?>
                            <a class="btn btn-danger" href="<?= $kiemthu ?>/cart.php?action=xu_ly&id=<?= $a['id_goi_bang_tin'] ?>&ten=<?= $a['ten_goi_bang_tin'] ?>&gia=<?= $a['gia'] ?>" role="button">Thêm vào giỏ hàng</a>
                        <?php  } else {
                        ?>
                            <form method="post" action="">
                                <button class="btn btn-danger" type="submit" name="them">Thêm vào giỏ hàng</button>
                            </form>
                        <?php
                        } ?>
                    </div>
                    <p><?= $a['mo_ta_goi_bang_tin'] ?></p>
                </div>
            <?php } ?>
        </div>
        <?php if (isset($_SESSION['capnhat'])) {
        ?>
            <div class="thongbao_capnhat" style="margin-top: 50px;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Chúc mừng bạn !</strong> <?php echo $_SESSION['capnhat']; ?>
                <a href="../../..<?= $controller ?>/layout.php?cart">Xem Giỏ Hàng</a>
            </div>
        <?php
        }
        if (isset($_POST['them'])) {
            echo "<script>alert('Vui lòng đăng nhập tài khoản')</script>";
            return;
        } ?>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>