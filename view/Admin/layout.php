<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    include("../../controller/gobal.php");
    include("../../..$database/function.php");
    $a = "$admin/danh_muc/list.php";
    extract($_REQUEST);
    function kiem_tra($b)
    {
        return array_key_exists($b, $_REQUEST);
    }
    if (kiem_tra("binhluan_list", $_REQUEST)) {
        $a = "$admin/binh_luan/list.php";
    } else  if (kiem_tra("danhmuc_list", $_REQUEST)) {
        $a = "$admin/danh_muc/list.php";
    } else  if (kiem_tra("danhmuc_new", $_REQUEST)) {
        $a = "$admin/danh_muc/new.php";
    } else  if (kiem_tra("danhmuc_edit", $_REQUEST)) {
        $a = "$admin/danh_muc/edit.php";
    } else  if (kiem_tra("dan_tin_list", $_REQUEST)) {
        $a = "$admin/goi_dang_tin/list.php";
    } else  if (kiem_tra("dan_tin_new", $_REQUEST)) {
        $a = "$admin/goi_dang_tin/new.php";
    } else  if (kiem_tra("dan_tin_edit", $_REQUEST)) {
        $a = "$admin/goi_dang_tin/edit.php";
    } else  if (kiem_tra("bangtin_list", $_REQUEST)) {
        $a = "$admin/hang_hoa/list.php";
    } else  if (kiem_tra("bangtin_details", $_REQUEST)) {
        $a = "$admin/hang_hoa/details.php";
    } else  if (kiem_tra("bangtin_edit", $_REQUEST)) {
        $a = "$admin/hang_hoa/edit.php";
    } else  if (kiem_tra("bangtin_new", $_REQUEST)) {
        $a = "$admin/hang_hoa/new.php";
    } else  if (kiem_tra("khachhang_list", $_REQUEST)) {
        $a = "$admin/khach_hang/list.php";
    } else  if (kiem_tra("baiviet_list", $_REQUEST)) {
        $a = "$admin/bai_viet/list.php";
    } else  if (kiem_tra("thongke_list", $_REQUEST)) {
        $a = "$admin/thong_ke/list.php";
    } else  if (kiem_tra("baiviet_edit", $_REQUEST)) {
        $a = "$admin/bai_viet/edit.php";
    } else  if (kiem_tra("baiviet_new", $_REQUEST)) {
        $a = "$admin/bai_viet/new.php";
    } else  if (kiem_tra("baiviet_details", $_REQUEST)) {
        $a = "$admin/bai_viet/details.php";
    } else  if (kiem_tra("thongke_bl", $_REQUEST)) {
        $a = "$admin/thong_ke/thong_ke_bl.php";
    } else  if (kiem_tra("thongke_hd", $_REQUEST)) {
        $a = "$admin/thong_ke/thong_ke_hd.php";
    } else  if (kiem_tra("thongke_bt", $_REQUEST)) {
        $a = "$admin/thong_ke/thong_ke_bt.php";
    } else  if (kiem_tra("bieu_do_hh", $_REQUEST)) {
        $a = "$admin/thong_ke/bieu_do_hh.php";
    } else  if (kiem_tra("loaidat_list", $_REQUEST)) {
        $a = "$admin/loai_dat/list.php";
    } else  if (kiem_tra("loaidat_new", $_REQUEST)) {
        $a = "$admin/loai_dat/new.php";
    } else  if (kiem_tra("loaidat_edit", $_REQUEST)) {
        $a = "$admin/loai_dat/edit.php";
    } else  if (kiem_tra("bieu_do_hd", $_REQUEST)) {
        $a = "$admin/thong_ke/bieu_do_hd.php";
    } else  if (kiem_tra("lienhe", $_REQUEST)) {
        $a = "$admin/lien_he/list.php";
    }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" style="padding: 0;">
                <?php require_once("../../..$admin/nav_admin.php"); ?>
            </div>
            <div class="col-md-10" style="padding: 0;">
                <?php require_once("../../..$a") ?>
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