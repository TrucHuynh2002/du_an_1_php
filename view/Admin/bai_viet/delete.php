<?php
include("../../../controller/gobal.php");
include("../../../model/database/function.php");
if (!isset($_GET['id']) || $_GET['id'] == null) {
} else {
    $id = $_GET['id'];
    $row = delete_baiviet($id);
    header("location:$admin/layout.php?baiviet_list");
}
