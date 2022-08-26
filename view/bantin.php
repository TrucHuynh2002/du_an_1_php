<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $css ?>/bantin.css">
    <script src="https://kit.fontawesome.com/c9376b777e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <div class="Tieu-de">
                    <h2 style="margin: 25px 0;">Mua bán nhà đất - Bất động sản House Viet T11/2021</h2>
                </div>
                <div class="Tieu-de-2">
                    <div>Bạn đang xem 15 tin rao trong tổng số <?php
                                                                $row = dem_sp();
                                                                foreach ($row as $a) {
                                                                ?><span style="color: red;"><?= $a['soluong'] ?> </span><?php } ?> tin mua bán nhà đất.</div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Sắp xếp theo
                        </button>
                        <div class="dropdown-menu">
                            <li><a href="<?= $controller ?>/layout.php?bantin&ngay" name="filter" data-val="new" rel="nofollow">Mới nhất</a></li>
                            <li><a href="<?= $controller ?>/layout.php?bantin&giacao" name="filter" data-val="price_des" rel="nofollow">Giá cao nhất</a></li>
                            <li><a href="<?= $controller ?>/layout.php?bantin&giathap" name="filter" data-val="price_esc" rel="nofollow">Giá thấp nhất</a></li>
                        </div>
                    </div>
                </div>
                <?php
                if ((isset($_GET['id'])) || (isset($_GET['sotien1']) & isset($_GET['sotien2'])) || (isset($_GET['danhmuc'])) || (isset($_GET['dientich1']) & isset($_GET['dientich2'])) || (isset($_GET['diachi'])) || (isset($_GET['search'])) || (isset($_GET['ngay'])) || (isset($_GET['giathap'])) || (isset($_GET['giacao']))) {
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    // số sản phẩm trên 1 trang
                    $sp = 6;
                    // công thức tính vị trí sản phẩm bắt đầu muốn lấy 
                    $start = $page * $sp - $sp;
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $row = ban_tin_id($id);
                        $rows = show_page_ban_tin($id, $start, $sp);
                    } else if ((isset($_GET['sotien1']) & isset($_GET['sotien2']))) {
                        $sotien1 = $_GET['sotien1'];
                        $sotien2 = $_GET['sotien2'];
                        $row = ban_tin_timkiem_gia($sotien1, $sotien2);
                        $rows = show_page_ban_tin_sotien($sotien1, $sotien2, $start, $sp);
                    } else if ((isset($_GET['danhmuc']))) {
                        $id = $_GET['danhmuc'];
                        $row = ban_tin_id($id);
                        $rows = show_page_ban_tin($id, $start, $sp);
                    } else if (isset($_GET['dientich1']) & isset($_GET['dientich2'])) {
                        $dientich1 = $_GET['dientich1'];
                        $dientich2 = $_GET['dientich2'];
                        $row = ban_tin_timkiem_dientich($dientich1, $dientich2);
                        $rows = show_page_ban_tin_dientich($dientich1, $dientich2, $start, $sp);
                    } else  if (isset($_GET['diachi'])) {
                        $diachi = $_GET['diachi'];
                        $row = ban_tin_timkiem_diachi($diachi);
                        $rows = show_page_ban_tin_diachi($diachi, $start, $sp);
                    } else if (isset($_GET['search'])) {
                        $search = $_GET['search'];
                        $row = ban_tin_search($search);
                        $rows = show_page_search($search, $start, $sp);
                    } else if (isset($_GET['ngay'])) {
                        $row = ban_tin_ngay_moinhat();
                        $rows = show_page_ngay_moinhaat($start, $sp);
                    } else  if (isset($_GET['giathap'])) {
                        $row = ban_tin_theo_gia_thap();
                        $rows = show_page_theo_gia_thap($start, $sp);
                    } else   if (isset($_GET['giacao'])) {
                        $row = ban_tin_theo_gia_cao();
                        $rows = show_page_theo_gia_cao($start, $sp);
                    }
                    // đếm số lượng sản phẩm
                    $rooCount = count($row);
                    // tổng số trang 
                    $total = ceil($rooCount / $sp);
                    if (!empty($rows)) {
                        foreach ($rows as $a) {
                            extract($a);
                ?>
                            <div class="row bentrai" style="margin-top: 30px;">
                                <div class="col-sm-12 col-md-3">
                                    <img class="img-fluid" src="<?= $img ?>/<?php echo $a['hinh_san_pham'] ?>" alt="">
                                </div>
                                <div class="col-sm-12 col-md-9">
                                    <a href="<?= $controller ?>/layout.php?bantin_chitiet&id=<?= $a['id_san_pham'] ?>">
                                        <h2 class="card-title"><?php echo $a['ten_san_pham']; ?></h2> <a href="#" class="alert-link"></a>
                                    </a>
                                    <div class="card-body">
                                        <i class="far fa-clock"></i>
                                        <p>Ngày đăng <?php echo $a['ngay_dang']; ?></p>
                                    </div>
                                    <div class="row" style="margin-left: 15px;align-items: baseline;">
                                        <div class="card-body card-body-gia">
                                            <p> <i style="margin-right: 10px;" class="fas fa-dollar-sign"></i>Giá: <?php echo $a['gia_san_pham']; ?>Tỷ</p>
                                        </div>
                                        <div class="card-body card-body-gia">
                                            <p>Số điện thoại liên hệ : </p>
                                            <p style="font-size: 30px;color: #110e0f;    margin-left: 7px;">0<?php echo $a['so_dien_thoai']; ?></p>
                                        </div>
                                    </div>
                                    <hr class="hr">
                                    <div class="card-title">
                                        <div class="card-body">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <p> Địa chỉ: <?php echo $a['dia_chi']; ?></p>
                                        </div>
                                        <div class="card-body">
                                            <i class="fas fa-boxes"></i>
                                            <p> Diện tích: <?php echo $a['chieu_rong'] * $a['chieu_dai']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="hr">
                            </div>
                    <?php
                        }
                    }
                } else {
                    ?>
                    <div class="row" style="display: inherit;justify-content:space-evenly;text-align:center;align-items:center;">
                        <div>
                            <h1>Không có sản phẩm </h1>
                        </div>
                    </div>
                <?php
                } ?>
                <nav aria-label="Page navigation example">
                    <ul class="pagination" style="font-size: 15px;justify-content: center;">
                        <?php for ($i = 1; $i <= $total; $i++) { ?>
                            <li class="page-item">
                                <?php if ($page == $i) { ?>
                                    <a class="page-link active" style="font-size: 15px;color: #33b786;margin: 0 3px;" href="<?= $controller ?>/layout.php?bantin&page=<?= $i ?>&id=<?= $id ?>"><?= $i ?></a>
                                <?php } else { ?>
                                    <a class="page-link" style="font-size: 15px;color: #33b786;margin: 0 3px;" href="<?= $controller ?>/layout.php?bantin&page=<?= $i ?>&id=<?= $id ?>"><?= $i ?></a>
                                <?php }
                                ?>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
               
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="title-book">
                    <strong> Tìm theo Khoảng giá </strong>
                    <hr>
                    <ul>
                        <li><a href="<?= $controller ?>/layout.php?bantin&sotien1=0&sotien2=0.5"> Dưới 500 triệu </a></li>
                        <li><a href="<?= $controller ?>/layout.php?bantin&sotien1=0.5&sotien2=1"> 500 → 1 tỷ </a></li>
                        <li><a href="<?= $controller ?>/layout.php?bantin&sotien1=1&sotien2=2"> 1 → 2 tỷ </a></li>
                        <li><a href="<?= $controller ?>/layout.php?bantin&sotien1=2&sotien2=3"> 2 → 3 tỷ </a></li>
                        <li><a href="<?= $controller ?>/layout.php?bantin&sotien1=3&sotien2=5"> 3 → 5 tỷ </a></li>
                        <li><a href="<?= $controller ?>/layout.php?bantin&sotien1=5&sotien2=7"> 5 → 7 tỷ </a></li>
                        <li><a href="<?= $controller ?>/layout.php?bantin&sotien1=7&sotien2=10"> 7 → 10 tỷ </a></li>
                        <li><a href="<?= $controller ?>/layout.php?bantin&sotien1=10&sotien2=20"> 10 → 20 tỷ </a></li>
                        <li><a href="<?= $controller ?>/layout.php?bantin&sotien1=20&sotien2=30"> 20 → 30 tỷ </a></li>
                        <li><a href="<?= $controller ?>/layout.php?bantin&sotien1=30&sotien2=999"> Trên 30 tỷ </a></li>
                    </ul>
                </div>
                <div class="title-book">
                    <strong> Tìm theo Khoảng diện tích </strong>
                    <hr>
                    <ul>
                        <li><a href="<?= $controller ?>/layout.php?bantin&dientich1=0&dientich2=30"> Dưới 30 m² </a></li>
                        <li><a href="<?= $controller ?>/layout.php?bantin&dientich1=30&dientich2=50"> 30 → 50 m² </a></li>
                        <li><a href="<?= $controller ?>/layout.php?bantin&dientich1=50&dientich2=80"> 50 → 80 m² </a></li>
                        <li><a href="<?= $controller ?>/layout.php?bantin&dientich1=80&dientich2=100"> 80 → 100 m² </a></li>
                        <li><a href="<?= $controller ?>/layout.php?bantin&dientich1=150&dientich2=300"> 100 → 150 m² </a></li>
                        <li><a href="<?= $controller ?>/layout.php?bantin&dientich1=150&dientich2=300"> 150 → 300 m² </a></li>
                        <li><a href="<?= $controller ?>/layout.php?bantin&dientich1=300&dientich2=500"> 300 → 500 m² </a></li>
                        <li><a href="<?= $controller ?>/layout.php?bantin&dientich1=500&dientich2=9000"> Trên 500 m² </a></li>
                    </ul>
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