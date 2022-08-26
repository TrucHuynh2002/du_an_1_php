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
<style>
    .col-6>div {
        display: flex;
    }

    .col-6>div>p {
        margin-left: 30px;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="alert alert-success">
            <strong>
                <h3 style="text-align: center;">Danh sách hàng hóa</h3>
            </strong>
        </div>
        <div class="right">
            <?php
            $row = ban_tin_id_sp($id);
            foreach ($row as $a) {
            ?>
                <div class="row">
                    <div class="col-6">
                        <div>
                            <span>Mã hàng hóa : </span>
                            <p><?= $a['id_san_pham'] ?></p>
                        </div>
                        <div>
                            <span>Mô tả : </span>
                            <p><?= $a['thong_tin_mo_ta'] ?></p>
                        </div>
                        <div>
                            <span>Địa chỉ : </span>
                            <p><?= $a['dia_chi'] ?></p>
                        </div>
                        <div>
                            <span>Số điện thoại : </span>
                            <p><?= $a['so_dien_thoai'] ?></p>
                        </div>
                        <div>
                            <span>Hướng nhà : </span>
                            <p><?= $a['huong_nha'] ?></p>
                        </div>
                        <div>
                            <span>Pháp Lý : </span>
                            <p><?= $a['phap_ly'] ?></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <span>Ngày Đăng : </span>
                            <p><?= $a['ngay_dang'] ?></p>
                        </div>
                        <div>
                            <span>Nội thất : </span>
                            <p><?= $a['noi_that'] ?></p>
                        </div>
                        <div>
                            <span>Số phòng : </span>
                            <p><?= $a['so_phong'] ?></p>
                        </div>
                        <div>
                            <span>Diện tích : </span>
                            <p><?= $a['chieu_dai'] ?></p>
                        </div>
                        <div>
                            <span>Chiều Dài : </span>
                            <p><?= $a['chieu_rong'] ?></p>
                        </div>
                        <div>
                            <span>Chiều Rộng : </span>
                            <p><?= $a['dien_tich'] ?></p>
                        </div>
                    </div>
                </div>
                <div>
                    <span>Bản Đồ : </span>
                    <p><?= $a['ban_do'] ?></p>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>