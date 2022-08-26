<!doctype html>
<html lang="en">

<head>
    <title>Gói đăng tin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script type="text/javascript" src="../../..<?= $thuvien ?>/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['sub_mit'])) {
            $ten = $_POST['ten'];
            $gia = $_POST['gia'];
            $mota = $_POST['content'];
            $date = date("Y/m/d");
            $row = update_goi_dan_tin($id, $ten, $gia, $mota, $date);
            echo "<script>alert('Cập nhật thành công')</script>";
        }
        $row = goi_dan_tin_id($id);
        foreach ($row as $a) {
    ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="alert alert-danger">
                            <strong>
                                <h4 style="text-align: center;">Danh sách gói đăng tin</h4>
                            </strong>
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <h5>Tền Gói bảng tin</h5>
                                <input class="form-control" name="ten" value="<?= $a['ten_goi_bang_tin'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Giá</h5>
                                <input class="form-control" name="gia" value="<?= $a['gia'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Mô tả</h5>
                                <td><textarea name="content" id="content" rows="10" cols="150"><?= $a['mo_ta_goi_bang_tin'] ?></textarea></td>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="sub_mit">Cập nhật</button>
                            <a href="<?= $admin ?>/layout.php?dan_tin_list">
                                <button type="button" class="btn btn-primary btn-block">Danh sách</button>
                            </a>
                        </form>
                <?php }
        } ?>
                    </div>
                </div>
            </div>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('content');
            </script>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>