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
<style>
    .bando>iframe {
        height: 500px;
        width: 100%;
    }
</style>

<body>
    <div class="container" style="font-size: 13px;line-height: 34px;">
        <!-- slideshow -->
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="" alt="">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="" alt="">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="" alt="">
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            updata_luot_xem_ban_tin($id);
            $row = ban_tin_id_san_pham($id);
            foreach ($row as $a) {
                extract($a);
                $danh_muc = $a['id_danh_muc'];
        ?>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <img class="img-fluid" src="<?= $img ?>/<?= $a['hinh_san_pham'] ?>" alt="">
                    </div>
                    <div class="col-sm-12 col-md-8">
                        <h2><?= $a['ten_san_pham'] ?></h2>
                        <p><?= $a['dia_chi'] ?></p>
                    </div>
                </div>
                <hr>
                <div class="row" style="text-align: center;">
                    <div class="col-8 row">
                        <div class="col-3">
                            <h5>Mức giá</h5>
                            <p><?= $a['gia_san_pham'] ?> Tỷ</p>
                        </div>
                        <div class="col-3">
                            <h5>Diện tích</h5>
                            <p><?= $a['dien_tich'] ?> m2</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <a href="#" class="btn btn-light">Chia sẻ <img src="img/share.png" alt="" width="20px"></a>
                        <a href="#" class="btn btn-light">Lưu tin <img src="img/heart.png" alt="" width="20px"></a>
                    </div>
                </div>
                <hr>
                <div class="thongtin-mota">
                    <h4>Thông tin mô tả</h4>
                    <p><?= $a['thong_tin_mo_ta'] ?></p>
                </div>
                <div class="dacdiem">
                    <h4>Đặc điểm bất động sản</h4>
                    <table style="width: 30%;" class="table">
                        <tbody>
                            <tr>
                                <td>Loại đăng tin: </td>
                                <td><?= $a['ten_danh_muc'] ?></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ: </td>
                                <td><?= $a['dia_chi'] ?></td>
                            </tr>
                            <tr>
                                <td>Hướng nhà: </td>
                                <td><?= $a['huong_nha'] ?></td>
                            </tr>
                            <tr>
                                <td>Pháp Lý:</td>
                                <td><?= $a['phap_ly'] ?></td>
                            </tr>
                            <?php
                            if ($a['id_loai_dat'] == 0) {
                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="thongtin-duan">
                    <h4>Thông tin dự án</h4>
                    <table style="width: 30%;" class="table">
                        <tbody>
                            <tr>
                                <td>Số phòng:</td>
                                <td><?= $a['so_phong'] ?></td>
                            </tr>
                            <tr>
                                <td>Nội thất: </td>
                                <td><?= $a['noi_that'] ?></td>
                            </tr>
                        <?php } else {
                        ?>
                            <tr>
                                <td>Loại đất:</td>
                                <td><?= $a['ten_loai_dat'] ?></td>
                            </tr>
                        <?php
                            } ?>
                        <tr>
                            <td>Diện tích:</td>
                            <td><?= $a['dien_tich'] ?> m2</td>
                        </tr>
                    </table>
                </div>
                <div class="bando">
                    <h4>Xem bản đồ</h4>
                    <?= $a['ban_do'] ?>
                </div>
                <div class="cmt">
                    <h4>Bình luận</h4>
                    <div class="col-12">
                        <form method="post" action="<?= $kiemthu ?>/binhluan.php?action=binhluan&id=<?= $a['id_san_pham'] ?>" style="display: flex;">
                            <input class="form-control" placeholder="Hãy để lại bình luận" type="text" style="width: 40%;margin: 0 10px;" name="noidung">
                            <button class="btn btn-outline-info" type="submit" name="sub_mit">Submit</button>
                        </form>
                    </div>
                    <div>
                        <div class="row" style="align-items: baseline;">
                            <h4>Các bình luận khác </h4>
                            <i style="margin:0 10px" class="far fa-hand-point-right"></i>
                        </div>                       
                        <?php
                        $row = binh_luan_id($id);
                        foreach ($row as $a) {
                        ?>
                        <?php 
                            if(isset($_SESSION['user'])){
                            $user = $_SESSION['user'];
                        ?>
                            <div class="row" style="margin:30px 0;">
                                <img class="img-fluid" style="height: 53px;" src="<?= $img ?>/<?= $a['hinh'] ?>" alt="">
                                <div style="margin: 0 30px;">
                                    <p><?= $user ?></p>
                                    <p><?= $a['noi_dung'] ?></p>
                                </div>
                                <p style="margin: 0 30px;"><?= $a['ngay'] ?></p>
                                <td>                                    
                        <?php
                        }       
                        ?>
                            </td>
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                </div>
                <?php
                    }
                } ?>
        <hr>
        <div>
            <h4>Bất động sản cùng loại </h4>
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/PHP1/view/silde.php") ?>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
