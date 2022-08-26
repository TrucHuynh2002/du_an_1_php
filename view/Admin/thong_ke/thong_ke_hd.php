<!doctype html>
<html lang="en">

<head>
    <title>Hàng hóa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="alert alert-success">
            <strong>
                <h3 style="text-align: center;">Thống kê</h3>
            </strong>
        </div>
        <div class="alert alert-success">
            <strong>
                <h5 style="text-align: center;">Thống kê theo hóa đơn</h5>
            </strong>
        </div>
        <div class="right">
            <table class="table table-light">
                <thead>
                    <tr>
                        <td>Tên đăng nhập</td>
                        <td>Tên gói đăng tin</td>
                        <td>Số lượng hóa đơn</td>
                        <td>Doanh thu</td>
                        <td>Ngày mua củ nhất</td>
                        <td>Ngày mua mới nhất</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $row = thong_ke_hd();
                    foreach ($row as $a) {

                    ?>
                        <tr>
                            <td><?= $a['ten_dang_nhap'] ?></td>
                            <td><?= $a['ten_goi_bang_tin'] ?></td>
                            <td><?= $a['soluong'] ?></td>
                            <td><?= $a['thanhtien'] ?></td>
                            <td><?= $a['cunhat'] ?></td>
                            <td><?= $a['moinhat'] ?></td>
                        </tr>
                    <?php  }
                    ?>
                </tbody>
            </table>
            <a href="<?= $admin ?>/layout.php?bieu_do_hd"><button type="button" class="btn btn-outline-info">Biểu đồ</button></a>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>