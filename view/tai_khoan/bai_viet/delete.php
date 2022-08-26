<?php
include("../../../controller/gobal.php");
include("../../../model/database/function.php");
if (!isset($_GET['id']) || $_GET['id'] == null) {
} else {
    $user = $_SESSION['user'];
    $id = $_GET['id'];
    $row = delete_bai_viet_user($id, $user);
}
header("location:$taikhoan/layout.php?baiviet_list");
