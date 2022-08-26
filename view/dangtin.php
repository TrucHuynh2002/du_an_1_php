<!doctype html>
<html lang="en">

<head>
    <title>Hàng hóa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="<?= $content ?>/JS/xu_ly.js"></script>
    <script type="text/javascript" src="<?= $thuvien ?>/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .dat {
        display: none;
    }
</style>

<body>
    <?php

    if (isset($_POST['sub_mit']) & isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $path = $_SERVER['DOCUMENT_ROOT'] . $img;
        $ten_sp = $_POST['ten_sp'];
        $gia_sp = $_POST['gia_sp'];
        $dia_chi = $_POST['dia_chi'];
        $ten_hinh =  $_FILES['hinh_sp']['name'];
        move_uploaded_file($_FILES['hinh_sp']['tmp_name'], "$path./$ten_hinh");
        $sdt_sp = $_POST['sdt_sp'];
        $id_danh_muc = $_POST['danh_muc'];
        $mo_ta = $_POST['content'];
        $rong_sp = $_POST['rong_sp'];
        $dai_sp = $_POST['dai_sp'];
        $huong_nha = $_POST['huong_nha'];
        $phap_ly = $_POST['phap_ly'];
        $noi_that = $_POST['noi_that'];
        $so_phong = $_POST['so_phong'];
        $id_loai_dat = $_POST['loai_dat'];
        $ban_do = $_POST['ban_do'];
        $date = date('Y/m/d');
        $trang_thai = 'false';
        $luot_xem = 0;
        $dien_tich = $rong_sp * $dai_sp;
        if ($ten_sp == "" || $gia_sp == "" || $dia_chi == "" || $sdt_sp == "" || $rong_sp == "" || $dai_sp == "" || $huong_nha == "" || $phap_ly == "") {
            echo "<script>alert('Không được để trống')</script>";
            return;
        } else {
            if ($id_loai_dat != 0) {
                $row = insert_bantin_dat($ten_sp, $gia_sp, $dia_chi, $ten_hinh, $mo_ta, $date, $luot_xem, $sdt_sp, $id_danh_muc, $id_loai_dat, $user, $rong_sp, $dai_sp, $trang_thai);
                $rows = ban_tin_moi_nhat();
                foreach ($rows as $a) {
                    extract($a);
                    $id_sp = $a['id_san_pham'];
                    insert_bantin_chitiet_dat($id_sp, $huong_nha, $phap_ly, $ban_do, $dien_tich);
                }
            } else {
                $row = insert_bantin($ten_sp, $gia_sp, $dia_chi, $ten_hinh, $mo_ta, $date, $luot_xem, $sdt_sp, $id_danh_muc, $id_loai_dat, $user, $rong_sp, $dai_sp, $trang_thai);
                $rowss = ban_tin_moi_nhat();
                foreach ($rowss as $a) {
                    extract($a);
                    $id_sp = $a['id_san_pham'];
                    insert_bantin_chitiet($id_sp, $huong_nha, $phap_ly, $noi_that, $so_phong, $ban_do, $dien_tich);
                }
            }
            $ras = tin_hd($user);
            foreach ($ras as $abc) {
                if ($user == $abc['ten_dang_nhap']) {
                    $id_hd = $abc['id_hoa_don'];
                    $somautindadang = $abc['so_mau_tin_da_dang'] + 1;
                    update_tin_da_dang($user, $somautindadang, $id_hd);
                }
            }
        }
    }
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $rowss =  hoa_don($user);
        foreach ($rowss as $ab) {
            if ($user != $ab['ten_dang_nhap']) {
                echo "<script>alert('Vui lòng mua gói đăng tin')</script>";
                return;
            }
        }
        $ros = tin_da_dang_giamdan($user);
        foreach ($ros as $c) {
            if ($c['id_goi_bang_tin'] == 8 && $c['so_mau_tin_da_dang'] > 3 && $c['ten_dang_nhap'] != 'admin') {
                echo "<script>alert('Bạn hết lượt đăng tin')</script>";
                return;
            } else if ($c['id_goi_bang_tin'] == 2 && $c['so_mau_tin_da_dang'] > 10 && $c['ten_dang_nhap'] != 'admin') {
                echo "<script>alert('Bạn hết lượt đăng tin')</script>";
                return;
            } else if ($c['id_goi_bang_tin'] == 3 && $c['so_mau_tin_da_dang'] > 20 && $c['ten_dang_nhap'] != 'admin') {
                echo "<script>alert('Bạn hết lượt đăng tin')</script>";
                return;
            } else {
    ?>
                <div class="container-fluid">
                    <div class="alert alert-danger">
                        <strong>
                            <h4 style="text-align: center;">HÀNG HÓA</h4>
                        </strong>
                    </div>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Tên hàng hóa</h5>
                                    <input class="form-control" type="text" name="ten_sp">
                                </div>
                                <div class="form-group">
                                    <h5>Giá</h5>
                                    <input class="form-control" type="text" name="gia_sp">
                                </div>
                                <div class="form-group">
                                    <h5>Địa Chỉ</h5>
                                    <input class="form-control" type="text" name="dia_chi">
                                </div>

                                <div class="form-group">
                                    <h5>Hình Bản Tin</h5>
                                    <input class="form-control" type="file" name="hinh_sp">
                                </div>
                                <div class="form-group">
                                    <h5>Số điện thoại</h5>
                                    <input class="form-control" type="text" name="sdt_sp">
                                </div>
                                <div class="form-group">
                                    <h5>Danh mục sản phẩm</h5>
                                    <div class="input-group-prepend">
                                        <select onchange="danhmuc(this)" name="danh_muc" style="width: 100%;height:30px">
                                            <option label="Căn hộ cao cấp" value="1">1</option>
                                            <option label="Chung cư" value="2">2</option>
                                            <option label="Đất" value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Thông tin mô tả</h5>
                                    <td><textarea name="content" id="content" rows="10" cols="150"></textarea></td>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Chiều rộng </h5>
                                    <input class="form-control" type="text" name="rong_sp">
                                </div>
                                <div class="form-group">
                                    <h5>Chiều dài </h5>
                                    <input class="form-control" type="text" name="dai_sp">
                                </div>
                                <div class="form-group">
                                    <h5>Hướng </h5>
                                    <input class="form-control" type="text" name="huong_nha">
                                </div>
                                <div class="form-group">
                                    <h5>Pháp lý</h5>
                                    <input class="form-control" type="text" name="phap_ly">
                                </div>
                                <div class="form-group canho">
                                    <h5>Nội thất</h5>
                                    <input class="form-control" type="text" name="noi_that">
                                </div>
                                <div class="form-group canho">
                                    <h5>Số phòng</h5>
                                    <input class="form-control" type="text" name="so_phong">
                                </div>
                                <div class="form-group dat">
                                    <h5>Loại đất</h5>
                                    <div class="input-group-prepend">
                                        <select name="loai_dat" style="width: 100%;height:30px">
                                            <option label="Vui lòng chọn loại đất" value="0">0</option>
                                            <option label="Đất nông nghiệp" value="1">1</option>
                                            <option label="Đất công nghiệp" value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Nhúng mã html bản đồ vào đây</h5>
                                    <a href="https://www.google.com/maps/">Link Google map</a>
                                    <input class="form-control" type="text" name="ban_do">
                                </div>
                            </div>
                        </div>
                        <button type="submit" style="margin: 10px 0;" class="btn btn-primary btn-block" name="sub_mit">Thêm bản tin</button>
                    </form>
                    <a name="" id="" style="margin-bottom: 10px;" class="btn btn-success btn-block" href="<?= $taikhoan ?>/layout.php?tai_khoan_list" role="button">Xem thông tin</a>
                </div>

    <?php
            }
        }
    } else {
        echo "<script>alert('Vui lòng đăng nhập tài khoản')</script>";
        return;
    }
    ?>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('content');
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>