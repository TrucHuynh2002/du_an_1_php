<?php
include("../../../controller/gobal.php");
include("../../../model/database/function.php");
if (!isset($_GET['id']) || $_GET['id'] == null) {
} else {
    $id = $_GET['id'];
    $row = duyet_bangtin($id);
    header("location:$admin/layout.php?bangtin_list");
}
