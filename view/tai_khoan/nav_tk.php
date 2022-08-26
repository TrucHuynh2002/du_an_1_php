<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài Khoản</title>
    <!-- Boxicons link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= $css ?>/nav.css">
    <script src="https://kit.fontawesome.com/c9376b777e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="sidebar">
        <div class="logo_content">
            <?php
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user'];
                $row = khach_hang_user($user);
                foreach ($row as $a) {
            ?>
                    <div class="logo">
                        <img class="img-fluid" src="<?= $img ?>/<?= $a['hinh'] ?>" alt="">
                    </div>
                    <i class='bx bx-menu' id="btn"></i>
            <?php }
            } ?>
        </div>
        <ul nav_list>
            <li>
                <a href="<?= $taikhoan ?>/layout.php?tai_khoan_list">
                    <i class='bx bx-user-circle'></i>
                    <span class="links_name">Thông tin tài khoản</span>
                </a>
            </li>
            <li>
                <a href="<?= $taikhoan ?>/layout.php?baiviet_list">
                    <i class='bx bx-edit-alt'></i>
                    <span class="links_name">Bài viết</span>
                </a>
            </li>
            <li>
                <a href="<?= $taikhoan ?>/layout.php?ban_tin_list">
                    <i class='bx bx-store-alt'></i>
                    <span class="links_name">Bản tin</span>
                </a>
            </li>
            <li>
                <a href="<?= $controller ?>/layout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Trang chủ</span>
                </a>
            </li>
            <li>
                <?php if ($user == 'admin') {
                ?>
                    <a href="<?= $admin ?>/layout.php">
                        <i class='bx bx-log-out'></i>
                        <span class="links_name">Trang admin</span>
                    </a>
                <?php  } ?>
            </li>
        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>