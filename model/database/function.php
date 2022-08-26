<?php
include("pdo.php");
// Bảng danh mục 
function insert_danhmuc($ten_dm)
{
    $sql = "INSERT INTO danh_muc(ten_danh_muc) VALUES('$ten_dm')";
    $row = pdo_execute($sql);
    return $row;
}
function update_danhmuc($id, $ten_dm)
{
    $sql = "UPDATE danh_muc SET ten_danh_muc='$ten_dm' WHERE id_danh_muc='$id'";
    $row = pdo_execute($sql);
    return $row;
}
function delete_danhmuc($id)
{
    $sql = " DELETE  FROM danh_muc WHERE id_danh_muc='$id'";
    $row = pdo_execute($sql);
    return $row;
}
function danh_muc()
{
    $sql = "SELECT *  FROM danh_muc";
    $row = pdo_query($sql);
    return $row;
}
function danh_muc_id($id)
{
    $sql = "SELECT *  FROM danh_muc where id_danh_muc='$id'";
    $row = pdo_query($sql);
    return $row;
}

// Bảng Khách hàng 
function khach_hang()
{
    $sql = "SELECT * FROM khach_hang";
    $row = pdo_query($sql);
    return $row;
}
function khach_hang_user($user)
{
    $sql = "SELECT * FROM khach_hang where ten_dang_nhap='$user'";
    $row = pdo_query($sql);
    return $row;
}
function khach_hang_email($email)
{
    $sql = "SELECT *  FROM khach_hang WHERE email ='$email'";
    $row = pdo_query($sql);
    return $row;
}
function khach_hang_sdt($sdt)
{
    $sql = "SELECT *  FROM khach_hang WHERE sdt ='$sdt'";
    $row = pdo_query($sql);
    return $row;
}
function update_khachhang_mk($matkhau, $email, $user)
{
    $sql = "UPDATE khach_hang SET pass='$matkhau' WHERE email='$email' and ten_dang_nhap ='$user'";
    $row = pdo_execute($sql);
    return $row;
}
function update_bantin_2($user)
{
    $sql = "UPDATE khach_hang SET vai_tro='vip1' WHERE ten_dang_nhap='$user'";
    $row = pdo_execute($sql);
    return $row;
}
function update_bantin_3($user)
{
    $sql = "UPDATE khach_hang SET vai_tro='vip2' WHERE ten_dang_nhap='$user'";
    $row = pdo_execute($sql);
    return $row;
}
function update_khachhang($user, $hinh, $email, $sdt, $dia_chi)
{
    $sql = "UPDATE khach_hang SET hinh='$hinh',email='$email',sdt='$sdt',dia_chi='$dia_chi' WHERE ten_dang_nhap='$user'";
    $row = pdo_execute($sql);
    return $row;
}
function update_khachhang_pass($user, $matkhau)
{
    $sql = "UPDATE khach_hang SET pass='$matkhau' WHERE ten_dang_nhap='$user'";
    $row = pdo_execute($sql);
    return $row;
}
function insert_khachhang($user, $matkhau, $hinh, $email, $sdt, $dia_chi, $vai_tro)
{
    $sql = "INSERT INTO khach_hang(ten_dang_nhap,pass,hinh,email,sdt,dia_chi,vai_tro) VALUES('$user','$matkhau','$hinh','$email','$sdt','$dia_chi','$vai_tro')";
    $row = pdo_execute($sql);
    return $row;
}
// Bảng Hình 
function isert_hinh($ten_hinh, $id_sp)
{
    $sql = "INSERT INTO hinh(ten_hinh,id_bai_viet,id_sp) VALUES
        ('$ten_hinh',0,'$id_sp')";
    $row = pdo_execute($sql);
    return $row;
}
function hoa_don_khong_user()
{
    $sql = "SELECT * FROM hoa_don";
    $row = pdo_query($sql);
    return $row;
}
// Bảng bản tin
function insert_bantin_chitiet($id_sp, $huong_nha, $phap_ly, $noi_that, $so_phong, $ban_do, $dien_tich)
{
    $sql = "INSERT INTO bt_chi_tiet(id_san_pham,huong_nha,phap_ly,noi_that,so_phong,ban_do,dien_tich)
    VALUES ('$id_sp','$huong_nha','$phap_ly','$noi_that','$so_phong','$ban_do','$dien_tich')";
    $row = pdo_execute($sql);
    return $row;
}
function insert_bantin_chitiet_dat($id_sp, $huong_nha, $phap_ly, $ban_do, $dien_tich)
{
    $sql = "INSERT INTO bt_chi_tiet(id_san_pham,huong_nha,phap_ly,noi_that,so_phong,ban_do,dien_tich)
    VALUES ('$id_sp','$huong_nha','$phap_ly',0,0,'$ban_do','$dien_tich')";
    $row = pdo_execute($sql);
    return $row;
}
function update_bantin_chitiet($huong_nha, $phap_ly, $noi_that, $so_phong, $dien_tich, $ban_do, $id)
{
    $sql = "UPDATE bt_chi_tiet SET huong_nha='$huong_nha',phap_ly='$phap_ly',noi_that='$noi_that', so_phong='$so_phong',dien_tich='$dien_tich',ban_do='$ban_do' WHERE id_san_pham='$id'";
    $row = pdo_execute($sql);
    return $row;
}
function insert_bantin($ten_sp, $gia_sp, $dia_chi, $ten_hinh, $mo_ta, $date, $luot_xem, $sdt_sp, $id_danh_muc, $id_loai_dat, $user, $rong_sp, $dai_sp, $trang_thai)
{
    $sql = "INSERT INTO bang_tin(ten_san_pham,gia_san_pham,dia_chi,hinh_san_pham,thong_tin_mo_ta,ngay_dang,luot_xem,so_dien_thoai,id_danh_muc,id_loai_dat,ten_dang_nhap,chieu_rong,chieu_dai,trang_thai)
    VALUES ('$ten_sp','$gia_sp','$dia_chi','$ten_hinh','$mo_ta','$date','$luot_xem','$sdt_sp','$id_danh_muc','$id_loai_dat','$user','$rong_sp','$dai_sp','$trang_thai')";
    $row = pdo_execute($sql);
    return $row;
}
function insert_bantin_dat($ten_sp, $gia_sp, $dia_chi, $ten_hinh, $mo_ta, $date, $luot_xem, $sdt_sp, $id_danh_muc, $id_loai_dat, $user, $rong_sp, $dai_sp, $trang_thai)
{
    $sql = "INSERT INTO bang_tin(ten_san_pham,gia_san_pham,dia_chi,hinh_san_pham,thong_tin_mo_ta,ngay_dang,luot_xem,so_dien_thoai,id_danh_muc,id_loai_dat,ten_dang_nhap,chieu_rong,chieu_dai,trang_thai)
    VALUES ('$ten_sp','$gia_sp','$dia_chi','$ten_hinh','$mo_ta','$date','$luot_xem','$sdt_sp','$id_danh_muc','$id_loai_dat','$user','$rong_sp','$dai_sp','$trang_thai')";
    $row = pdo_execute($sql);
    return $row;
}
function update_bantin($id, $ten_sp, $gia_sp, $dia_chi, $ten_hinh, $mo_ta, $date, $sdt_sp,  $rong_sp, $dai_sp, $user)
{
    $sql = "UPDATE bang_tin SET ten_san_pham='$ten_sp',gia_san_pham='$gia_sp',dia_chi='$dia_chi',hinh_san_pham='$ten_hinh',thong_tin_mo_ta='$mo_ta',ngay_dang='$date',so_dien_thoai='$sdt_sp',chieu_rong='$rong_sp',chieu_dai='$dai_sp'
    WHERE id_san_pham='$id' and ten_dang_nhap='$user'";
    $row = pdo_execute($sql);
    return $row;
}
function updata_luot_xem_ban_tin($id)
{
    $sql = "UPDATE bang_tin SET luot_xem = luot_xem + 1 
    WHERE id_san_pham='$id' ";
    $row = pdo_execute($sql);
    return $row;
}
function ban_tin_moi_nhat()
{
    $sql = " SELECT *  FROM bang_tin ORDER BY id_san_pham DESC LIMIT 0,1";
    $row = pdo_query($sql);
    return $row;
}
function ban_tin_trangthai($trangthai)
{
    $sql = " SELECT *  FROM bang_tin where trang_thai = '$trangthai'";
    $row = pdo_query($sql);
    return $row;
}
function ban_tin_danh_muc($danh_muc)
{
    $sql = " SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham where a.id_danh_muc = '$danh_muc' ORDER BY RAND() LIMIT 0,10 ";
    $row = pdo_query($sql);
    return $row;
}
function ban_tin_id_danh_muc($id)
{
    $sql = " SELECT *  FROM bang_tin Where id_danh_muc='$id'";
    $row = pdo_query($sql);
    return $row;
}
function delete_ban_dan_tin_user($id, $user)
{
    $sql = " DELETE  FROM bang_tin WHERE id_san_pham='$id' and ten_dang_nhap='$user'";
    $row = pdo_execute($sql);
    return $row;
}
function delete_ban_dan_tin($id)
{
    $sql = " DELETE  FROM bang_tin WHERE id_san_pham='$id'";
    $row = pdo_execute($sql);
    return $row;
}
function ban_tin()
{
    $sql = " SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham ";
    $row = pdo_query($sql);
    return $row;
}
function ban_tin_id_sp($id)
{
    $sql = " SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham where a.id_san_pham='$id'";
    $row = pdo_query($sql);
    return $row;
}
function ban_tin_search($search)
{
    $sql = " SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham where ten_san_pham like '%$search%'";
    $row = pdo_query($sql);
    return $row;
}
function ban_tin_id($id)
{
    $sql = " SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham 
    WHERE id_danh_muc = '$id' and trang_thai='true'";
    $row = pdo_query($sql);
    return $row;
}
function ban_tin_timkiem_gia($sotien1, $sotien2)
{
    $sql = " SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham WHERE gia_san_pham >= '$sotien1' and gia_san_pham <='$sotien2' and trang_thai='true'";
    $row = pdo_query($sql);
    return $row;
}
function ban_tin_timkiem_dientich($dientich1, $dientich2)
{
    $sql = " SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham WHERE dien_tich >= '$dientich1' and dien_tich <= '$dientich2' and trang_thai='true'";
    $row = pdo_query($sql);
    return $row;
}
function ban_tin_timkiem_diachi($diachi)
{
    $sql = " SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham WHERE  dia_chi like '%$diachi%' and trang_thai='true'";
    $row = pdo_query($sql);
    return $row;
}
function ban_tin_tendangnhap($user)
{
    $sql = " SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham WHERE a.ten_dang_nhap = '$user' ";
    $row = pdo_query($sql);
    return $row;
}
function ban_tin_tendangnhap_id_sanpham($user, $id)
{
    $sql = " SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham WHERE a.ten_dang_nhap = '$user' and a.id_san_pham = '$id'";
    $row = pdo_query($sql);
    return $row;
}
function ban_tin_top()
{
    $sql = "SELECT * FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham";
    $row = pdo_query($sql);
    return $row;
}
function ban_tin_id_san_pham($id)
{
    $sql = " SELECT *  FROM loai_dat a INNER JOIN bang_tin b ON a.id_loai_dat=b.id_loai_dat INNER JOIN danh_muc e ON b.id_danh_muc=e.id_danh_muc INNER JOIN bt_chi_tiet c ON b.id_san_pham=c.id_san_pham WHERE b.id_san_pham='$id'";
    $row = pdo_query($sql);
    return $row;
}
function show_page_ban_tin($id, $start, $sp)
{
    $sql = "SELECT * FROM bang_tin Where id_danh_muc='$id' and trang_thai ='true' LIMIT $start,$sp";
    $row = pdo_query($sql);
    return $row;
}
function show_page_search($search, $start, $sp)
{
    $sql = "SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham where ten_san_pham like '%$search%' and trang_thai ='true' LIMIT $start,$sp";
    $row = pdo_query($sql);
    return $row;
}
function show_page_ngay_moinhaat($start, $sp)
{
    $sql = "SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham where ngay_dang > '0' and trang_thai ='true' ORDER BY ngay_dang  DESC LIMIT $start,$sp";
    $row = pdo_query($sql);
    return $row;
}
function ban_tin_ngay_moinhat()
{
    $sql = "SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham where ngay_dang > '0' and trang_thai ='true' ORDER BY ngay_dang  DESC ";
    $row = pdo_query($sql);
    return $row;
}
function show_page_theo_gia_thap($start, $sp)
{
    $sql = "SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham where gia_san_pham > '0' and trang_thai ='true' ORDER BY gia_san_pham  ASC LIMIT $start,$sp";
    $row = pdo_query($sql);
    return $row;
}
function ban_tin_theo_gia_thap()
{
    $sql = "SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham where gia_san_pham > '0' and trang_thai ='true' ORDER BY gia_san_pham  ASC ";
    $row = pdo_query($sql);
    return $row;
}
function show_page_theo_gia_cao($start, $sp)
{
    $sql = "SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham where gia_san_pham > '0' and trang_thai ='true' ORDER BY gia_san_pham  DESC LIMIT $start,$sp";
    $row = pdo_query($sql);
    return $row;
}
function ban_tin_theo_gia_cao()
{
    $sql = "SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham where gia_san_pham > '0' and trang_thai ='true' ORDER BY gia_san_pham  DESC ";
    $row = pdo_query($sql);
    return $row;
}
function show_page_ban_tin_sotien($sotien1, $sotien2, $start, $sp)
{
    $sql = " SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham WHERE gia_san_pham >= '$sotien1' and gia_san_pham <='$sotien2' LIMIT $start,$sp";
    $row = pdo_query($sql);
    return $row;
}
function show_page_ban_tin_dientich($dientich1, $dientich2, $start, $sp)
{
    $sql = " SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham WHERE dien_tich >= '$dientich1' and dien_tich <='$dientich2' LIMIT $start,$sp";
    $row = pdo_query($sql);
    return $row;
}
function show_page_ban_tin_diachi($diachi, $start, $sp)
{
    $sql = " SELECT *  FROM bang_tin a INNER JOIN bt_chi_tiet b ON a.id_san_pham=b.id_san_pham WHERE  dia_chi like'%$diachi%' LIMIT $start,$sp";
    $row = pdo_query($sql);
    return $row;
}
// bảng gói đăn tin
function goi_dan_tin()
{
    $sql = "SELECT *  FROM goi_dang_tin";
    $row = pdo_query($sql);
    return $row;
}
function goi_dan_tin_id($id)
{
    $sql = "SELECT *  FROM goi_dang_tin where id_goi_bang_tin = '$id'";
    $row = pdo_query($sql);
    return $row;
}
function duyet_bangtin($id)
{
    $sql = "UPDATE bang_tin SET trang_thai='true'WHERE id_san_pham='$id'";
    $row = pdo_execute($sql);
    return $row;
}
function insert_dan_tin($ten, $gia, $mota, $date)
{
    $sql = "INSERT INTO goi_dang_tin(ten_goi_bang_tin,gia,mo_ta_goi_bang_tin,ngay_cap_nhat)
    VALUES ('$ten','$gia','$mota','$date')";
    $row = pdo_execute($sql);
    return $row;
}
function delete_goi_dan_tin($id)
{
    $sql = " DELETE  FROM goi_dang_tin WHERE id_goi_bang_tin='$id'";
    $row = pdo_execute($sql);
    return $row;
}
function update_goi_dan_tin($id, $ten, $gia, $mota, $date)
{
    $sql = "UPDATE goi_dang_tin SET ten_goi_bang_tin='$ten',gia='$gia',mo_ta_goi_bang_tin='$mota',ngay_cap_nhat='$date' WHERE id_goi_bang_tin='$id'";
    $row = pdo_execute($sql);
    return $row;
}
// bảng hóa đơn 
function thanhtoan($user, $id_ban_tin, $soluong, $thanhtien, $ngayban)
{
    $sql = "INSERT INTO hoa_don(ten_dang_nhap,id_goi_bang_tin,so_luong,tong_tien,ngay_mua)
    VALUES ('$user','$id_ban_tin','$soluong','$thanhtien','$ngayban')";
    $row = pdo_execute($sql);
    return $row;
}
function hoa_don($user)
{
    $sql = "SELECT *  FROM hoa_don where ten_dang_nhap = '$user'";
    $row = pdo_query($sql);
    return $row;
}
function hoa_don_moi_nhat()
{
    $sql = " SELECT *  FROM hoa_don ORDER BY id_hoa_don DESC LIMIT 0,1";
    $row = pdo_query($sql);
    return $row;
}

// bang bai viet
function bai_viet()
{
    $sql = "SELECT *  FROM bai_viet";
    $row = pdo_query($sql);
    return $row;
}
function bai_viet_id($id)
{
    $sql = "SELECT *  FROM bai_viet WHERE ID_bai_viet = '$id'";
    $row = pdo_query($sql);
    return $row;
}
function bai_viet_time()
{
    $sql = "SELECT *  FROM bai_viet WHERE ngay > 0 ORDER BY ngay DESC LIMIT 0,5";
    $row = pdo_query($sql);
    return $row;
}
function bai_viet_luot_xem()
{
    $sql = "SELECT *  FROM bai_viet WHERE luot_xem > 0 ORDER BY luot_xem DESC LIMIT 0,5";
    $row = pdo_query($sql);
    return $row;
}
function bai_viet_luot_xem_cao_nhat()
{
    $sql = "SELECT *  FROM bai_viet WHERE luot_xem > 0 ORDER BY luot_xem DESC LIMIT 0,1";
    $row = pdo_query($sql);
    return $row;
}
function bai_viet_luot_xem_cao_2_3()
{
    $sql = "SELECT *  FROM bai_viet WHERE luot_xem > 0 ORDER BY luot_xem DESC LIMIT 1,2";
    $row = pdo_query($sql);
    return $row;
}
function bai_viet_luot_xem_cao_con_lai()
{
    $sql = "SELECT *  FROM bai_viet WHERE luot_xem > 0 ORDER BY luot_xem DESC LIMIT 3,10";
    $row = pdo_query($sql);
    return $row;
}
function update_banviet($tieude, $ten_hinh, $noidung, $id)
{
    $sql = "UPDATE bai_viet SET ten_bai_viet='$tieude',noi_dung='$noidung',hinh_bai_viet='$ten_hinh' WHERE ID_bai_viet='$id'";
    $row = pdo_execute($sql);
    return $row;
}
function update_banviet_luot_xem($id)
{
    $sql = "UPDATE bai_viet SET luot_xem = luot_xem + 1  WHERE ID_bai_viet='$id'";
    $row = pdo_execute($sql);
    return $row;
}
function  insert_baiviet($tendangnhap, $ten_hinh, $tieude, $noidung, $ngay, $luotxem)
{
    $sql = "INSERT INTO bai_viet(ten_dang_nhap,ten_bai_viet,hinh_bai_viet,noi_dung,trang_thai,ngay,luot_xem)
    VALUES ('$tendangnhap','$tieude','$ten_hinh','$noidung','false','$ngay','$luotxem')";
    $row = pdo_execute($sql);
    return $row;
}
function bai_viet_tendangnhap($user)
{
    $sql = "SELECT *  FROM bai_viet WHERE ten_dang_nhap = '$user'";
    $row = pdo_query($sql);
    return $row;
}
function delete_baiviet($id)
{
    $sql = " DELETE  FROM bai_viet WHERE ID_bai_viet='$id'";
    $row = pdo_execute($sql);
    return $row;
}
function delete_bai_viet_user($id, $user)
{
    $sql = " DELETE  FROM bai_viet WHERE ID_bai_viet='$id' and ten_dang_nhap='$user'";
    $row = pdo_execute($sql);
    return $row;
}
function update_banviet_user($tieude, $tenhinh, $noidung, $id, $user)
{
    $sql = "UPDATE bai_viet SET ten_bai_viet='$tieude',hinh_bai_viet='$tenhinh',noi_dung='$noidung' WHERE ID_bai_viet='$id'and ten_dang_nhap='$user'";
    $row = pdo_execute($sql);
    return $row;
}
function duyet_banviet($id)
{
    $sql = "UPDATE bai_viet SET trang_thai='true'WHERE ID_bai_viet='$id'";
    $row = pdo_execute($sql);
    return $row;
}
function bai_viet_id_user($id, $user)
{
    $sql = "SELECT *  FROM bai_viet WHERE ID_bai_viet = '$id' and ten_dang_nhap='$user'";
    $row = pdo_query($sql);
    return $row;
}
function bai_viet_user($user)
{
    $sql = "SELECT *  FROM bai_viet WHERE ten_dang_nhap='$user'";
    $row = pdo_query($sql);
    return $row;
}
function show_page_bai_viet($start, $sp)
{
    $sql = "SELECT * FROM bai_viet Where trang_thai ='true' LIMIT $start,$sp";
    $row = pdo_query($sql);
    return $row;
}
// bảng bình luận 
function binh_luan()
{
    $sql = "SELECT *  FROM binh_luan";
    $row = pdo_query($sql);
    return $row;
}
function binh_luan_id($id)
{
    $sql = "SELECT *  FROM bang_tin a  INNER JOIN binh_luan b ON a.id_san_pham = b.id_san_pham INNER JOIN khach_hang c ON a.ten_dang_nhap = c.ten_dang_nhap  WHERE a.id_san_pham ='$id'";
    $row = pdo_query($sql);
    return $row;
}
function delete_binhluan($id)
{
    $sql = " DELETE  FROM binh_luan WHERE id_binh_luan='$id'";
    $row = pdo_execute($sql);
    return $row;
}
function insert_binhluan($id, $user, $noidung, $ngay)
{
    $sql = "INSERT INTO binh_luan(ten_dang_nhap,id_san_pham,noi_dung,ngay)
    VALUES ('$user','$id','$noidung','$ngay')";
    $row = pdo_execute($sql);
    return $row;
}
function delete_binhluan_user($id, $user)
{
    $sql = " DELETE  FROM binh_luan WHERE id_binh_luan='$id' and ten_dang_nhap = '$user'";
    $row = pdo_execute($sql);
    return $row;
}
// bảng tin đã đăng 
function inser_tin_da_dang($id_ban_tin, $user, $id_hd, $somautindadang)
{
    $sql = "INSERT INTO tin_da_dang(id_goi_bang_tin,ten_dang_nhap,id_hoa_don,so_mau_tin_da_dang)
    VALUES ('$id_ban_tin', '$user', '$id_hd', '$somautindadang')";
    $row = pdo_execute($sql);
    return $row;
}
function  update_tin_da_dang($user, $somautindadang, $id_hd)
{
    $sql = "UPDATE tin_da_dang SET so_mau_tin_da_dang='$somautindadang' WHERE ten_dang_nhap='$user' and id_hoa_don = '$id_hd'";
    $row = pdo_execute($sql);
    return $row;
}
function tin()
{
    $sql = "SELECT * FROM tin_da_dang";
    $row = pdo_query($sql);
    return $row;
}
function tin_hd($user)
{
    $sql = "SELECT * FROM tin_da_dang where id_hoa_don > 0 and ten_dang_nhap = '$user'  ORDER BY id_hoa_don DESC LIMIT 0,1";
    $row = pdo_query($sql);
    return $row;
}
function tin_da_dang($user)
{
    $sql = "SELECT SUM(so_mau_tin_da_dang) AS 'tong' FROM tin_da_dang WHERE ten_dang_nhap ='$user'";
    $row = pdo_query($sql);
    return $row;
}
function tin_da_dang_giamdan($user)
{
    $sql = "SELECT *  FROM tin_da_dang WHERE ten_dang_nhap='$user' ORDER BY id_hoa_don DESC LIMIT 0,1 ";
    $row = pdo_query($sql);
    return $row;
}
// thống kê + đếm 
function dem_sp()
{
    $sql = "SELECT COUNT(*) as'soluong' FROM bang_tin WHERE bang_tin.id_san_pham >0  and bang_tin.trang_thai = 'true'";
    $row = pdo_query($sql);
    return $row;
}
function thong_ke_bl()
{
    $sql = "SELECT a.id_san_pham,a.ten_san_pham,
    COUNT(*) AS 'soluong',
    MIN(b.ngay) as 'cunhat',
    MAX(b.ngay) as 'moinhat'
    FROM bang_tin a INNER JOIN binh_luan b ON a.id_san_pham=b.id_san_pham 
    GROUP BY a.id_san_pham, a.ten_san_pham
    HAVING soluong > 0 
    ORDER BY soluong DESC ";
    $row = pdo_query($sql);
    return $row;
}
function thong_ke_hd()
{
    $sql = "SELECT a.ten_goi_bang_tin,b.ten_dang_nhap,
    COUNT(*) AS 'soluong',
    SUM(b.tong_tien) as 'thanhtien',
    MIN(b.ngay_mua) as 'cunhat',
    MAX(b.ngay_mua) as 'moinhat'
    FROM goi_dang_tin a INNER JOIN hoa_don b ON a.id_goi_bang_tin = b.id_goi_bang_tin
    GROUP BY a.ten_goi_bang_tin,b.ten_dang_nhap
    HAVING soluong > 0 
    ORDER BY soluong DESC";
    $row = pdo_query($sql);
    return $row;
}
function bieu_do_hd()
{
    $sql = "SELECT a.ten_goi_bang_tin,
    COUNT(a.ten_goi_bang_tin) AS 'soluong',
    SUM(b.tong_tien) as 'thanhtien',
    MIN(b.ngay_mua) as 'cunhat',
    MAX(b.ngay_mua) as 'moinhat'
    FROM goi_dang_tin a INNER JOIN hoa_don b ON a.id_goi_bang_tin = b.id_goi_bang_tin
    GROUP BY a.ten_goi_bang_tin
    HAVING soluong > 0 
    ORDER BY soluong DESC";
    $row = pdo_query($sql);
    return $row;
}
function bieu_do()
{
    $sql = "SELECT a.ten_danh_muc,b.ten_dang_nhap,
    COUNT(*) AS 'soluong',
    MIN(b.gia_san_pham) AS 'thapnhat',
    MAX(b.gia_san_pham) AS 'caonhat',
    AVG(b.gia_san_pham) AS 'giatb'
    FROM danh_muc a INNER JOIN bang_tin b ON a.id_danh_muc=b.id_danh_muc
    GROUP BY  a.ten_danh_muc";
    $row = pdo_query($sql);
    return $row;
}
function thong_ke_bt($ten)
{
    $sql = "SELECT a.ten_danh_muc,b.ten_dang_nhap,
    COUNT(*) AS 'soluong',
    MIN(b.gia_san_pham) AS 'thapnhat',
    MAX(b.gia_san_pham) AS 'caonhat',
    AVG(b.gia_san_pham) AS 'giatb'
    FROM danh_muc a INNER JOIN bang_tin b ON a.id_danh_muc=b.id_danh_muc WHERE b.ten_dang_nhap ='$ten'
    GROUP BY  a.ten_danh_muc";
    $row = pdo_query($sql);
    return $row;
}
// bảng loại đất 
function loai_dat()
{
    $sql = "SELECT *  FROM loai_dat";
    $row = pdo_query($sql);
    return $row;
}
function update_loai_dat($id, $ten_ld)
{
    $sql = "UPDATE loai_dat SET ten_loai_dat='$ten_ld' WHERE id_loai_dat='$id'";
    $row = pdo_execute($sql);
    return $row;
}
function delete_loai_dat($id)
{
    $sql = " DELETE  FROM loai_dat WHERE id_loai_dat='$id'";
    $row = pdo_execute($sql);
    return $row;
}
function loai_dat_id($id)
{
    $sql = "SELECT *  FROM loai_dat where id_loai_dat='$id'";
    $row = pdo_query($sql);
    return $row;
}
function insert_loaidat($ten_ld)
{
    $sql = "INSERT INTO loai_dat(ten_loai_dat) VALUES('$ten_ld')";
    $row = pdo_execute($sql);
    return $row;
}
// bảng liên hệ 
function insert_lienhe($user, $noi_dung)
{
    $sql = "INSERT INTO lienhe(ten_dang_nhap,noi_dung,trangthai) VALUES('$user','$noi_dung','false')";
    $row = pdo_execute($sql);
    return $row;
}
function lienhe()
{
    $sql = "SELECT *  FROM lienhe";
    $row = pdo_query($sql);
    return $row;
}
function da_lien_he($id)
{
    $sql = "UPDATE lienhe SET trangthai='true' WHERE id_lien_he='$id'";
    $row = pdo_execute($sql);
    return $row;
}
