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
    <div class="container-fluid">
        <div class="alert alert-success">
            <strong>
                <h3 style="text-align: center;">Danh sách hàng hóa</h3>
            </strong>
        </div>
        <div class="row">
            <div class="tim_kiem" style="margin: 0 10px;">
                <form method="post" class="form-inline" action="<?= $admin ?>/layout.php?bangtin_list&search">
                    <input class="form-control mr-sm-2" style="font-size: 15px;" type="text" name="search" id="search_name" placeholder="Nhập địa chỉ hoặc dự án...">
                    <button class="btn btn-primary" style="font-size: 15px;" name="sub_mit" type="submit">
                        <i class="fas fa-search"></i>Tìm kiếm</button>
                </form>
            </div>
            <div class="btn-group ">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Lọc theo trạng thái
                </button>
                <div class="dropdown-menu text-center">
                    <li><a href="<?= $admin ?>/layout.php?bangtin_list&trangthai=true" name="filter" data-val="new" rel="nofollow">True</a></li>
                    <li><a href="<?= $admin ?>/layout.php?bangtin_list&trangthai=false" name="filter" data-val="price_des" rel="nofollow">False</a></li>
                </div>
            </div>
            <div style="margin: 0 10px;">
                <a name="" id="" class="btn btn-primary" href="<?= $controller ?>/layout.php?dang_tin" role="button">Thêm bản tin</a>
            </div>
        </div>

        <div class="right">
            <?php
            if (isset($_GET['trangthai'])) {
                $trangthai = $_GET['trangthai'];
            ?>
                <table class="table table-light">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Tên đăng nhập</td>
                            <td>Mã hàng hóa</td>
                            <td>Tên hàng hóa</td>
                            <td>Lượt xem</td>
                            <td>Trạng thái</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $row = ban_tin_trangthai($trangthai);
                        foreach ($row as $a) {
                        ?>
                            <tr>
                                <td><img class="img-fluid" src="<?= $img ?>/<?= $a['hinh_san_pham'] ?>" alt=""></td>
                                <td><?= $a['ten_dang_nhap'] ?></td>
                                <td><?= $a['id_san_pham'] ?></td>
                                <td><?= $a['ten_san_pham'] ?></td>
                                <td><?= $a['luot_xem'] ?></td>
                                <td><?= $a['trang_thai'] ?></td>
                                <td>
                                    <a href="<?= $admin ?>/hang_hoa/approve.php?id=<?= $a['id_san_pham']; ?>"><button type="button" class="btn btn-outline-info">Duyệt bản tin</button></a>
                                </td>
                                <td>
                                    <a href="<?= $admin ?>/layout.php?bangtin_details&id=<?= $a['id_san_pham']; ?>"><button type="button" class="btn btn-outline-info">Chi tiết</button></a>
                                </td>
                                <td>
                                    <a href="<?= $admin ?>/layout.php?bangtin_edit&id=<?= $a['id_san_pham']; ?>"><button type="button" class="btn btn-outline-info">Sửa</button></a>
                                </td>
                                <td>
                                    <a href="<?= $admin ?>/hang_hoa/delete.php?id=<?= $a['id_san_pham']; ?>"><button type="button" class="btn btn-outline-info">Xóa</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php }
            if (isset($_POST['sub_mit']) && isset($_GET['search'])) {
                $search = $_POST['search'];
            ?>
                <table class="table table-light">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Tên đăng nhập</td>
                            <td>Mã hàng hóa</td>
                            <td>Tên hàng hóa</td>
                            <td>Lượt xem</td>
                            <td>Trạng thái</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $row = ban_tin_search($search);
                        foreach ($row as $a) {
                        ?>
                            <tr>
                                <td><img class="img-fluid" src="<?= $img ?>/<?= $a['hinh_san_pham'] ?>" alt=""></td>
                                <td><?= $a['ten_dang_nhap'] ?></td>
                                <td><?= $a['id_san_pham'] ?></td>
                                <td><?= $a['ten_san_pham'] ?></td>
                                <td><?= $a['luot_xem'] ?></td>
                                <td><?= $a['trang_thai'] ?></td>
                                <td>
                                    <a href="<?= $admin ?>/hang_hoa/approve.php?id=<?= $a['id_san_pham']; ?>"><button type="button" class="btn btn-outline-info">Duyệt bản tin</button></a>
                                </td>
                                <td>
                                    <a href="<?= $admin ?>/layout.php?bangtin_details&id=<?= $a['id_san_pham']; ?>"><button type="button" class="btn btn-outline-info">Chi tiết</button></a>
                                </td>
                                <td>
                                    <a href="<?= $admin ?>/layout.php?bangtin_edit&id=<?= $a['id_san_pham']; ?>"><button type="button" class="btn btn-outline-info">Sửa</button></a>
                                </td>
                                <td>
                                    <a href="<?= $admin ?>/hang_hoa/delete.php?id=<?= $a['id_san_pham']; ?>"><button type="button" class="btn btn-outline-info">Xóa</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php
            } else {
            ?>
                <table class="table table-light">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Tên đăng nhập</td>
                            <td>Mã hàng hóa</td>
                            <td>Tên hàng hóa</td>
                            <td>Lượt xem</td>
                            <td>Trạng thái</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $row = ban_tin();
                        foreach ($row as $a) {
                        ?>
                            <tr>
                                <td><img class="img-fluid" src="<?= $img ?>/<?= $a['hinh_san_pham'] ?>" alt=""></td>
                                <td><?= $a['ten_dang_nhap'] ?></td>
                                <td><?= $a['id_san_pham'] ?></td>
                                <td><?= $a['ten_san_pham'] ?></td>
                                <td><?= $a['luot_xem'] ?></td>
                                <td><?= $a['trang_thai'] ?></td>
                                <td>
                                    <a href="<?= $admin ?>/hang_hoa/approve.php?id=<?= $a['id_san_pham']; ?>"><button type="button" class="btn btn-outline-info">Duyệt bản tin</button></a>
                                </td>
                                <td>
                                    <a href="<?= $admin ?>/layout.php?bangtin_details&id=<?= $a['id_san_pham']; ?>"><button type="button" class="btn btn-outline-info">Chi tiết</button></a>
                                </td>
                                <td>
                                    <a href="<?= $admin ?>/layout.php?bangtin_edit&id=<?= $a['id_san_pham']; ?>"><button type="button" class="btn btn-outline-info">Sửa</button></a>
                                </td>
                                <td>
                                    <a href="<?= $admin ?>/hang_hoa/delete.php?id=<?= $a['id_san_pham']; ?>"><button type="button" class="btn btn-outline-info">Xóa</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php
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