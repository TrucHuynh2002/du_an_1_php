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
                <h5 style="text-align: center;">Thống kê bản tin theo danh mục</h5>
            </strong>
        </div>
        <div class="right">
            <table class="table table-light">
                <thead>
                    <tr>
                        <td>Tên danh mục</td>
                        <td>Tên đăng nhập</td>
                        <td>Số lượng </td>
                        <td>Giá thấp nhất</td>
                        <td>Giá cao nhất</td>
                        <td>Giá trung bình</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $row = khach_hang();
                    foreach ($row as $a) {
                        $ten = $a['ten_dang_nhap'];
                        $rows = thong_ke_bt($ten);
                        foreach ($rows as $a) {
                    ?>
                            <tr>
                                <td><?= $a['ten_danh_muc'] ?></td>
                                <td><?= $a['ten_dang_nhap'] ?></td>
                                <td><?= $a['soluong'] ?></td>
                                <td><?= $a['thapnhat'] ?> Tỷ</td>
                                <td><?= $a['caonhat'] ?> Tỷ</td>
                                <td><?= $a['giatb'] ?> Tỷ</td>
                            </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
            <a href="<?= $admin ?>/layout.php?bieu_do_hh"><button type="button" class="btn btn-outline-info">Biểu đồ</button></a>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>