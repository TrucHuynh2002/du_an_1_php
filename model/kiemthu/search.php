<?php
include("../../controller/gobal.php");
include("../../..$database/function.php");
$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {
    case 'search':
        if (isset($_POST['sub_mit'])) {
            $search = $_POST['search'];
            header("location:$controller/layout.php?timkiem&search=$search");
        }
        break;
}
function search()
{
    if (isset($_POST['search'])) {
        $search = $_POST['search'];
        $result = ban_tin_search($search);
        if ($result) {
            echo "Sản phẩm gợi ý";
            foreach ($result as $a) {
?>
                <div class="row" style="margin: 15px 0; align-items: center;">
                    <div class="col-4">
                        <a href="../../controller/layout.php?bantin_chitiet&id=<?= $a['id_san_pham'] ?>"><img class="img-fluid" src="../../content/img/<?= $a['hinh_san_pham'] ?>" alt=""></a>
                    </div>
                    <div class="col-8" style="text-align: left;font-size: 10px;line-height: 31px;">
                        <a style="color: #2e343a;" href="../../controller/layout.php?bantin_chitiet&id=<?= $a['id_san_pham'] ?>"><?= $a['ten_san_pham'] ?></a>
                        <div class="row" style="align-items: baseline;margin-left:5px;">
                            <i class="far fa-clock" style="margin-right: 10px;"></i>
                            <span><?= $a['ngay'] ?></span>
                        </div>
                    </div>
                </div>
<?php
            }
        }
    }
}
?>