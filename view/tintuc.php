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
    // vị trí hiện tại trang
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    // số sản phẩm trên 1 trang
    $sp = 3;
    // công thức tính vị trí sản phẩm bắt đầu muốn lấy 
    $start = $page * $sp - $sp;
    $row = bai_viet();
    // show sản phẩm 
    $rows = show_page_bai_viet($start, $sp);
    // đếm số lượng sản phẩm
    $rooCount = count($row);
    // tổng số trang 
    $total = ceil($rooCount / $sp);
    if (!empty($rows)) {
        foreach ($rows as $a) {
            extract($a);
    ?>
            <div class="row bentrai" style="margin-top:20px;">
                <div class="col-sm-12 col-md-3">
                    <img class="img-fluid" src="<?= $img ?>/<?php echo $a['hinh_bai_viet'] ?>" alt="">
                </div>
                <div class="col-sm-12 col-md-9">
                    <a href="<?= $controller ?>/layout.php?baiviet_chitiet&id=<?= $a['ID_bai_viet'] ?>">
                        <h2 class="card-title"><?php echo $a['ten_bai_viet']; ?></h2> <a href="#" class="alert-link"></a>
                    </a>
                    <div class="card-body" style="display: flex;align-items: baseline;font-size: 15px;">
                        <i class="far fa-clock"></i>
                        <p style="margin: 0 10px;"><?php echo $a['ngay']; ?></p>
                    </div>
                </div>
                <hr>
            </div>
    <?php
        }
    }
    ?>
    <nav aria-label="Page navigation example">
        <ul class="pagination" style="font-size: 15px;justify-content: center;">
            <?php for ($i = 1; $i <= $total; $i++) { ?>
                <li class="page-item">
                    <?php if ($page == $i) { ?>
                        <a class="page-link active" style="font-size: 15px;color: #33b786;margin: 0 3px;" href="<?= $controller ?>/layout.php?tintuc&page=<?= $i ?>"><?= $i ?></a>
                    <?php } else { ?>
                        <a class=" page-link" style="font-size: 15px;color: #33b786;margin: 0 3px;" href="<?= $controller ?>/layout.php?tintuc&page=<?= $i ?>"><?= $i ?></a>
                    <?php }
                    ?>
                </li>
            <?php } ?>
        </ul>
    </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>