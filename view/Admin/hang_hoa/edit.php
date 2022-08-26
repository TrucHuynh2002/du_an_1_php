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
        <div class="alert alert-danger">
            <strong>
                <h4 style="text-align: center;">Cập Nhật Sản Phẩm</h4>
            </strong>
        </div>
        <?php
        if (isset($_POST['sub_mit'])) {
            $path = $_SERVER['DOCUMENT_ROOT'] . $img;
            $id = $_GET['id'];
            $ten_sp = $_POST['ten_sp'];
            $gia_sp = $_POST['gia_sp'];
            $dia_chi = $_POST['dia_chi'];
            $ten_hinh =  $_FILES['hinh_sp']['name'];
            move_uploaded_file($_FILES['hinh_sp']['tmp_name'], "$path./$ten_hinh");
            $mo_ta = $_POST['mo_ta'];
            $date = date('Y/m/d');
            $sdt_sp = $_POST['sdt_sp'];
            $rong_sp = $_POST['rong_sp'];
            $dai_sp = $_POST['dai_sp'];
            $user = $_SESSION['user'];
            // update bảng bản tin chi tiết
            $so_phong = $_POST['so_phong'];
            $phap_ly = $_POST['phap_ly'];
            $huong_nha = $_POST['huong_nha'];
            $noi_that = $_POST['noi_that'];
            $ban_do = $_POST['ban_do'];
            $dien_tich = $rong_sp * $dai_sp;
            $row = update_bantin($id, $ten_sp, $gia_sp, $dia_chi, $ten_hinh, $mo_ta, $date, $sdt_sp,  $rong_sp, $dai_sp, $user);
            $rows =  update_bantin_chitiet($id, $so_phong, $phap_ly, $huong_nha, $noi_that, $ban_do, $dien_tich);
            echo "<script>alert('Cập nhật thành công');</script>";
        }
        if (isset($_SESSION['user'])) {
            $id = $_GET['id'];
            $row = ban_tin_id_san_pham($id);
            foreach ($row as $a) {
        ?>
                <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5>Tên sản phẩm</h5>
                                <input class="form-control" type="text" name="ten_sp" value="<?= $a['ten_san_pham'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Giá</h5>
                                <input class="form-control" type="text" name="gia_sp" value="<?= $a['gia_san_pham'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Địa Chỉ</h5>
                                <input class="form-control" type="text" name="dia_chi" value="<?= $a['dia_chi'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Thông tin mô tả</h5>
                                <input class="form-control" type="text" name="mo_ta" value="<?= $a['thong_tin_mo_ta'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Hình Bản Tin</h5>
                                <input class="form-control" type="file" name="hinh_sp" value="<?= $a['hinh_san_pham'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Số điện thoại</h5>
                                <input class="form-control" type="text" name="sdt_sp" value="<?= $a['so_dien_thoai'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5>Chiều rộng căn hộ</h5>
                                <input class="form-control" type="text" name="rong_sp" value="<?= $a['chieu_rong'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Chiều dài căn hộ</h5>
                                <input class="form-control" type="text" name="dai_sp" value="<?= $a['chieu_dai'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Hướng nhà</h5>
                                <input class="form-control" type="text" name="huong_nha" value="<?= $a['huong_nha'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Pháp lý</h5>
                                <input class="form-control" type="text" name="phap_ly" value="<?= $a['phap_ly'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Nội thất</h5>
                                <input class="form-control" type="text" name="noi_that" value="<?= $a['noi_that'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Số phòng</h5>
                                <input class="form-control" type="text" name="so_phong" value="<?= $a['so_phong'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Nhúng mã html bản đồ vào đây</h5>
                                <a href="https://www.google.com/maps/">Link Google map</a>
                                <input class="form-control" type="text" name="ban_do" value="<?= $a['ban_do'] ?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="sub_mit">Cập Nhật hàng hóa</button>
                </form>
        <?php }
        } ?>
        <a name="" id="" class="btn btn-success btn-block" href="<?= $admin ?>/layout.php?bangtin_list" role="button">Danh Sách</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>