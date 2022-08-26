<!doctype html>
<html lang="en">

<head>
    <title>Bài viết</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script type="text/javascript" src="../..<?= $thuvien ?>/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($_POST['sub_mit'])) {
        $tendangnhap = $_SESSION['user'];
        $tieude = $_POST['tieude'];
        $ten_hinh =  $_FILES['hinh']['name'];
        $noidung = $_POST['content'];
        $ngay = date("Y/m/d");
        $luotxem = 0;
        move_uploaded_file($_FILES['hinh']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/content/img/$ten_hinh");
        $row =  insert_baibiet($tendangnhap, $ten_hinh, $tieude, $noidung, $ngay, $luotxem);
    } ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="alert alert-danger">
                    <strong>
                        <h4 style="text-align: center;">BÀI VIẾT</h4>
                    </strong>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <h5>Tiêu đề</h5>
                        <input class="form-control" type="text" name="tieude">
                    </div>
                    <div class="form-group">
                        <h5>Hình bài viết</h5>
                        <input class="form-control" type="file" name="hinh">
                    </div>
                    <div class="form-group">
                        <h5>Nội Dung</h5>
                        <td><textarea name="content" id="content" rows="10" cols="150"></textarea></td>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="sub_mit">Thêm bài viết</button>
                    <a class="btn btn-success btn-block" href="<?= $taikhoan ?>/layout.php?baiviet_list" role="button">Danh sách</a>
                </form>
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