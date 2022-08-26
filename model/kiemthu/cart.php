<?php
include("../../controller/gobal.php");
include("../../..$database/function.php");
$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {
    case 'xu_ly':
        if (isset($_GET['id']) && isset($_GET['ten']) && isset($_GET['gia'])) {
            $id = $_GET['id'];
            $ten = $_GET['ten'];
            $gia = $_GET['gia'];
        }
        if (isset($_SESSION['cart'])) {
            if (isset($_SESSION['cart'][$id]['soluong'])) {
                $_SESSION['cart'][$id]['soluong'] += 1;
            } else {
                $_SESSION['cart'][$id]['soluong'] = 1;
                $_SESSION['cart'][$id]['id'] = $id;
                $_SESSION['cart'][$id]['ten'] = $ten;
                $_SESSION['cart'][$id]['gia'] = $gia;
            }
            $_SESSION['capnhat'] = "Thêm sản phẩm vào giỏ hàng thành công !";
            header("location:../../..$controller/layout.php?goi_dang_tin");
        } else {
            $_SESSION['cart'][$id]['soluong'] = 1;
            $_SESSION['cart'][$id]['id'] = $id;
            $_SESSION['cart'][$id]['ten'] = $ten;
            $_SESSION['cart'][$id]['gia'] = $gia;
            $_SESSION['capnhat'] = "Thêm sản phẩm vào giỏ hàng thành công !";
            header("location:../../..$controller/layout.php?goi_dang_tin");
        }
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            unset($_SESSION['cart'][$id]);
            header("location:$controller/layout.php?cart");
        }
        if (count($_SESSION['cart']) == 0) {
            session_destroy();
        }
        break;
    case 'thanhtoan':
        if (isset($_POST['thanhtoan']) & isset($_SESSION['cart']) & isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $thanhtien = $_SESSION['tongtien'];
            $ngayban = date('Y-m-d');
            foreach ($_SESSION['cart'] as $key => $a) {
                $id_ban_tin = $a['id'];
                if ($id_ban_tin == 1) {
                    $soluong = $a['soluong'];
                    $somautindadang = 0;
                    $i = thanhtoan($user, $id_ban_tin, $soluong, $thanhtien, $ngayban);
                    $rows = hoa_don_moi_nhat();
                    foreach ($rows as $a) {
                        $id_hd = $a['id_hoa_don'];
                        $a = inser_tin_da_dang($id_ban_tin, $user, $id_hd, $somautindadang);
                    }
                    unset($_SESSION['cart']);
                    $_SESSION['thanhcong'] = "Đặt hàng thành công";
                    header("location:$controller/layout.php?cart");
                    return;
                } else if ($id_ban_tin == 2) {
                    update_bantin_2($user);
                    $soluong = $a['soluong'];
                    $somautindadang = 0;
                    $i = thanhtoan($user, $id_ban_tin, $soluong, $thanhtien, $ngayban);
                    $rows = hoa_don_moi_nhat();
                    foreach ($rows as $a) {
                        $id_hd = $a['id_hoa_don'];
                        $a = inser_tin_da_dang($id_ban_tin, $user, $id_hd, $somautindadang);
                    }
                    unset($_SESSION['cart']);
                    $_SESSION['thanhcong'] = "Đặt hàng thành công";
                    header("location:$controller/layout.php?cart");
                    return;
                } else if ($id_ban_tin == 3) {
                    update_bantin_3($user);
                    $soluong = $a['soluong'];
                    $somautindadang = 0;
                    $i = thanhtoan($user, $id_ban_tin, $soluong, $thanhtien, $ngayban);
                    $rows = hoa_don_moi_nhat();
                    foreach ($rows as $a) {
                        $id_hd = $a['id_hoa_don'];
                        $a = inser_tin_da_dang($id_ban_tin, $user, $id_hd, $somautindadang);
                    }
                    unset($_SESSION['cart']);
                    $_SESSION['thanhcong'] = "Đặt hàng thành công";
                    header("location:$controller/layout.php?cart");
                    return;
                }
            }
        }else{
            $_SESSION['thanhcong'] = "Đăng nhập mới thanh toán";
            header("location:$controller/layout.php?cart");
            return;
        }
        break;
}
