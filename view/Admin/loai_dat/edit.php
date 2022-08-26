<!doctype html>
<html lang="en">

<head>
    <title>Bài viết</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['sub_mit'])) {
            $ten_ld = $_POST['ten_dm'];
            $row = update_loai_dat($id, $ten_ld);
            echo "<script>alert('Cập nhật thành công')</script>";
        }
        $row = loai_dat_id($id);
        foreach ($row as $a) {
    ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="alert alert-danger">
                            <strong>
                                <h4 style="text-align: center;">Cập nhật loại đất</h4>
                            </strong>
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <h5>Mã loại đất</h5>
                                <input class="form-control" disabled type="text" value="<?= $a['id_loai_dat'] ?>">
                            </div>
                            <div class="form-group">
                                <h5>Tên loại đất</h5>
                                <input class="form-control" type="text" name="ten_dm" value="<?= $a['ten_loai_dat']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="sub_mit">Cập nhật</button>
                            <a name="" id="" class="btn btn-primary btn-block" href="<?= $admin ?>/layout.php?loaidat_list" role="button">Trở về danh sách</a>
                        </form>
                    </div>
                </div>
        <?php
        }
    }
        ?>
            </div>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>