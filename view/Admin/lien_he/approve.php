<?php
include("../../../controller/gobal.php");
include("../../../model/database/function.php");
if (!isset($_GET['id']) || $_GET['id'] == null) {
} else {
    $id = $_GET['id'];
    $row = da_lien_he($id);
    header("location:$admin/layout.php?lienhe");
}
