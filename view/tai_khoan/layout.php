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
    extract($_REQUEST);
    function kiem_tra($b)
    {
        return array_key_exists($b, $_REQUEST);
    }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" style="padding: 0;">
                <?php require_once("../../..$taikhoan/nav_tk.php"); ?>
            </div>
            <div class="col-md-10" style="padding: 0;">
                <!-- /Du_An_1/view/tai_khoan/tt_tai_khoan/list.php -->
                <?php
                if (kiem_tra("tai_khoan_list", $_REQUEST)) {
                    include("../../view/tai_khoan/tt_tai_khoan/list.php");
                } else if (kiem_tra("tai_khoan_change", $_REQUEST)) {
                    include("../../view/tai_khoan/tt_tai_khoan/change.php");
                } else if (kiem_tra("tai_khoan_edit", $_REQUEST)) {
                    include("../../view/tai_khoan/tt_tai_khoan/edit.php");
                } else if (kiem_tra("ban_tin_list", $_REQUEST)) {
                    include("../../view/tai_khoan/ban_tin/list.php");
                } else if (kiem_tra("ban_tin_edit", $_REQUEST)) {
                    include("../../view/tai_khoan/ban_tin/edit.php");
                } else if (kiem_tra("ban_tin_details", $_REQUEST)) {
                    include("../../view/tai_khoan/ban_tin/details.php");
                } else if (kiem_tra("baiviet_edit", $_REQUEST)) {
                    include("../../view/tai_khoan/bai_viet/edit.php");
                } else if (kiem_tra("baiviet_new", $_REQUEST)) {
                    include("../../view/tai_khoan/bai_viet/new.php");
                } else if (kiem_tra("baiviet_list", $_REQUEST)) {
                    include("../../view/tai_khoan/bai_viet/list.php");
                } else if (kiem_tra("baiviet_details", $_REQUEST)) {
                    include("../../view/tai_khoan/bai_viet/details.php");
                }
                ?>
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