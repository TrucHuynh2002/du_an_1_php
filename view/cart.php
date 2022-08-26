<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c9376b777e.js" crossorigin="anonymous"></script>
    <title>Cart</title>
</head>

<body>
    <div class="content">
        <?php
        $TONGTIEN = 0;
        if (isset($_SESSION['cart'])) {
            unset($_SESSION['capnhat']);
            foreach ($_SESSION['cart'] as $key => $a) {
        ?>
                <div class="container-fluid" style="margin-top: 50px;">
                    <div class="row" style="justify-content:space-evenly;text-align:center;align-items:center;">
                        <div class="col-md-3 col-xm-12 col-lg-3">
                            <h3 name="ten"><?= $a['ten'] ?></h3>
                            <p class="gia" name="gia">Giá: <?= $a['gia'] ?></p>
                        </div>
                        <div class="col-md-2 col-xm-12 col-lg-2">
                            <h4>Số lượng</h4>
                            <input class="input" style="text-align: center;" id='soluong' type="number" value="<?= $a['soluong'] ?>" name="soluong" readonly>
                        </div>
                        <div class="col-md-2 col-xm-12 col-lg-2">
                            <h4>Thành Tiền</h4>
                            <input type="text" style="text-align: center;" name="thanhtien" class="input" value="<?= $thanhtien = $a['soluong'] * $a['gia'] ?>" readonly>
                        </div>
                        <div class="col-md-2 col-xm-12 col-lg-2">
                            <a href="../..<?= $kiemthu ?>/cart.php?action=delete&id=<?php echo $key; ?>">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <hr style="border: solid #d7d8d9;width: 78%;">
            <?php
                $TONGTIEN += $thanhtien;
            }
            $_SESSION['tongtien'] = $TONGTIEN;
            ?>
            <div class="row" style="margin:20px 0;justify-content:flex-end;">
                <div>
                    <h4>Tổng Tiền</h4>
                    <input class="form-control text-center" disabled type="text" value="<?php echo $TONGTIEN; ?>">
                </div>
            </div>
            <div class="row" style="margin:20px 72px 20px 0;justify-content:flex-end;">
                <form method="post" action="<?= $kiemthu ?>/cart.php?action=thanhtoan">
                    <button name="thanhtoan" id="" class="btn btn-primary" type="submit" value="">Thanh Toán </button>
                </form>
            </div>
        <?php
        } else {
        ?>
            <div class="row" style="display: inherit;justify-content:space-evenly;text-align:center;align-items:center;">
                <div>
                    <i style="font-size: 98px;opacity: 35%;" class="fas fa-sad-tear"></i>
                    <hr>
                    <h1>Không có đơn hàng nào</h1>
                </div>
            </div>
        <?php
        }
        if (isset($_SESSION['thanhcong'])) {
            $thanhcong = $_SESSION['thanhcong'];
            echo "<script>alert('$thanhcong')</script>";
        }
        unset($_SESSION['thanhcong']) ?>
    </div>
</body>

</html>