<!doctype html>
<html lang="en">

<head>
    <title>Bài viết</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script type="text/javascript" src="../../..<?= $thuvien ?>/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="alert alert-danger">
                    <strong>
                        <h4 style="text-align: center;">BÀI VIẾT</h4>
                    </strong>
                </div>
                <?php
                if (isset($_POST['sub_mit'])) {
                    $path = $_SERVER['DOCUMENT_ROOT'] . $img;
                    $user = $_SESSION['user'];
                    $id = $_GET['id'];
                    $tieude = $_POST['tieu_de'];
                    $noidung = $_POST['content'];
                    $ten_hinh =  $_FILES['hinh']['name'];
                    move_uploaded_file($_FILES['hinh']['tmp_name'], "$path./$ten_hinh");
                    $row = update_banviet_user($tieude, $ten_hinh, $noidung, $id, $user);
                    echo "<script>alert('Cập nhật thành công')</script>";
                }
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $row = bai_viet_id_user($id, $user);
                    foreach ($row as $a) {
                ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <h5>Mã bài viết</h5>
                                <input class="form-control" disabled type="text" value="<?= $a['ID_bai_viet'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Tên Đăng Nhập</h5>
                                <input class="form-control" disabled type="text" name="" value="<?= $a['ten_dang_nhap'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Tiêu Đề</h5>
                                <input class="form-control" type="text" name="tieu_de" value="<?= $a['ten_bai_viet'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Nội Dung</h5>
                                <td><textarea name="content" id="content" rows="10" cols="150"><?= $a['noi_dung'] ?></textarea></td>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="sub_mit">Cập nhật</button>
                        </form>
                <?php
                    }
                }
                ?>
                <a name="" id="" class="btn btn-outline-info btn-block" href="<?= $taikhoan ?>/layout.php?baiviet_list" role="button">Trở về danh sách</a>
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