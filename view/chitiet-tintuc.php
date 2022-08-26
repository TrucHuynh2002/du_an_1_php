<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= $css ?>/base.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c9376b777e.js" crossorigin="anonymous"></script>
</head>
<style>
    img {
        height: auto !important;
        max-width: 100%;
    }

    h1,
    h2,
    h3,
    h4 {
        line-height: 27px !important;
        margin: 10px 0 !important;
    }

    a {
        margin-right: 10px;
        font-size: 15px;
    }
</style>

<body>
    <?php
    $id = $_GET['id'];
    update_banviet_luot_xem($id);
    $row = bai_viet_id($id);
    foreach ($row as $a) {
    ?>
        <div class="container">
            <div class="row text-center" style="list-style: none;margin: 30px;align-items: center;">
                <a style="color: #202428;" href="<?= $controller ?>/layout.php">Trang chủ</a>
                <li style="margin-right:10px">/</li>
                <a style="color: #202428;" href="<?= $controller ?>/layout.php?tintuc">Tin tức</a>
                <li style="margin-right:10px">/</li>
                <a style="color: coral;" href="<?= $controller ?>/layout.php?tintuc&id=<?= $_GET['id'] ?>"><?= $a['ten_bai_viet'] ?></a>
            </div>
            <div class="row">
                <div class="col-8" style="background-color: #2423230f;padding-bottom:20px">

                    <div>
                        <h3 style="color: coral;padding:20px 0 10px"><?= $a['ten_bai_viet'] ?></h3>
                        <div class="row" style="align-items: baseline;margin-left:5px;font-size: 15px;">
                            <i class="far fa-clock" style="margin-right: 10px;"></i>
                            <span><?= $a['ngay'] ?></span>
                        </div>
                        <div style="background: #eaeae9;line-height: 30px;font-size: 16px;margin: 22px 0;">
                            <span><?= $a['noi_dung'] ?></span>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <div class="col-4">
                    <div class="tin-moi-nhat">
                        <div class="row" style="align-items: baseline;margin-left:5px;color: #d17d0e;">
                            <i class="fas fa-address-book" style="font-size:20px;margin-right:15px"></i>
                            <h3 style="font-size:20px">TIN MỚI CẬP NHẬT</h3>
                        </div>
                        <div class="">
                            <hr>
                            <?php
                            $row = bai_viet_time();
                            foreach ($row as $a) { ?>
                                <div class="row" style="align-items:center;text-align: left;font-size: 10px;line-height: 31px;">
                                    <div class="col-4">
                                        <a href="<?= $controller ?>/layout.php?baiviet_chitiet&id=<?= $a['ID_bai_viet'] ?>"><img class="img-fluid" src="<?= $img ?>/<?= $a['hinh_bai_viet'] ?>" alt=""></a>
                                    </div>
                                    <div class="col-8">
                                        <a style="color: #2e343a;" href="<?= $controller ?>/layout.php?baiviet_chitiet&id=<?= $a['ID_bai_viet'] ?>"><?= $a['ten_bai_viet'] ?></a>
                                        <div class="row" style="align-items: baseline;margin-left:5px;">
                                            <i class="far fa-clock" style="margin-right: 10px;"></i>
                                            <span><?= $a['ngay'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="tin-nhieu-nguoi-doc">
                        <div class="row" style="align-items: baseline;margin-left:5px;color: #d17d0e;">
                            <i class="fas fa-address-book" style="font-size:20px;margin-right:15px"></i>
                            <h3 style="font-size:20px">TIN NHIỀU NGƯỜI ĐỌC</h3>
                        </div>
                        <hr>
                        <?php
                        $row = bai_viet_luot_xem();
                        foreach ($row as $a) { ?>
                            <div class="row" style="margin: 15px 0; align-items: center;">
                                <div class="col-4">
                                    <a href="<?= $controller ?>/layout.php?baiviet_chitiet&id=<?= $a['ID_bai_viet'] ?>"><img class="img-fluid" src="<?= $img ?>/<?= $a['hinh_bai_viet'] ?>" alt=""></a>
                                </div>
                                <div class="col-8" style="text-align: left;font-size: 10px;line-height: 31px;">
                                    <a style="color: #2e343a;" href="<?= $controller ?>/layout.php?baiviet_chitiet&id=<?= $a['ID_bai_viet'] ?>"><?= $a['ten_bai_viet'] ?></a>
                                    <div class="row" style="align-items: baseline;margin-left:5px;">
                                        <i class="far fa-clock" style="margin-right: 10px;"></i>
                                        <span><?= $a['ngay'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
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