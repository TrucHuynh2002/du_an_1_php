<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>
    <?php
    include("gobal.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/PHP1/model/database/function.php");
    $a = $_SERVER['DOCUMENT_ROOT'] . "/PHP1/view/container.php";
    extract($_REQUEST);
    function kiem_tra($b)
    {
        return array_key_exists($b, $_REQUEST);
    }
    if (kiem_tra("gioithieu", $_REQUEST)) {
        $a = $_SERVER['DOCUMENT_ROOT'] . "/PHP1/view/gioithieu.php";
    } else if (kiem_tra("lienhe", $_REQUEST)) {
        $a = $_SERVER['DOCUMENT_ROOT'] . "/PHP1/view/lienhe.php";
    } else if (kiem_tra("tintuc", $_REQUEST)) {
        $a = $_SERVER['DOCUMENT_ROOT'] . "/PHP1/view/tintuc.php";
    } else if (kiem_tra("bantin", $_REQUEST)) {
        $a = $_SERVER['DOCUMENT_ROOT'] . "/PHP1/view/bantin.php";
    } else if (kiem_tra("bantin_chitiet", $_REQUEST)) {
        $a = $_SERVER['DOCUMENT_ROOT'] . "/PHP1/view/chitiet-bantin.php";
    } else if (kiem_tra("goi_dang_tin", $_REQUEST)) {
        $a = $_SERVER['DOCUMENT_ROOT'] . "/PHP1/view/goi_dang_tin.php";
    } else if (kiem_tra("cart", $_REQUEST)) {
        $a = $_SERVER['DOCUMENT_ROOT'] . "/PHP1/view/cart.php";
    } else if (kiem_tra("dang_tin", $_REQUEST)) {
        $a = $_SERVER['DOCUMENT_ROOT'] . "/PHP1/view/dangtin.php";
    // } else if (kiem_tra("timkiem", $_REQUEST)) {
    //     $a = $_SERVER['DOCUMENT_ROOT'] . "/PHP1/view/timkiem.php";
    } else if (kiem_tra("baiviet_chitiet", $_REQUEST)) {
        $a = $_SERVER['DOCUMENT_ROOT'] . "/PHP1/view/chitiet-tintuc.php";
    }
    ?>
    <div class="container">
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/PHP1/view/header.php"); ?>
        <?php include($a) ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/PHP1/view/footer.php"); ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>