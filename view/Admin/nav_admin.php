<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN_QUẢN TRỊ</title>
    <!-- Boxicons link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= $css ?>/nav.css">
    <script src="https://kit.fontawesome.com/c9376b777e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="thong-tin">
                <i class='bx bx-building-house'></i>
                <div>ADMIN</div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="<?= $controller ?>/layout.php">
                    <i class="fas fa-home"></i>
                    <span class="links_name">Về trang chủ</span>
                </a>
            </li>
            <li>
                <a href="<?= $admin ?>/layout.php?danhmuc_list">
                    <i class="far fa-address-book"></i>
                    <span class="links_name">Danh mục</span>
                </a>
            </li>
            <li>
                <a href="<?= $admin ?>/layout.php?loaidat_list">
                    <i class="fas fa-solar-panel"></i>
                    <span class="links_name">Loại Đất</span>
                </a>
            </li>
            <li>
                <a href="<?= $admin ?>/layout.php?binhluan_list">
                    <i class='bx bx-comment-dots'></i>
                    <span class="links_name">Bình luận</span>
                </a>
            </li>
            <li>
                <a href="<?= $admin ?>/layout.php?baiviet_list">
                    <i class='bx bx-edit-alt'></i>
                    <span class="links_name">Bài viết</span>
                </a>
            </li>
            <li>
                <a href="<?= $admin ?>/layout.php?bangtin_list">
                    <i class='bx bx-store-alt'></i>
                    <span class="links_name">Bản tin</span>
                </a>
            </li>
            <li>
                <a href="<?= $admin ?>/layout.php?dan_tin_list">
                    <i class='bx bx-bar-chart-alt-2'></i>
                    <span class="links_name">Gói đăng tin</span>
                </a>
            </li>
            <li>
                <a href="<?= $admin ?>/layout.php?lienhe">
                    <i class="fab fa-accessible-icon"></i>
                    <span class="links_name">Hổ trợ khách hàng</span>
                </a>
            </li>
            <li>
                <a href="<?= $admin ?>/layout.php?khachhang_list">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Khách hàng</span>
                </a>
            </li>
            <div class="dropdown hove" style="margin-left: 15px;">
                <button type="button" style="background: none;border: none;padding: 8px;" class="btn btn-primary dropdown-toggle " data-toggle="dropdown">
                    <i style="margin-right: 10px;" class="fas fa-th-list"></i>
                    Thống kê
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= $admin ?>/layout.php?thongke_bt">Thống kê bản tin theo danh mục</a>
                    <a class="dropdown-item" href="<?= $admin ?>/layout.php?thongke_bl">Thống kê theo bình luận</a>
                    <a class="dropdown-item" href="<?= $admin ?>/layout.php?thongke_hd">Thống kê theo hóa đơn</a>
                </div>
            </div>

        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>