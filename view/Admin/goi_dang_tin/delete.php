<?php
include("../../../controller/gobal.php");
include("../../../model/database/function.php");
if (!isset($_GET['id']) || $_GET['id'] == null) {
} else {
    $id = $_GET['id'];
    $row = delete_goi_dan_tin($id);
}
header("location:$admin/layout.php?dan_tin_list");
