<?php
include("../../controller/gobal.php");
include("../../..$database/function.php");
$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {
    case 'binhluan':  
        if (isset($_SESSION['user'])){     
            if (isset($_POST['sub_mit'])) {
                $id = $_GET['id'];
                $user = $_SESSION['user'];
                $noidung = $_POST['noidung'];
                $ngay = date("Y/m/d");
                insert_binhluan($id, $user, $noidung, $ngay);
                header("location:$controller/layout.php?bantin_chitiet&id=$id");          
                }                
            }else{
                echo "<script>alert('Đăng nhập mới bình luận')</script>";
            } 
        break;
    case 'xoa_binhluan':
        $id_sp = $_GET['sp'];
        $id = $_GET['id'];
        $user = $_SESSION['user'];
        delete_binhluan_user($id, $user);
        header("location:$controller/layout.php?bantin_chitiet&id=$id_sp");
        break;
}
